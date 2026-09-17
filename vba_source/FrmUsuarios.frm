VERSION 5.00
Begin {C62A69F0-16DC-11CE-9E98-00AA00574A4F} FrmUsuarios
   Caption         = "👥 Administración y Control de Usuarios"
   ClientHeight    = 5200
   ClientLeft      = 120
   ClientTop       = 460
   ClientWidth     = 6500
   StartUpPosition = 1  'CenterOwner
End
Attribute VB_Name = "FrmUsuarios"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False

Option Explicit

Private Sub UserForm_Initialize()
    CargarCombos
    LimpiarFormulario
End Sub

Private Sub CargarCombos()
    Me.CboRol.Clear
    Me.CboRol.AddItem "Administrador"
    Me.CboRol.AddItem "Editor"

    Me.CboEstado.Clear
    Me.CboEstado.AddItem "Activo"
    Me.CboEstado.AddItem "Inactivo"
End Sub

Private Sub LimpiarFormulario()
    Me.TxtIdUsuario.Value = GenerarNuevoIdUsuario()
    Me.TxtUsuario.Value = ""
    Me.TxtNombre.Value = ""
    Me.TxtPassword.Value = ""
    Me.CboRol.Value = "Editor"
    Me.CboEstado.Value = "Activo"

    Me.TxtUsuario.Enabled = True
    Me.BtnGuardar.Enabled = True
    Me.BtnActualizar.Enabled = False
End Sub

Private Function GenerarNuevoIdUsuario() As String
    Dim wsUsr As Worksheet
    Dim lastRow As Long, i As Long
    Dim maxNum As Long, numPart As Long
    Dim curVal As String

    Set wsUsr = ThisWorkbook.Sheets(HOJA_USUARIOS)
    lastRow = wsUsr.Cells(wsUsr.Rows.Count, "A").End(xlUp).Row
    maxNum = 0

    If lastRow >= 7 Then
        For i = 7 To lastRow
            curVal = Trim(CStr(wsUsr.Cells(i, 1).Value))
            If Left(curVal, 4) = "USR-" Then
                On Error Resume Next
                numPart = CLng(Mid(curVal, 5))
                On Error GoTo 0
                If numPart > maxNum Then maxNum = numPart
            End If
        Next i
    End If

    maxNum = maxNum + 1
    GenerarNuevoIdUsuario = "USR-" & Format(maxNum, "003")
End Function

Private Sub BtnLimpiar_Click()
    LimpiarFormulario
End Sub

Private Sub BtnGuardar_Click()
    Dim wsUsr As Worksheet
    Dim newRow As Long
    Dim uInput As String

    If Not VerificarPermiso("ADMIN_USUARIOS") Then Exit Sub

    uInput = Trim(Me.TxtUsuario.Value)
    If uInput = "" Or Trim(Me.TxtNombre.Value) = "" Or Trim(Me.TxtPassword.Value) = "" Then
        MsgBox "Por favor complete todos los campos obligatorios.", vbExclamation, "Validación"
        Exit Sub
    End If

    Set wsUsr = ThisWorkbook.Sheets(HOJA_USUARIOS)
    newRow = wsUsr.Cells(wsUsr.Rows.Count, "A").End(xlUp).Row + 1
    If newRow < 7 Then newRow = 7

    wsUsr.Cells(newRow, 1).Value = Me.TxtIdUsuario.Value
    wsUsr.Cells(newRow, 2).Value = uInput
    wsUsr.Cells(newRow, 3).Value = Trim(Me.TxtNombre.Value)
    wsUsr.Cells(newRow, 4).Value = Trim(Me.TxtPassword.Value)
    wsUsr.Cells(newRow, 5).Value = Me.CboRol.Value
    wsUsr.Cells(newRow, 6).Value = Me.CboEstado.Value
    wsUsr.Cells(newRow, 7).Value = Format(Now, "YYYY-MM-DD HH:NN")

    MsgBox "Usuario '" & uInput & "' registrado exitosamente.", vbInformation, "Usuario Guardado"
    LimpiarFormulario
End Sub

Private Sub BtnBuscar_Click()
    Dim wsUsr As Worksheet
    Dim lastRow As Long, i As Long
    Dim uBuscado As String

    uBuscado = Trim(InputBox("Ingrese el nombre de usuario a buscar:", "Buscar Usuario"))
    If uBuscado = "" Then Exit Sub

    Set wsUsr = ThisWorkbook.Sheets(HOJA_USUARIOS)
    lastRow = wsUsr.Cells(wsUsr.Rows.Count, "A").End(xlUp).Row

    If lastRow >= 7 Then
        For i = 7 To lastRow
            If LCase(Trim(CStr(wsUsr.Cells(i, 2).Value))) = LCase(uBuscado) Then
                Me.TxtIdUsuario.Value = wsUsr.Cells(i, 1).Value
                Me.TxtUsuario.Value = wsUsr.Cells(i, 2).Value
                Me.TxtNombre.Value = wsUsr.Cells(i, 3).Value
                Me.TxtPassword.Value = wsUsr.Cells(i, 4).Value
                Me.CboRol.Value = wsUsr.Cells(i, 5).Value
                Me.CboEstado.Value = wsUsr.Cells(i, 6).Value

                Me.TxtUsuario.Enabled = False
                Me.BtnGuardar.Enabled = False
                Me.BtnActualizar.Enabled = True
                MsgBox "Usuario localizado.", vbInformation, "Éxito"
                Exit Sub
            End If
        Next i
    End If

    MsgBox "No se encontró el usuario '" & uBuscado & "'.", vbExclamation, "No Encontrado"
End Sub

Private Sub BtnActualizar_Click()
    Dim wsUsr As Worksheet
    Dim lastRow As Long, i As Long
    Dim uTarget As String

    If Not VerificarPermiso("ADMIN_USUARIOS") Then Exit Sub

    uTarget = Trim(Me.TxtUsuario.Value)
    If uTarget = "" Then Exit Sub

    Set wsUsr = ThisWorkbook.Sheets(HOJA_USUARIOS)
    lastRow = wsUsr.Cells(wsUsr.Rows.Count, "A").End(xlUp).Row

    If lastRow >= 7 Then
        For i = 7 To lastRow
            If LCase(Trim(CStr(wsUsr.Cells(i, 2).Value))) = LCase(uTarget) Then
                wsUsr.Cells(i, 3).Value = Trim(Me.TxtNombre.Value)
                wsUsr.Cells(i, 4).Value = Trim(Me.TxtPassword.Value)
                wsUsr.Cells(i, 5).Value = Me.CboRol.Value
                wsUsr.Cells(i, 6).Value = Me.CboEstado.Value

                MsgBox "Información del usuario '" & uTarget & "' actualizada correctamente.", vbInformation, "Éxito"
                LimpiarFormulario
                Exit Sub
            End If
        Next i
    End If
End Sub

Private Sub BtnCerrar_Click()
    Unload Me
End Sub
