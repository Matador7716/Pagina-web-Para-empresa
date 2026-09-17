VERSION 1.0 CLASS
BEGIN
  MultiUse = -1  'True
END
Attribute VB_Name = "ThisWorkbook"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = True

Option Explicit

Private Sub Workbook_Open()
    ' Al abrir el archivo Excel, inicia automáticamente la sesión del sistema
    On Error Resume Next
    ThisWorkbook.Sheets(HOJA_INICIO).Activate
    On Error GoTo 0

    ' Mostrar mensaje de bienvenida e iniciar login
    MsgBox "Bienvenido al Sistema de Control, Registro y Administración de Movimientos Económicos." & vbCrLf & _
           "Por favor inicie sesión para comenzar.", vbInformation, "Sistema de Gastos del Hogar"

    IniciarSistema
End Sub

Private Sub Workbook_BeforeSave(ByVal SaveAsUI As Boolean, Cancel As Boolean)
    ' Actualizar dashboard antes de guardar el libro
    On Error Resume Next
    ActualizarDashboard
    On Error GoTo 0
End Sub
