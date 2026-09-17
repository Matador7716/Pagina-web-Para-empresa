Attribute VB_Name = "Modulo_Sistema"
Option Explicit

' Global variables for user session state
Public CurrentUser As String
Public CurrentUserRole As String
Public CurrentUserId As String

' Constant definitions
Public Const HOJA_INICIO As String = "Inicio"
Public Const HOJA_DATOS As String = "Datos Registrados"
Public Const HOJA_USUARIOS As String = "Usuarios"
Public Const HOJA_GASTOS As String = "Registro de Gastos"

' =================================================================
'  INICIALIZACIÓN Y CONTROL DE SESIÓN
' =================================================================

Public Sub IniciarSistema()
    ' Muestra la pantalla de login al iniciar el sistema
    If CurrentUser = "" Then
        FrmLogin.Show
    Else
        FrmMenuPrincipal.Show
    End If
End Sub

Public Sub CerrarSesion()
    ' Finaliza la sesión actual y resetea las variables globales
    If MsgBox("¿Está seguro que desea cerrar la sesión actual?", vbQuestion + vbYesNo, "Cerrar Sesión") = vbYes Then
        CurrentUser = ""
        CurrentUserRole = ""
        CurrentUserId = ""

        ' Actualizar Hoja Inicio
        Dim wsInicio As Worksheet
        Set wsInicio = ThisWorkbook.Sheets(HOJA_INICIO)
        wsInicio.Range("C5").Value = "Sin Sesión"
        wsInicio.Range("C6").Value = "-"
        wsInicio.Range("C7").Value = "-"

        MsgBox "Sesión cerrada correctamente.", vbInformation, "Sistema de Gastos"

        ' Mostrar Login
        FrmLogin.Show
    End If
End Sub

' =================================================================
'  GESTIÓN DE PERMISOS DE USUARIO
' =================================================================

Public Function VerificarPermiso(ByVal Accion As String) As Boolean
    ' Verifica si el usuario actual tiene permiso para realizar una acción
    ' Acciones: "REGISTRAR", "EDITAR", "ELIMINAR", "ADMIN_USUARIOS"

    If CurrentUser = "" Then
        MsgBox "No hay una sesión activa. Por favor inicie sesión.", vbCritical, "Acceso Denegado"
        VerificarPermiso = False
        Exit Function
    End If

    Select Case UCase(Accion)
        Case "REGISTRAR", "EDITAR", "BUSCAR", "CONSULTAR"
            ' Tanto Administrador como Editor pueden registrar y editar
            VerificarPermiso = True

        Case "ELIMINAR"
            ' Sólo Administrador puede eliminar registros
            If UCase(CurrentUserRole) = "ADMINISTRADOR" Then
                VerificarPermiso = True
            Else
                MsgBox "Acceso denegado: Únicamente los usuarios con rol ADMINISTRADOR pueden eliminar registros.", vbExclamation, "Permisos Insuficientes"
                VerificarPermiso = False
            End If

        Case "ADMIN_USUARIOS"
            ' Sólo Administrador puede gestionar usuarios
            If UCase(CurrentUserRole) = "ADMINISTRADOR" Then
                VerificarPermiso = True
            Else
                MsgBox "Acceso denegado: La administración de usuarios está reservada para el ADMINISTRADOR.", vbExclamation, "Permisos Insuficientes"
                VerificarPermiso = False
            End If

        Case Else
            VerificarPermiso = False
    End Select
End Function

' =================================================================
'  GENERACIÓN AUTOMÁTICA DE N.º DE ORDEN
' =================================================================

Public Function GenerarNuevoNumeroOrden() As String
    ' Genera un correlativo secuencial con formato ORD-XXXX
    Dim wsDatos As Worksheet
    Dim lastRow As Long
    Dim maxNum As Long
    Dim i As Long
    Dim currentVal As String
    Dim numPart As Long

    Set wsDatos = ThisWorkbook.Sheets(HOJA_DATOS)
    lastRow = wsDatos.Cells(wsDatos.Rows.Count, "A").End(xlUp).Row

    maxNum = 0

    If lastRow >= 7 Then
        For i = 7 To lastRow
            currentVal = Trim(CStr(wsDatos.Cells(i, 1).Value))
            If Left(currentVal, 4) = "ORD-" Then
                On Error Resume Next
                numPart = CLng(Mid(currentVal, 5))
                On Error GoTo 0
                If numPart > maxNum Then maxNum = numPart
            End If
        Next i
    End If

    maxNum = maxNum + 1
    GenerarNuevoNumeroOrden = "ORD-" & Format(maxNum, "0000")
End Function

' =================================================================
'  ACTUALIZACIÓN Y REFRESCO DE DASHBOARD
' =================================================================

Public Sub ActualizarDashboard()
    Dim wsInicio As Worksheet
    Dim wsDatos As Worksheet
    Dim lastRowDatos As Long
    Dim i As Long, targetRow As Long

    Set wsInicio = ThisWorkbook.Sheets(HOJA_INICIO)
    Set wsDatos = ThisWorkbook.Sheets(HOJA_DATOS)

    ' Actualizar datos de usuario
    If CurrentUser <> "" Then
        wsInicio.Range("C5").Value = CurrentUser
        wsInicio.Range("C6").Value = CurrentUserRole
        wsInicio.Range("C7").Value = Now()
    End If

    ' Limpiar tabla de últimos movimientos (Filas 14 a 19)
    wsInicio.Range("A14:I19").ClearContents

    lastRowDatos = wsDatos.Cells(wsDatos.Rows.Count, "A").End(xlUp).Row

    targetRow = 14
    If lastRowDatos >= 7 Then
        ' Recorrer desde el último hacia atrás para mostrar hasta 6 últimos movimientos
        For i = lastRowDatos To 7 Step -1
            If targetRow > 19 Then Exit For
            wsInicio.Cells(targetRow, 1).Value = wsDatos.Cells(i, 1).Value ' N.º Orden
            wsInicio.Cells(targetRow, 2).Value = wsDatos.Cells(i, 2).Value ' Fecha
            wsInicio.Cells(targetRow, 3).Value = wsDatos.Cells(i, 3).Value ' Usuario
            wsInicio.Cells(targetRow, 4).Value = wsDatos.Cells(i, 4).Value ' Tipo
            wsInicio.Cells(targetRow, 5).Value = wsDatos.Cells(i, 5).Value ' Categoría
            wsInicio.Cells(targetRow, 6).Value = wsDatos.Cells(i, 6).Value ' Descripción
            wsInicio.Cells(targetRow, 7).Value = wsDatos.Cells(i, 7).Value ' Monto
            wsInicio.Cells(targetRow, 8).Value = wsDatos.Cells(i, 8).Value ' Medio Pago
            wsInicio.Cells(targetRow, 9).Value = wsDatos.Cells(i, 10).Value ' Estado
            targetRow = targetRow + 1
        Next i
    End If

    ' Recalcular fórmulas de la hoja
    wsInicio.Calculate
End Sub

' =================================================================
'  MÉTODOS DE NAVEGACIÓN Y APERTURA DE FORMULARIOS
' =================================================================

Public Sub AbrirFormularioRegistro()
    FrmRegistro.Show
End Sub

Public Sub AbrirFormularioUsuarios()
    If VerificarPermiso("ADMIN_USUARIOS") Then
        FrmUsuarios.Show
    End If
End Sub

Public Sub AbrirMenuPrincipal()
    FrmMenuPrincipal.Show
End Sub

Public Sub IrA_HojaInicio()
    ThisWorkbook.Sheets(HOJA_INICIO).Activate
End Sub

Public Sub IrA_HojaDatos()
    ThisWorkbook.Sheets(HOJA_DATOS).Activate
End Sub

Public Sub IrA_HojaGastos()
    ThisWorkbook.Sheets(HOJA_GASTOS).Activate
End Sub

Public Sub IrA_HojaUsuarios()
    If VerificarPermiso("ADMIN_USUARIOS") Then
        ThisWorkbook.Sheets(HOJA_USUARIOS).Activate
    End If
End Sub
