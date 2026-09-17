VERSION 5.00
Begin {C62A69F0-16DC-11CE-9E98-00AA00574A4F} FrmMenuPrincipal
   Caption         = "🏠 Panel Principal - Sistema de Control de Gastos"
   ClientHeight    = 4800
   ClientLeft      = 120
   ClientTop       = 460
   ClientWidth     = 6200
   StartUpPosition = 1  'CenterOwner
End
Attribute VB_Name = "FrmMenuPrincipal"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False

Option Explicit

Private Sub UserForm_Initialize()
    ActualizarMensajeUsuario
End Sub

Private Sub ActualizarMensajeUsuario()
    If CurrentUser <> "" Then
        Me.Caption = "🏠 Panel Principal - Usuario: " & CurrentUser & " (" & CurrentUserRole & ")"
    Else
        Me.Caption = "🏠 Panel Principal - Sin Sesión Activa"
    End If
End Sub

Private Sub BtnNuevoRegistro_Click()
    Unload Me
    AbrirFormularioRegistro
End Sub

Private Sub BtnConsultarDatos_Click()
    Unload Me
    IrA_HojaDatos
End Sub

Private Sub BtnResumenGastos_Click()
    Unload Me
    IrA_HojaGastos
End Sub

Private Sub BtnGestionUsuarios_Click()
    If VerificarPermiso("ADMIN_USUARIOS") Then
        Unload Me
        AbrirFormularioUsuarios
    End If
End Sub

Private Sub BtnInicio_Click()
    Unload Me
    IrA_HojaInicio
End Sub

Private Sub BtnCerrarSesion_Click()
    Unload Me
    CerrarSesion
End Sub

Private Sub BtnSalir_Click()
    Unload Me
End Sub
