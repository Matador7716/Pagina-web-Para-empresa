VERSION 5.00
Begin {C62A69F0-16DC-11CE-9E98-00AA00574A4F} FrmRegistro
   Caption         = "📝 Registro y Gestión de Movimientos Económicos"
   ClientHeight    = 6800
   ClientLeft      = 120
   ClientTop       = 460
   ClientWidth     = 8200
   StartUpPosition = 1  'CenterOwner
End
Attribute VB_Name = "FrmRegistro"
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
    ' Tipo
    Me.CboTipo.Clear
    Me.CboTipo.AddItem "Ingreso"
    Me.CboTipo.AddItem "Salida"

    ' Categoría
    Me.CboCategoria.Clear
    Me.CboCategoria.AddItem "Alimentación"
    Me.CboCategoria.AddItem "Servicios"
    Me.CboCategoria.AddItem "Mantenimiento"
    Me.CboCategoria.AddItem "Compras"
    Me.CboCategoria.AddItem "Transporte"
    Me.CboCategoria.AddItem "Vivienda"
    Me.CboCategoria.AddItem "Salud"
    Me.CboCategoria.AddItem "Educación"
    Me.CboCategoria.AddItem "Entretenimiento"
    Me.CboCategoria.AddItem "Sueldo / Honorarios"
    Me.CboCategoria.AddItem "Otros"

    ' Medio de Pago
    Me.CboMedioPago.Clear
    Me.CboMedioPago.AddItem "Efectivo"
    Me.CboMedioPago.AddItem "Tarjeta de Débito"
    Me.CboMedioPago.AddItem "Tarjeta de Crédito"
    Me.CboMedioPago.AddItem "Transferencia"
    Me.CboMedioPago.AddItem "Yape/Plin"
    Me.CboMedioPago.AddItem "Otro"

    ' Estado
    Me.CboEstado.Clear
    Me.CboEstado.AddItem "Completado"
    Me.CboEstado.AddItem "Pendiente"
    Me.CboEstado.AddItem "Anulado"
End Sub

Private Sub LimpiarFormulario()
    Me.TxtNumOrden.Value = GenerarNuevoNumeroOrden()
    Me.TxtFecha.Value = Format(Now, "YYYY-MM-DD HH:NN")
    Me.TxtUsuario.Value = IIf(CurrentUser <> "", CurrentUser, "Invitado")
    Me.CboTipo.Value = ""
    Me.CboCategoria.Value = ""
    Me.TxtDescripcion.Value = ""
    Me.TxtMonto.Value = ""
    Me.CboMedioPago.Value = ""
    Me.TxtObservaciones.Value = ""
    Me.CboEstado.Value = "Completado"

    Me.TxtNumOrden.Enabled = True
    Me.BtnRegistrar.Enabled = True
    Me.BtnActualizar.Enabled = False
End Sub

Private Sub BtnLimpiar_Click()
    LimpiarFormulario
End Sub

Private Sub BtnRegistrar_Click()
    Dim wsDatos As Worksheet
    Dim newRow As Long
    Dim montoVal As Double

    If Not VerificarPermiso("REGISTRAR") Then Exit Sub

    ' Validaciones
    If Me.CboTipo.Value = "" Then
        MsgBox "Seleccione el Tipo de Movimiento (Ingreso/Salida).", vbExclamation, "Validación"
        Exit Sub
    End If
    If Me.CboCategoria.Value = "" Then
        MsgBox "Seleccione la Categoría correspondiente.", vbExclamation, "Validación"
        Exit Sub
    End If
    If Trim(Me.TxtDescripcion.Value) = "" Then
        MsgBox "Ingrese una descripción del gasto o movimiento.", vbExclamation, "Validación"
        Exit Sub
    End If
    If Not IsNumeric(Me.TxtMonto.Value) Or Val(Me.TxtMonto.Value) <= 0 Then
        MsgBox "Ingrese un monto válido y mayor a cero.", vbExclamation, "Validación"
        Exit Sub
    End If
    If Me.CboMedioPago.Value = "" Then
        MsgBox "Seleccione el Medio de Pago.", vbExclamation, "Validación"
        Exit Sub
    End If

    Set wsDatos = ThisWorkbook.Sheets(HOJA_DATOS)
    newRow = wsDatos.Cells(wsDatos.Rows.Count, "A").End(xlUp).Row + 1
    If newRow < 7 Then newRow = 7

    wsDatos.Cells(newRow, 1).Value = Me.TxtNumOrden.Value
    wsDatos.Cells(newRow, 2).Value = Format(Now, "YYYY-MM-DD HH:NN")
    wsDatos.Cells(newRow, 3).Value = CurrentUser
    wsDatos.Cells(newRow, 4).Value = Me.CboTipo.Value
    wsDatos.Cells(newRow, 5).Value = Me.CboCategoria.Value
    wsDatos.Cells(newRow, 6).Value = Trim(Me.TxtDescripcion.Value)
    wsDatos.Cells(newRow, 7).Value = CDbl(Me.TxtMonto.Value)
    wsDatos.Cells(newRow, 8).Value = Me.CboMedioPago.Value
    wsDatos.Cells(newRow, 9).Value = Trim(Me.TxtObservaciones.Value)
    wsDatos.Cells(newRow, 10).Value = Me.CboEstado.Value

    ActualizarDashboard
    MsgBox "¡Registro de movimiento " & Me.TxtNumOrden.Value & " guardado exitosamente!", vbInformation, "Registro Completo"
    LimpiarFormulario
End Sub

Private Sub BtnBuscar_Click()
    Dim wsDatos As Worksheet
    Dim lastRow As Long, i As Long
    Dim numBuscado As String
    Dim found As Boolean

    numBuscado = Trim(InputBox("Ingrese el N.º de Orden a buscar (Ej: ORD-0001):", "Buscar Movimiento"))
    If numBuscado = "" Then Exit Sub

    Set wsDatos = ThisWorkbook.Sheets(HOJA_DATOS)
    lastRow = wsDatos.Cells(wsDatos.Rows.Count, "A").End(xlUp).Row
    found = False

    If lastRow >= 7 Then
        For i = 7 To lastRow
            If UCase(Trim(CStr(wsDatos.Cells(i, 1).Value))) = UCase(numBuscado) Then
                Me.TxtNumOrden.Value = wsDatos.Cells(i, 1).Value
                Me.TxtFecha.Value = wsDatos.Cells(i, 2).Value
                Me.TxtUsuario.Value = wsDatos.Cells(i, 3).Value
                Me.CboTipo.Value = wsDatos.Cells(i, 4).Value
                Me.CboCategoria.Value = wsDatos.Cells(i, 5).Value
                Me.TxtDescripcion.Value = wsDatos.Cells(i, 6).Value
                Me.TxtMonto.Value = wsDatos.Cells(i, 7).Value
                Me.CboMedioPago.Value = wsDatos.Cells(i, 8).Value
                Me.TxtObservaciones.Value = wsDatos.Cells(i, 9).Value
                Me.CboEstado.Value = wsDatos.Cells(i, 10).Value

                found = True
                Me.TxtNumOrden.Enabled = False
                Me.BtnRegistrar.Enabled = False
                Me.BtnActualizar.Enabled = True
                MsgBox "Registro localizado exitosamente.", vbInformation, "Búsqueda Exitosa"
                Exit For
            End If
        Next i
    End If

    If Not found Then
        MsgBox "No se encontró ningún registro con el N.º de Orden '" & numBuscado & "'.", vbExclamation, "No Encontrado"
    End If
End Sub

Private Sub BtnEditar_Click()
    ' Permite buscar para editar
    BtnBuscar_Click
End Sub

Private Sub BtnActualizar_Click()
    Dim wsDatos As Worksheet
    Dim lastRow As Long, i As Long
    Dim numOrden As String
    Dim found As Boolean

    If Not VerificarPermiso("EDITAR") Then Exit Sub

    numOrden = Trim(Me.TxtNumOrden.Value)
    If numOrden = "" Then
        MsgBox "No hay ningún registro seleccionado para actualizar.", vbExclamation, "Error"
        Exit Sub
    End If

    ' Validaciones
    If Me.CboTipo.Value = "" Or Me.CboCategoria.Value = "" Or Trim(Me.TxtDescripcion.Value) = "" Or Not IsNumeric(Me.TxtMonto.Value) Then
        MsgBox "Por favor verifique los campos del formulario.", vbExclamation, "Validación"
        Exit Sub
    End If

    Set wsDatos = ThisWorkbook.Sheets(HOJA_DATOS)
    lastRow = wsDatos.Cells(wsDatos.Rows.Count, "A").End(xlUp).Row
    found = False

    If lastRow >= 7 Then
        For i = 7 To lastRow
            If UCase(Trim(CStr(wsDatos.Cells(i, 1).Value))) = UCase(numOrden) Then
                wsDatos.Cells(i, 4).Value = Me.CboTipo.Value
                wsDatos.Cells(i, 5).Value = Me.CboCategoria.Value
                wsDatos.Cells(i, 6).Value = Trim(Me.TxtDescripcion.Value)
                wsDatos.Cells(i, 7).Value = CDbl(Me.TxtMonto.Value)
                wsDatos.Cells(i, 8).Value = Me.CboMedioPago.Value
                wsDatos.Cells(i, 9).Value = Trim(Me.TxtObservaciones.Value)
                wsDatos.Cells(i, 10).Value = Me.CboEstado.Value

                found = True
                ActualizarDashboard
                MsgBox "El registro " & numOrden & " ha sido actualizado correctamente.", vbInformation, "Actualización Exitosa"
                LimpiarFormulario
                Exit For
            End If
        Next i
    End If
End Sub

Private Sub BtnEliminar_Click()
    Dim wsDatos As Worksheet
    Dim lastRow As Long, i As Long
    Dim numOrden As String

    ' Requiere nivel Administrador
    If Not VerificarPermiso("ELIMINAR") Then Exit Sub

    numOrden = Trim(Me.TxtNumOrden.Value)
    If numOrden = "" Then
        numOrden = Trim(InputBox("Ingrese el N.º de Orden del registro que desea ELIMINAR:", "Eliminar Registro"))
    End If

    If numOrden = "" Then Exit Sub

    If MsgBox("¿Está completamente seguro que desea ELIMINAR el registro " & numOrden & "? Esta acción no se puede deshacer.", vbCritical + vbYesNo, "Confirmar Eliminación") = vbYes Then
        Set wsDatos = ThisWorkbook.Sheets(HOJA_DATOS)
        lastRow = wsDatos.Cells(wsDatos.Rows.Count, "A").End(xlUp).Row

        If lastRow >= 7 Then
            For i = 7 To lastRow
                If UCase(Trim(CStr(wsDatos.Cells(i, 1).Value))) = UCase(numOrden) Then
                    wsDatos.Rows(i).Delete
                    ActualizarDashboard
                    MsgBox "El registro " & numOrden & " ha sido eliminado permanentemente del sistema.", vbInformation, "Registro Eliminado"
                    LimpiarFormulario
                    Exit Sub
                End If
            Next i
        End If
        MsgBox "No se encontró el registro " & numOrden & ".", vbExclamation, "No Encontrado"
    End If
End Sub

Private Sub BtnCerrarSesion_Click()
    Unload Me
    CerrarSesion
End Sub

Private Sub BtnCerrar_Click()
    Unload Me
End Sub
