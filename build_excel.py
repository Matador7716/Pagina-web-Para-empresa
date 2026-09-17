import openpyxl
from openpyxl.styles import Font, PatternFill, Alignment, Border, Side
from openpyxl.utils import get_column_letter

wb = openpyxl.Workbook()

# Setup sheets
ws_inicio = wb.active
ws_inicio.title = "Inicio"
ws_datos = wb.create_sheet(title="Datos Registrados")
ws_usuarios = wb.create_sheet(title="Usuarios")
ws_gastos = wb.create_sheet(title="Registro de Gastos")

# Colors (Modern Palette: Navy, Emerald, Slate, Light Gray)
NAVY_HEADER = "1B365D"
ACCENT_BLUE = "2B547E"
SUCCESS_GREEN = "1E7E34"
DANGER_RED = "BD2130"
WARNING_YELLOW = "D39E00"
LIGHT_BG = "F8F9FA"
CARD_BG = "E9ECEF"
BORDER_GRAY = "CED4DA"
WHITE = "FFFFFF"

# Fonts
font_title = Font(name="Calibri", size=18, bold=True, color=WHITE)
font_subtitle = Font(name="Calibri", size=12, bold=True, color=NAVY_HEADER)
font_header = Font(name="Calibri", size=11, bold=True, color=WHITE)
font_bold = Font(name="Calibri", size=11, bold=True)
font_regular = Font(name="Calibri", size=11)
font_kpi_num = Font(name="Calibri", size=20, bold=True)
font_kpi_label = Font(name="Calibri", size=10, bold=True, color="495057")

# Fills
fill_navy = PatternFill(start_color=NAVY_HEADER, end_color=NAVY_HEADER, fill_type="solid")
fill_accent = PatternFill(start_color=ACCENT_BLUE, end_color=ACCENT_BLUE, fill_type="solid")
fill_green = PatternFill(start_color=SUCCESS_GREEN, end_color=SUCCESS_GREEN, fill_type="solid")
fill_card = PatternFill(start_color=CARD_BG, end_color=CARD_BG, fill_type="solid")
fill_light = PatternFill(start_color=LIGHT_BG, end_color=LIGHT_BG, fill_type="solid")

# Borders
thin_side = Side(border_style="thin", color=BORDER_GRAY)
thick_bottom = Side(border_style="medium", color=NAVY_HEADER)
border_all = Border(left=thin_side, right=thin_side, top=thin_side, bottom=thin_side)
border_card = Border(left=thin_side, right=thin_side, top=thin_side, bottom=thin_side)

# --- 1. HOJA DE INICIO ---
ws_inicio.views.sheetView[0].showGridLines = True

# Title banner
ws_inicio.merge_cells("A1:I2")
title_cell = ws_inicio["A1"]
title_cell.value = "🏠 SISTEMA DE CONTROL Y ADMINISTRACIÓN DE GASTOS DEL HOGAR"
title_cell.font = font_title
title_cell.fill = fill_navy
title_cell.alignment = Alignment(horizontal="center", vertical="center")

# User info box (Rows 4-6, Cols B-D)
ws_inicio.merge_cells("B4:D4")
ws_inicio["B4"] = "🔐 USER ACTIVE / SESIÓN ACTUAL"
ws_inicio["B4"].font = Font(name="Calibri", size=11, bold=True, color=WHITE)
ws_inicio["B4"].fill = fill_accent
ws_inicio["B4"].alignment = Alignment(horizontal="center", vertical="center")

user_labels = [("Usuario:", "admin"), ("Nivel de Permiso:", "Administrador"), ("Último Acceso:", "=NOW()")]
for idx, (lbl, val) in enumerate(user_labels, start=5):
    ws_inicio.cell(row=idx, column=2, value=lbl).font = font_bold
    cell_v = ws_inicio.cell(row=idx, column=3, value=val)
    cell_v.font = font_regular
    if lbl.startswith("Último"):
        cell_v.number_format = "YYYY-MM-DD HH:MM"
    for col in range(2, 5):
        ws_inicio.cell(row=idx, column=col).border = border_all
        ws_inicio.cell(row=idx, column=col).fill = fill_light

# KPI Cards (Row 4 to 6)
# Total Ingresos (Col F)
ws_inicio.merge_cells("F4:G4")
ws_inicio["F4"] = "🟢 TOTAL INGRESOS"
ws_inicio["F4"].font = Font(name="Calibri", size=11, bold=True, color=WHITE)
ws_inicio["F4"].fill = fill_green
ws_inicio["F4"].alignment = Alignment(horizontal="center", vertical="center")

ws_inicio.merge_cells("F5:G6")
kpi_ing = ws_inicio["F5"]
kpi_ing.value = '=SUMIF(\'Datos Registrados\'!D7:D1000, "Ingreso", \'Datos Registrados\'!G7:G1000)'
kpi_ing.font = Font(name="Calibri", size=18, bold=True, color="1E7E34")
kpi_ing.number_format = '"S/."#,##0.00'
kpi_ing.alignment = Alignment(horizontal="center", vertical="center")
for r in range(4, 7):
    for c in range(6, 8):
        ws_inicio.cell(row=r, column=c).border = border_all

# Total Salidas (Col H)
ws_inicio.merge_cells("H4:I4")
ws_inicio["H4"] = "🔴 TOTAL SALIDAS / GASTOS"
ws_inicio["H4"].font = Font(name="Calibri", size=11, bold=True, color=WHITE)
ws_inicio["H4"].fill = PatternFill(start_color=DANGER_RED, end_color=DANGER_RED, fill_type="solid")
ws_inicio["H4"].alignment = Alignment(horizontal="center", vertical="center")

ws_inicio.merge_cells("H5:I6")
kpi_sal = ws_inicio["H5"]
kpi_sal.value = '=SUMIF(\'Datos Registrados\'!D7:D1000, "Salida", \'Datos Registrados\'!G7:G1000)'
kpi_sal.font = Font(name="Calibri", size=18, bold=True, color="BD2130")
kpi_sal.number_format = '"S/."#,##0.00'
kpi_sal.alignment = Alignment(horizontal="center", vertical="center")
for r in range(4, 7):
    for c in range(8, 10):
        ws_inicio.cell(row=r, column=c).border = border_all

# Saldo Disponible & Cantidad Registros (Row 8-9)
ws_inicio.merge_cells("B8:C8")
ws_inicio["B8"] = "💰 SALDO DISPONIBLE"
ws_inicio["B8"].font = Font(name="Calibri", size=11, bold=True, color=WHITE)
ws_inicio["B8"].fill = fill_navy
ws_inicio["B8"].alignment = Alignment(horizontal="center", vertical="center")

ws_inicio.merge_cells("B9:C10")
kpi_bal = ws_inicio["B9"]
kpi_bal.value = "=F5-H5"
kpi_bal.font = Font(name="Calibri", size=18, bold=True, color="1B365D")
kpi_bal.number_format = '"S/."#,##0.00'
kpi_bal.alignment = Alignment(horizontal="center", vertical="center")
for r in range(8, 11):
    for c in range(2, 4):
        ws_inicio.cell(row=r, column=c).border = border_all

ws_inicio.merge_cells("D8:E8")
ws_inicio["D8"] = "📊 TOTAL REGISTROS"
ws_inicio["D8"].font = Font(name="Calibri", size=11, bold=True, color=WHITE)
ws_inicio["D8"].fill = fill_accent
ws_inicio["D8"].alignment = Alignment(horizontal="center", vertical="center")

ws_inicio.merge_cells("D9:E10")
kpi_cnt = ws_inicio["D9"]
kpi_cnt.value = "=COUNTA('Datos Registrados'!A7:A1000)"
kpi_cnt.font = Font(name="Calibri", size=18, bold=True, color="2B547E")
kpi_cnt.alignment = Alignment(horizontal="center", vertical="center")
for r in range(8, 11):
    for c in range(4, 6):
        ws_inicio.cell(row=r, column=c).border = border_all

# Menu / Action buttons info box
ws_inicio.merge_cells("F8:I8")
ws_inicio["F8"] = "⚡ PANEL DE ACCESO RÁPIDO / NAVEGACIÓN"
ws_inicio["F8"].font = Font(name="Calibri", size=11, bold=True, color=WHITE)
ws_inicio["F8"].fill = fill_navy
ws_inicio["F8"].alignment = Alignment(horizontal="center", vertical="center")

ws_inicio.merge_cells("F9:I10")
ws_inicio["F9"] = "Utilice los botones integrados en la barra superior o en el formulario de menú para interactuar con el sistema."
ws_inicio["F9"].font = font_regular
ws_inicio["F9"].alignment = Alignment(horizontal="center", vertical="center", wrap_text=True)
for r in range(8, 11):
    for c in range(6, 10):
        ws_inicio.cell(row=r, column=c).border = border_all

# Ultimos Movimientos Table Section
ws_inicio.cell(row=12, column=1, value="📋 ÚLTIMOS MOVIMIENTOS REGISTRADOS").font = font_subtitle
headers_ultimos = ["N.º Orden", "Fecha", "Usuario", "Tipo", "Categoría", "Descripción", "Monto", "Medio Pago", "Estado"]
for col_idx, h in enumerate(headers_ultimos, start=1):
    c = ws_inicio.cell(row=13, column=col_idx, value=h)
    c.font = font_header
    c.fill = fill_navy
    c.alignment = Alignment(horizontal="center", vertical="center")
    c.border = border_all

for r in range(14, 20):
    for c in range(1, 10):
        cell = ws_inicio.cell(row=r, column=c)
        cell.border = border_all
        if c == 7:
            cell.number_format = '"S/."#,##0.00'
        if c in (1, 2, 4, 8, 9):
            cell.alignment = Alignment(horizontal="center")


# --- 2. HOJA DE DATOS REGISTRADOS ---
ws_datos.views.sheetView[0].showGridLines = True

ws_datos.merge_cells("A1:J2")
t_datos = ws_datos["A1"]
t_datos.value = "📋 DATOS REGISTRADOS - CONTROL DE MOVIMIENTOS ECONÓMICOS"
t_datos.font = font_title
t_datos.fill = fill_navy
t_datos.alignment = Alignment(horizontal="center", vertical="center")

headers_datos = [
    "N.º de Orden", "Fecha", "Usuario", "Tipo de Movimiento",
    "Categoría", "Descripción del gasto o movimiento", "Monto",
    "Medio de Pago", "Observaciones", "Estado"
]

for col_idx, h in enumerate(headers_datos, start=1):
    c = ws_datos.cell(row=6, column=col_idx, value=h)
    c.font = font_header
    c.fill = fill_navy
    c.alignment = Alignment(horizontal="center", vertical="center", wrap_text=True)
    c.border = border_all

# Sample Data
sample_records = [
    ("ORD-0001", "2025-01-05 10:15", "admin", "Ingreso", "Sueldo / Honorarios", "Sueldo mensual principal", 4500.00, "Transferencia", "Depósito de sueldo", "Completado"),
    ("ORD-0002", "2025-01-06 14:30", "admin", "Salida", "Alimentación", "Supermercado compras semanales", 350.50, "Tarjeta de Débito", "Compras en Wong", "Completado"),
    ("ORD-0003", "2025-01-08 09:20", "editor", "Salida", "Servicios", "Pago de luz y agua", 180.00, "Yape/Plin", "Recibos de enero", "Completado"),
    ("ORD-0004", "2025-01-10 18:00", "editor", "Salida", "Transporte", "Recarga de combustible", 120.00, "Efectivo", "Grifo Primax", "Completado"),
    ("ORD-0005", "2025-01-12 11:45", "admin", "Salida", "Mantenimiento", "Reparación de tubería de cocina", 250.00, "Efectivo", "Gasfitería rápida", "Completado"),
    ("ORD-0006", "2025-01-15 16:10", "editor", "Ingreso", "Ventas / Servicios Extra", "Venta de artículo usado", 300.00, "Transferencia", "Plaza Vea pago directo", "Completado"),
    ("ORD-0007", "2025-01-18 20:00", "editor", "Salida", "Entretenimiento", "Cine y cena familiar", 145.00, "Tarjeta de Crédito", "Cineplanet", "Completado"),
]

for row_idx, record in enumerate(sample_records, start=7):
    for col_idx, val in enumerate(record, start=1):
        cell = ws_datos.cell(row=row_idx, column=col_idx, value=val)
        cell.font = font_regular
        cell.border = border_all
        if col_idx == 7:
            cell.number_format = '"S/."#,##0.00'
            cell.alignment = Alignment(horizontal="right")
        elif col_idx in (1, 2, 3, 4, 8, 10):
            cell.alignment = Alignment(horizontal="center")


# --- 3. HOJA DE USUARIOS ---
ws_usuarios.views.sheetView[0].showGridLines = True

ws_usuarios.merge_cells("A1:G2")
t_usr = ws_usuarios["A1"]
t_usr.value = "👥 ADMINISTRACIÓN DE USUARIOS DEL SISTEMA"
t_usr.font = font_title
t_usr.fill = fill_navy
t_usr.alignment = Alignment(horizontal="center", vertical="center")

headers_usr = ["ID Usuario", "Usuario", "Nombre Completo", "Contraseña", "Nivel de Permiso", "Estado", "Último Acceso"]
for col_idx, h in enumerate(headers_usr, start=1):
    c = ws_usuarios.cell(row=6, column=col_idx, value=h)
    c.font = font_header
    c.fill = fill_navy
    c.alignment = Alignment(horizontal="center", vertical="center")
    c.border = border_all

sample_users = [
    ("USR-001", "admin", "Administrador del Sistema", "admin123", "Administrador", "Activo", "2025-01-18 20:15"),
    ("USR-002", "editor", "Editor de Registros", "editor123", "Editor", "Activo", "2025-01-18 19:40"),
]

for row_idx, record in enumerate(sample_users, start=7):
    for col_idx, val in enumerate(record, start=1):
        cell = ws_usuarios.cell(row=row_idx, column=col_idx, value=val)
        cell.font = font_regular
        cell.border = border_all
        if col_idx in (1, 2, 4, 5, 6, 7):
            cell.alignment = Alignment(horizontal="center")


# --- 4. HOJA DE REGISTRO DE GASTOS ---
ws_gastos.views.sheetView[0].showGridLines = True

ws_gastos.merge_cells("A1:H2")
t_gasto = ws_gastos["A1"]
t_gasto.value = "💰 REGISTRO DE GASTOS Y RESUMEN ESTADÍSTICO"
t_gasto.font = font_title
t_gasto.fill = fill_navy
t_gasto.alignment = Alignment(horizontal="center", vertical="center")

# Summary Table 1: Gastos por Categoría
ws_gastos.cell(row=5, column=1, value="📊 RESUMEN DE GASTOS POR CATEGORÍA").font = font_subtitle
headers_cat = ["Categoría", "Total Ingresos", "Total Salidas", "Balance Net", "% del Total Gastos"]
for col_idx, h in enumerate(headers_cat, start=1):
    c = ws_gastos.cell(row=6, column=col_idx, value=h)
    c.font = font_header
    c.fill = fill_accent
    c.alignment = Alignment(horizontal="center", vertical="center")
    c.border = border_all

categories = ["Alimentación", "Servicios", "Mantenimiento", "Compras", "Transporte", "Vivienda", "Salud", "Educación", "Entretenimiento", "Sueldo / Honorarios", "Otros"]

for idx, cat in enumerate(categories, start=7):
    ws_gastos.cell(row=idx, column=1, value=cat).font = font_bold
    ws_gastos.cell(row=idx, column=1).border = border_all

    # Formula Ingresos
    c_ing = ws_gastos.cell(row=idx, column=2, value=f'=SUMIFS(\'Datos Registrados\'!$G:$G, \'Datos Registrados\'!$E:$E, A{idx}, \'Datos Registrados\'!$D:$D, "Ingreso")')
    c_ing.font = font_regular
    c_ing.number_format = '"S/."#,##0.00'
    c_ing.border = border_all

    # Formula Salidas
    c_sal = ws_gastos.cell(row=idx, column=3, value=f'=SUMIFS(\'Datos Registrados\'!$G:$G, \'Datos Registrados\'!$E:$E, A{idx}, \'Datos Registrados\'!$D:$D, "Salida")')
    c_sal.font = font_regular
    c_sal.number_format = '"S/."#,##0.00'
    c_sal.border = border_all

    # Net
    c_net = ws_gastos.cell(row=idx, column=4, value=f'=B{idx}-C{idx}')
    c_net.font = font_bold
    c_net.number_format = '"S/."#,##0.00'
    c_net.border = border_all

    # % Total
    c_pct = ws_gastos.cell(row=idx, column=5, value=f'=IF($C$18>0, C{idx}/$C$18, 0)')
    c_pct.font = font_regular
    c_pct.number_format = '0.0%'
    c_pct.border = border_all

# Total row
tot_row = 7 + len(categories)
ws_gastos.cell(row=tot_row, column=1, value="TOTAL GENERAL").font = font_bold
ws_gastos.cell(row=tot_row, column=1).border = border_all
ws_gastos.cell(row=tot_row, column=1).fill = fill_card

ws_gastos.cell(row=tot_row, column=2, value=f"=SUM(B7:B{tot_row-1})").font = font_bold
ws_gastos.cell(row=tot_row, column=2).number_format = '"S/."#,##0.00'
ws_gastos.cell(row=tot_row, column=2).border = border_all

ws_gastos.cell(row=tot_row, column=3, value=f"=SUM(C7:C{tot_row-1})").font = font_bold
ws_gastos.cell(row=tot_row, column=3).number_format = '"S/."#,##0.00'
ws_gastos.cell(row=tot_row, column=3).border = border_all

ws_gastos.cell(row=tot_row, column=4, value=f"=SUM(D7:D{tot_row-1})").font = font_bold
ws_gastos.cell(row=tot_row, column=4).number_format = '"S/."#,##0.00'
ws_gastos.cell(row=tot_row, column=4).border = border_all

ws_gastos.cell(row=tot_row, column=5, value=f"=SUM(E7:E{tot_row-1})").font = font_bold
ws_gastos.cell(row=tot_row, column=5).number_format = '0.0%'
ws_gastos.cell(row=tot_row, column=5).border = border_all


# Summary Table 2: Gastos por Medio de Pago
ws_gastos.cell(row=5, column=7, value="💳 DISTRIBUCIÓN POR MEDIO DE PAGO").font = font_subtitle
headers_med = ["Medio de Pago", "Monto Total Transaccionado"]
for col_idx, h in enumerate(headers_med, start=7):
    c = ws_gastos.cell(row=6, column=col_idx, value=h)
    c.font = font_header
    c.fill = fill_accent
    c.alignment = Alignment(horizontal="center", vertical="center")
    c.border = border_all

medios = ["Efectivo", "Tarjeta de Débito", "Tarjeta de Crédito", "Transferencia", "Yape/Plin", "Otro"]
for idx, med in enumerate(medios, start=7):
    ws_gastos.cell(row=idx, column=7, value=med).font = font_bold
    ws_gastos.cell(row=idx, column=7).border = border_all

    c_m = ws_gastos.cell(row=idx, column=8, value=f'=SUMIF(\'Datos Registrados\'!$H:$H, G{idx}, \'Datos Registrados\'!$G:$G)')
    c_m.font = font_regular
    c_m.number_format = '"S/."#,##0.00'
    c_m.border = border_all

# Auto-adjust column widths
for sheet in wb.worksheets:
    for col in sheet.columns:
        max_len = 0
        col_letter = get_column_letter(col[0].column)
        for cell in col:
            # Avoid title merged cells inflating column size
            if cell.row in (1, 2):
                continue
            val_str = str(cell.value or '')
            if len(val_str) > max_len:
                max_len = len(val_str)
        sheet.column_dimensions[col_letter].width = max(max_len + 4, 12)

# Specific column adjustments
ws_inicio.column_dimensions['A'].width = 14
ws_inicio.column_dimensions['B'].width = 18
ws_inicio.column_dimensions['C'].width = 22
ws_inicio.column_dimensions['D'].width = 18
ws_inicio.column_dimensions['E'].width = 18
ws_inicio.column_dimensions['F'].width = 18
ws_inicio.column_dimensions['G'].width = 18
ws_inicio.column_dimensions['H'].width = 18
ws_inicio.column_dimensions['I'].width = 18

ws_datos.column_dimensions['A'].width = 16
ws_datos.column_dimensions['B'].width = 18
ws_datos.column_dimensions['C'].width = 14
ws_datos.column_dimensions['D'].width = 18
ws_datos.column_dimensions['E'].width = 22
ws_datos.column_dimensions['F'].width = 32
ws_datos.column_dimensions['G'].width = 15
ws_datos.column_dimensions['H'].width = 18
ws_datos.column_dimensions['I'].width = 28
ws_datos.column_dimensions['J'].width = 14

ws_usuarios.column_dimensions['A'].width = 14
ws_usuarios.column_dimensions['B'].width = 16
ws_usuarios.column_dimensions['C'].width = 26
ws_usuarios.column_dimensions['D'].width = 16
ws_usuarios.column_dimensions['E'].width = 18
ws_usuarios.column_dimensions['F'].width = 12
ws_usuarios.column_dimensions['G'].width = 20

ws_gastos.column_dimensions['A'].width = 24
ws_gastos.column_dimensions['B'].width = 16
ws_gastos.column_dimensions['C'].width = 16
ws_gastos.column_dimensions['D'].width = 16
ws_gastos.column_dimensions['E'].width = 16
ws_gastos.column_dimensions['F'].width = 6
ws_gastos.column_dimensions['G'].width = 22
ws_gastos.column_dimensions['H'].width = 22

# Save workbook as xlsm
output_filename = "Sistema_Control_Gastos.xlsm"
wb.save(output_filename)
print(f"Workbook saved successfully as {output_filename}")
