VERSION 5.00
Begin {C62A69F0-16DC-11CE-9E98-00AA00574A4F} FrmLogin
   Caption         = "🔐 Sistema de Control de Gastos - Iniciar Sesión"
   ClientHeight    = 3800
   ClientLeft      = 120
   ClientTop       = 460
   ClientWidth     = 5200
   StartUpPosition = 1  'CenterOwner
End
Attribute VB_Name = "FrmLogin"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False

Option Explicit

Private Sub UserForm_Initialize()
    Me.TxtUsuario.Value = ""
    Me.TxtPassword.Value = ""
    Me.TxtPassword.PasswordChar = "*"
    Me.LblMensaje.Caption = "Ingrese sus credenciales de acceso para ingresar al sistema."
End Sub

Private Sub BtnIngresar_Click()
    Dim wsUsr As Worksheet
    Dim lastRow As Long
    Dim i As Long
    Dim uInput As String, pInput As String
    Dim uDb As String, pDb As String, rDb As String, sDb As String
    Dim found As Boolean

    uInput = Trim(Me.TxtUsuario.Value)
    pInput = Trim(Me.TxtPassword.Value)

    If uInput = "" Or pInput = "" Then
        MsgBox "Por favor ingrese tanto el usuario como la contraseña.", vbExclamation, "Campos Incompletos"
        Exit Sub
    End If

    Set wsUsr = ThisWorkbook.Sheets(HOJA_USUARIOS)
    lastRow = wsUsr.Cells(wsUsr.Rows.Count, "A").End(xlUp).Row
    found = False

    If lastRow >= 7 Then
        For i = 7 To lastRow
            uDb = Trim(CStr(wsUsr.Cells(i, 2).Value))
            pDb = Trim(CStr(wsUsr.Cells(i, 4).Value))
            rDb = Trim(CStr(wsUsr.Cells(i, 5).Value))
            sDb = Trim(CStr(wsUsr.Cells(i, 6).Value))

            If LCase(uInput) = LCase(uDb) And pInput = pDb Then
                If UCase(sDb) <> "ACTIVO" Then
                    MsgBox "El usuario especificado se encuentra inactivo en el sistema.", vbCritical, "Usuario Inactivo"
                    Exit Sub
                End If

                found = True
                CurrentUser = uDb
                CurrentUserRole = rDb
                CurrentUserId = Trim(CStr(wsUsr.Cells(i, 1).Value))

                ' Actualizar último acceso en la hoja de usuarios
                wsUsr.Cells(i, 7).Value = Format(Now, "YYYY-MM-DD HH:NN")
                Exit For
            End If
        Next i
    End If

    If found Then
        ActualizarDashboard
        MsgBox "¡Bienvenido/a " & CurrentUser & "!" & vbCrLf & "Nivel de Acceso: " & CurrentUserRole, vbInformation, "Acceso Concedido"
        Unload Me
        FrmMenuPrincipal.Show
    Else
        MsgBox "Usuario o contraseña incorrectos. Verifique e intente nuevamente.", vbCritical, "Error de Autenticación"
        Me.TxtPassword.Value = ""
        Me.TxtPassword.SetFocus
    End If
End Sub

Private Sub BtnCancelar_Click()
    Unload Me
End Sub
