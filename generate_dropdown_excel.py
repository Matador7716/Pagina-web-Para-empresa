import openpyxl
from openpyxl.styles import Font, PatternFill, Alignment, Border, Side
from openpyxl.worksheet.datavalidation import DataValidation
from openpyxl.formatting.rule import FormulaRule
from openpyxl.utils import get_column_letter

def build_dropdown_excel():
    wb = openpyxl.Workbook()

    # Data definitions
    majas_items = [
        "LECHE", "PAN", "PAN MOLDE", "HUEVOS", "ACEITE", "LIMONES", "KR",
        "ENERGINA", "GUARANA", "COCA COLA 1LT", "INKA 1LT", "AGUA GRANDE",
        "AGUA CHUPON", "AGUA CHICA", "MOROCHAS", "TARI", "MAYONESA", "HOT DOG",
        "DETERGENTE", "PAPA RELLENA", "ARROZ C/ LECHE", "PAPA C/ HUEVO",
        "SANDWICHS", "CHIFLES", "HELADOS"
    ]

    lucky_items = [
        "LECHE", "PAN", "PAN MOLDE", "HUEVOS", "ACEITE", "LIMONES", "KR",
        "ENERGINA", "GUARANA", "COCA COLA 1LT", "INKA 1LT", "AGUA GRANDE",
        "AGUA CHUPON", "AGUA CHICA", "MOROCHAS", "TARI", "MAYONESA", "HOT DOG",
        "DETERGENTE", "PAPA RELLENA", "ARROZ C/ LECHE", "PAPA C/ HUEVO",
        "SANDWICHS", "CHIFLES", "HELADOS"
    ]

    mercado_items = [
        "CARNE MOLIDA", "POLLO", "PESCADO", "UBRE", "LENGUA", "RABO", "RIÑON",
        "CERDO", "CORDERO", "HUEVO", "LIMON", "LECHE", "YOGURT", "QUESO",
        "MANDARINA", "PAPAYA", "MANGO", "PIÑA", "PLATANO", "MANZANA", "SANDIA",
        "PALTA", "FRESA", "ARROZ", "FREJOLES", "LENTEJAS", "TALLARINES", "FIDEOS",
        "TOMATE", "CEBOLLA", "ZAPALLO", "LECHUGA", "PIMIENTO", "AJOS", "ARBEJAS",
        "CONDIMENTOS", "AZUCAR", "SAL", "SAL DE MARAS", "AVENA"
    ]

    # STYLES
    TITLE_FONT = Font(name="Calibri", size=16, bold=True, color="FFFFFF")
    TITLE_FILL = PatternFill(start_color="1F4E79", end_color="1F4E79", fill_type="solid")

    BTN_FONT = Font(name="Calibri", size=11, bold=True, color="FFFFFF")
    BTN_FILL = PatternFill(start_color="C00000", end_color="C00000", fill_type="solid")
    BTN_BORDER = Border(
        left=Side(style='medium', color='800000'),
        right=Side(style='medium', color='800000'),
        top=Side(style='medium', color='800000'),
        bottom=Side(style='medium', color='800000')
    )

    CAT_FILLS = {
        "REGISTRO": PatternFill(start_color="333333", end_color="333333", fill_type="solid"),
        "TIENDA MAJAS": PatternFill(start_color="1F4E78", end_color="1F4E78", fill_type="solid"),
        "TIENDA LUCKY PRODUCTOS": PatternFill(start_color="276A3C", end_color="276A3C", fill_type="solid"),
        "MERCADO / PRODUCTOS": PatternFill(start_color="B25900", end_color="B25900", fill_type="solid"),
        "OTROS": PatternFill(start_color="62259D", end_color="62259D", fill_type="solid"),
        "RESUMEN / PAGO": PatternFill(start_color="2B2B2B", end_color="2B2B2B", fill_type="solid")
    }

    WHITE_BOLD_11 = Font(name="Calibri", size=11, bold=True, color="FFFFFF")
    DARK_BOLD_10 = Font(name="Calibri", size=10, bold=True, color="000000")
    DARK_REG_10 = Font(name="Calibri", size=10, color="000000")

    THIN_BORDER = Border(
        left=Side(style='thin', color='D9D9D9'),
        right=Side(style='thin', color='D9D9D9'),
        top=Side(style='thin', color='D9D9D9'),
        bottom=Side(style='thin', color='D9D9D9')
    )

    # ----------------------------------------------------
    # TAB 1: REGISTRO_CUENTAS
    # ----------------------------------------------------
    ws = wb.active
    ws.title = "REGISTRO_CUENTAS"
    ws.views.sheetView[0].showGridLines = True

    # Title & Button
    ws.merge_cells("A1:C1")
    ws["A1"] = "CUENTAS MENSUALES CASA 27"
    ws["A1"].font = TITLE_FONT
    ws["A1"].fill = TITLE_FILL
    ws["A1"].alignment = Alignment(horizontal="center", vertical="center")

    ws.merge_cells("E1:F1")
    btn_cell = ws["E1"]
    btn_cell.value = "🔄 ACTUALIZAR"
    btn_cell.font = BTN_FONT
    btn_cell.fill = BTN_FILL
    btn_cell.alignment = Alignment(horizontal="center", vertical="center")
    btn_cell.border = BTN_BORDER
    ws["F1"].border = BTN_BORDER

    ws["H1"] = "Instrucciones de Uso:"
    ws["H1"].font = Font(name="Calibri", size=10, bold=True, color="1F4E79")
    ws["I1"] = "1. Seleccione los productos desde la lista desplegable en TIENDA MAJAS, TIENDA LUCKY o MERCADO. 2. Ingrese el PRECIO. 3. Elija el USUARIO (AYLIN: Rojo, ANDRÉ: Verde, JOHAM: Azul)."
    ws["I1"].font = Font(name="Calibri", size=9, italic=True, color="444444")

    # Table Column Headers
    headers = [
        ("REGISTRO", "N° DE ORDEN", "ORDER"),
        ("REGISTRO", "FECHA", "DATE"),
        ("TIENDA MAJAS", "TIENDA MAJAS (Seleccionar)", "LIST_MAJAS"),
        ("TIENDA LUCKY PRODUCTOS", "TIENDA LUCKY PRODUCTOS (Seleccionar)", "LIST_LUCKY"),
        ("MERCADO / PRODUCTOS", "MERCADO / PRODUCTOS (Seleccionar)", "LIST_MERCADO"),
        ("OTROS", "OTROS / DETALLE", "TEXT"),
        ("RESUMEN / PAGO", "PRECIO", "CURRENCY"),
        ("RESUMEN / PAGO", "TOTAL POR CONCEPTO", "TOTAL"),
        ("RESUMEN / PAGO", "USUARIO", "USER")
    ]

    # Category Merging in Row 3
    # A3:B3 -> REGISTRO
    # C3 -> TIENDA MAJAS
    # D3 -> TIENDA LUCKY PRODUCTOS
    # E3 -> MERCADO / PRODUCTOS
    # F3 -> OTROS
    # G3:I3 -> RESUMEN / PAGO

    ws.merge_cells("A3:B3")
    ws["A3"] = "REGISTRO"
    ws["A3"].font = WHITE_BOLD_11
    ws["A3"].fill = CAT_FILLS["REGISTRO"]
    ws["A3"].alignment = Alignment(horizontal="center", vertical="center")
    ws["B3"].fill = CAT_FILLS["REGISTRO"]

    ws["C3"] = "TIENDA MAJAS"
    ws["C3"].font = WHITE_BOLD_11
    ws["C3"].fill = CAT_FILLS["TIENDA MAJAS"]
    ws["C3"].alignment = Alignment(horizontal="center", vertical="center")

    ws["D3"] = "TIENDA LUCKY PRODUCTOS"
    ws["D3"].font = WHITE_BOLD_11
    ws["D3"].fill = CAT_FILLS["TIENDA LUCKY PRODUCTOS"]
    ws["D3"].alignment = Alignment(horizontal="center", vertical="center")

    ws["E3"] = "MERCADO / PRODUCTOS"
    ws["E3"].font = WHITE_BOLD_11
    ws["E3"].fill = CAT_FILLS["MERCADO / PRODUCTOS"]
    ws["E3"].alignment = Alignment(horizontal="center", vertical="center")

    ws["F3"] = "OTROS"
    ws["F3"].font = WHITE_BOLD_11
    ws["F3"].fill = CAT_FILLS["OTROS"]
    ws["F3"].alignment = Alignment(horizontal="center", vertical="center")

    ws.merge_cells("G3:I3")
    ws["G3"] = "RESUMEN / PAGO"
    ws["G3"].font = WHITE_BOLD_11
    ws["G3"].fill = CAT_FILLS["RESUMEN / PAGO"]
    ws["G3"].alignment = Alignment(horizontal="center", vertical="center")
    ws["H3"].fill = CAT_FILLS["RESUMEN / PAGO"]
    ws["I3"].fill = CAT_FILLS["RESUMEN / PAGO"]

    # Subheaders Row 4
    for idx, (cat, sub, htype) in enumerate(headers, start=1):
        cell = ws.cell(row=4, column=idx)
        cell.value = sub
        cell.font = DARK_BOLD_10
        cell.alignment = Alignment(horizontal="center", vertical="center", wrap_text=True)
        cell.border = THIN_BORDER
        if cat == "REGISTRO":
            cell.fill = PatternFill(start_color="EAEAEA", end_color="EAEAEA", fill_type="solid")
        elif cat == "TIENDA MAJAS":
            cell.fill = PatternFill(start_color="D9E1F2", end_color="D9E1F2", fill_type="solid")
        elif cat == "TIENDA LUCKY PRODUCTOS":
            cell.fill = PatternFill(start_color="E2EFDA", end_color="E2EFDA", fill_type="solid")
        elif cat == "MERCADO / PRODUCTOS":
            cell.fill = PatternFill(start_color="FCE4D6", end_color="FCE4D6", fill_type="solid")
        elif cat == "OTROS":
            cell.fill = PatternFill(start_color="E1D5E7", end_color="E1D5E7", fill_type="solid")
        elif cat == "RESUMEN / PAGO":
            cell.fill = PatternFill(start_color="FFF2CC", end_color="FFF2CC", fill_type="solid")

    ws.row_dimensions[1].height = 32
    ws.row_dimensions[2].height = 10
    ws.row_dimensions[3].height = 25
    ws.row_dimensions[4].height = 35

    start_row = 5
    end_row = 104

    for r in range(start_row, end_row + 1):
        ws.row_dimensions[r].height = 22

        # Auto N° DE ORDEN: =IF(I5<>""; ROW()-4; "")
        cell_ord = ws.cell(row=r, column=1)
        cell_ord.value = f'=IF(I{r}<>""; ROW()-{start_row-1}; "")'
        cell_ord.alignment = Alignment(horizontal="center", vertical="center")
        cell_ord.font = DARK_REG_10
        cell_ord.border = THIN_BORDER

        # Auto FECHA: =IF(I5<>""; IF(ISNUMBER(B5); B5; TODAY()); "")
        cell_date = ws.cell(row=r, column=2)
        cell_date.value = f'=IF(I{r}<>""; IF(ISNUMBER(B{r}); B{r}; TODAY()); "")'
        cell_date.number_format = 'DD/MM/YYYY'
        cell_date.alignment = Alignment(horizontal="center", vertical="center")
        cell_date.font = DARK_REG_10
        cell_date.border = THIN_BORDER

        # Dropdowns & Text columns (C, D, E, F)
        for c in range(3, 7):
            cell = ws.cell(row=r, column=c)
            cell.alignment = Alignment(horizontal="left", vertical="center")
            cell.font = DARK_REG_10
            cell.border = THIN_BORDER

        # PRECIO (Col G)
        cell_p = ws.cell(row=r, column=7)
        cell_p.number_format = '"S/"#,##0.00'
        cell_p.alignment = Alignment(horizontal="right", vertical="center")
        cell_p.font = DARK_REG_10
        cell_p.border = THIN_BORDER

        # TOTAL POR CONCEPTO (Col H)
        cell_t = ws.cell(row=r, column=8)
        cell_t.value = f'=G{r}'
        cell_t.number_format = '"S/"#,##0.00'
        cell_t.alignment = Alignment(horizontal="right", vertical="center")
        cell_t.font = Font(name="Calibri", size=10, bold=True, color="000000")
        cell_t.border = THIN_BORDER

        # USUARIO (Col I)
        cell_u = ws.cell(row=r, column=9)
        cell_u.alignment = Alignment(horizontal="center", vertical="center")
        cell_u.font = Font(name="Calibri", size=10, bold=True, color="000000")
        cell_u.border = THIN_BORDER

    # Set Column Widths
    ws.column_dimensions["A"].width = 14
    ws.column_dimensions["B"].width = 16
    ws.column_dimensions["C"].width = 30
    ws.column_dimensions["D"].width = 32
    ws.column_dimensions["E"].width = 32
    ws.column_dimensions["F"].width = 25
    ws.column_dimensions["G"].width = 18
    ws.column_dimensions["H"].width = 22
    ws.column_dimensions["I"].width = 18

    # ----------------------------------------------------
    # TAB 2: CATALOGO_PRODUCTOS
    # ----------------------------------------------------
    ws_cat = wb.create_sheet(title="CATALOGO_PRODUCTOS")
    ws_cat.views.sheetView[0].showGridLines = True

    ws_cat["A1"] = "TIENDA MAJAS"
    ws_cat["B1"] = "TIENDA LUCKY PRODUCTOS"
    ws_cat["C1"] = "MERCADO / PRODUCTOS"
    ws_cat["D1"] = "USUARIOS"

    for col in ["A", "B", "C", "D"]:
        ws_cat[f"{col}1"].font = WHITE_BOLD_11
        ws_cat[f"{col}1"].fill = PatternFill(start_color="1F4E79", end_color="1F4E79", fill_type="solid")
        ws_cat[f"{col}1"].alignment = Alignment(horizontal="center", vertical="center")

    for idx, item in enumerate(majas_items, start=2):
        ws_cat[f"A{idx}"] = item
    for idx, item in enumerate(lucky_items, start=2):
        ws_cat[f"B{idx}"] = item
    for idx, item in enumerate(mercado_items, start=2):
        ws_cat[f"C{idx}"] = item

    users = ["AYLIN", "ANDRÉ", "JOHAM"]
    for idx, u in enumerate(users, start=2):
        ws_cat[f"D{idx}"] = u

    ws_cat.column_dimensions["A"].width = 28
    ws_cat.column_dimensions["B"].width = 28
    ws_cat.column_dimensions["C"].width = 28
    ws_cat.column_dimensions["D"].width = 18

    # ----------------------------------------------------
    # DATA VALIDATION ON REGISTRO_CUENTAS
    # ----------------------------------------------------
    dv_majas = DataValidation(type="list", formula1=f"CATALOGO_PRODUCTOS!$A$2:$A${len(majas_items)+1}", allow_blank=True)
    dv_majas.error = "Seleccione un producto válido de la lista de Tienda Majas"
    dv_majas.errorTitle = "Producto Inválido"
    ws.add_data_validation(dv_majas)
    dv_majas.add(f"C{start_row}:C{end_row}")

    dv_lucky = DataValidation(type="list", formula1=f"CATALOGO_PRODUCTOS!$B$2:$B${len(lucky_items)+1}", allow_blank=True)
    dv_lucky.error = "Seleccione un producto válido de la lista de Tienda Lucky"
    dv_lucky.errorTitle = "Producto Inválido"
    ws.add_data_validation(dv_lucky)
    dv_lucky.add(f"D{start_row}:D{end_row}")

    dv_mercado = DataValidation(type="list", formula1=f"CATALOGO_PRODUCTOS!$C$2:$C${len(mercado_items)+1}", allow_blank=True)
    dv_mercado.error = "Seleccione un producto válido de la lista de Mercado"
    dv_mercado.errorTitle = "Producto Inválido"
    ws.add_data_validation(dv_mercado)
    dv_mercado.add(f"E{start_row}:E{end_row}")

    dv_user = DataValidation(type="list", formula1='"AYLIN,ANDRÉ,JOHAM"', allow_blank=True)
    dv_user.error = "Seleccione un usuario válido de la lista (AYLIN, ANDRÉ, JOHAM)"
    dv_user.errorTitle = "Usuario Inválido"
    ws.add_data_validation(dv_user)
    dv_user.add(f"I{start_row}:I{end_row}")

    # CONDITIONAL FORMATTING FOR USERS
    red_fill = PatternFill(start_color="FCE4D6", end_color="FCE4D6", fill_type="solid")
    red_font = Font(name="Calibri", size=10, color="C00000", bold=True)
    rule_aylin = FormulaRule(formula=['$I5="AYLIN"'], fill=red_fill, font=red_font)

    green_fill = PatternFill(start_color="E2EFDA", end_color="E2EFDA", fill_type="solid")
    green_font = Font(name="Calibri", size=10, color="375623", bold=True)
    rule_andre = FormulaRule(formula=['$I5="ANDRÉ"'], fill=green_fill, font=green_font)

    blue_fill = PatternFill(start_color="D9E1F2", end_color="D9E1F2", fill_type="solid")
    blue_font = Font(name="Calibri", size=10, color="1F4E78", bold=True)
    rule_joham = FormulaRule(formula=['$I5="JOHAM"'], fill=blue_fill, font=blue_font)

    full_range = f"A{start_row}:I{end_row}"
    ws.conditional_formatting.add(full_range, rule_aylin)
    ws.conditional_formatting.add(full_range, rule_andre)
    ws.conditional_formatting.add(full_range, rule_joham)

    # ----------------------------------------------------
    # TAB 3: RESUMEN_EJECUTIVO
    # ----------------------------------------------------
    ws_dash = wb.create_sheet(title="RESUMEN_EJECUTIVO")
    ws_dash.views.sheetView[0].showGridLines = True

    ws_dash.merge_cells("A1:D1")
    ws_dash["A1"] = "RESUMEN DE CUENTAS - CASA 27"
    ws_dash["A1"].font = TITLE_FONT
    ws_dash["A1"].fill = TITLE_FILL
    ws_dash["A1"].alignment = Alignment(horizontal="center", vertical="center")
    ws_dash.row_dimensions[1].height = 35

    ws_dash["A3"] = "USUARIO"
    ws_dash["B3"] = "N° REGISTROS"
    ws_dash["C3"] = "TOTAL GASTADO (S/)"
    ws_dash["D3"] = "% DEL TOTAL"

    for col in ["A", "B", "C", "D"]:
        ws_dash[f"{col}3"].font = WHITE_BOLD_11
        ws_dash[f"{col}3"].fill = PatternFill(start_color="1F4E79", end_color="1F4E79", fill_type="solid")
        ws_dash[f"{col}3"].alignment = Alignment(horizontal="center", vertical="center")

    users_dash = [
        ("AYLIN", "FCE4D6", "C00000"),
        ("ANDRÉ", "E2EFDA", "375623"),
        ("JOHAM", "D9E1F2", "1F4E78")
    ]

    for idx, (u_name, bg_hex, text_hex) in enumerate(users_dash, start=4):
        ws_dash[f"A{idx}"] = u_name
        ws_dash[f"A{idx}"].font = Font(name="Calibri", size=11, bold=True, color=text_hex)
        ws_dash[f"A{idx}"].fill = PatternFill(start_color=bg_hex, end_color=bg_hex, fill_type="solid")
        ws_dash[f"A{idx}"].alignment = Alignment(horizontal="center", vertical="center")

        ws_dash[f"B{idx}"] = f'=COUNTIF(REGISTRO_CUENTAS!$I$5:$I$104; "{u_name}")'
        ws_dash[f"B{idx}"].font = DARK_REG_10
        ws_dash[f"B{idx}"].alignment = Alignment(horizontal="center", vertical="center")

        ws_dash[f"C{idx}"] = f'=SUMIF(REGISTRO_CUENTAS!$I$5:$I$104; "{u_name}"; REGISTRO_CUENTAS!$H$5:$H$104)'
        ws_dash[f"C{idx}"].font = Font(name="Calibri", size=11, bold=True, color="000000")
        ws_dash[f"C{idx}"].number_format = '"S/"#,##0.00'
        ws_dash[f"C{idx}"].alignment = Alignment(horizontal="right", vertical="center")

        ws_dash[f"D{idx}"] = f'=IF(C7>0; C{idx}/C7; 0)'
        ws_dash[f"D{idx}"].font = DARK_REG_10
        ws_dash[f"D{idx}"].number_format = '0.0%'
        ws_dash[f"D{idx}"].alignment = Alignment(horizontal="right", vertical="center")

        for col in ["A", "B", "C", "D"]:
            ws_dash[f"{col}{idx}"].border = THIN_BORDER

    # Total Row
    ws_dash["A7"] = "TOTAL GENERAL"
    ws_dash["A7"].font = WHITE_BOLD_11
    ws_dash["A7"].fill = PatternFill(start_color="333333", end_color="333333", fill_type="solid")
    ws_dash["A7"].alignment = Alignment(horizontal="center", vertical="center")

    ws_dash["B7"] = f'=SUM(B4:B6)'
    ws_dash["B7"].font = WHITE_BOLD_11
    ws_dash["B7"].fill = PatternFill(start_color="333333", end_color="333333", fill_type="solid")
    ws_dash["B7"].alignment = Alignment(horizontal="center", vertical="center")

    ws_dash["C7"] = f'=SUM(C4:C6)'
    ws_dash["C7"].font = WHITE_BOLD_11
    ws_dash["C7"].fill = PatternFill(start_color="333333", end_color="333333", fill_type="solid")
    ws_dash["C7"].number_format = '"S/"#,##0.00'
    ws_dash["C7"].alignment = Alignment(horizontal="right", vertical="center")

    ws_dash["D7"] = f'=SUM(D4:D6)'
    ws_dash["D7"].font = WHITE_BOLD_11
    ws_dash["D7"].fill = PatternFill(start_color="333333", end_color="333333", fill_type="solid")
    ws_dash["D7"].number_format = '0.0%'
    ws_dash["D7"].alignment = Alignment(horizontal="right", vertical="center")

    for col in ["A", "B", "C", "D"]:
        ws_dash[f"{col}7"].border = THIN_BORDER

    ws_dash.column_dimensions["A"].width = 22
    ws_dash.column_dimensions["B"].width = 18
    ws_dash.column_dimensions["C"].width = 24
    ws_dash.column_dimensions["D"].width = 16

    # ----------------------------------------------------
    # TAB 4: INSTRUCCIONES_MACRO
    # ----------------------------------------------------
    ws_macro = wb.create_sheet(title="INSTRUCCIONES_MACRO")
    ws_macro.views.sheetView[0].showGridLines = True

    ws_macro.merge_cells("A1:E1")
    ws_macro["A1"] = "CÓDIGO MACRO VBA PARA EL BOTÓN 'ACTUALIZAR'"
    ws_macro["A1"].font = TITLE_FONT
    ws_macro["A1"].fill = TITLE_FILL
    ws_macro["A1"].alignment = Alignment(horizontal="center", vertical="center")
    ws_macro.row_dimensions[1].height = 35

    instructions = [
        ("PASO 1", "Presione ALT + F11 en Excel para abrir el Editor de Visual Basic."),
        ("PASO 2", "En el menú superior, seleccione Insertar -> Módulo."),
        ("PASO 3", "Copie y pegue el siguiente código VBA en la ventana del módulo:"),
        ("", ""),
        ("CÓDIGO VBA:", "Sub ReiniciarRegistro()"),
        ("", "    Dim respuesta As VbMsgBoxResult"),
        ("", "    respuesta = MsgBox(\"¿Está seguro de que desea reiniciar todo el registro de cuentas?\", vbYesNo + vbQuestion, \"Confirmar Reinicio\")"),
        ("", "    If respuesta = vbYes Then"),
        ("", "        With ThisWorkbook.Sheets(\"REGISTRO_CUENTAS\")"),
        ("", "            .Range(\"C5:I104\").ClearContents"),
        ("", "        End With"),
        ("", "        MsgBox \"El registro de cuentas ha sido reiniciado correctamente.\", vbInformation, \"Reinicio Completado\""),
        ("", "    End If"),
        ("", "End Sub"),
        ("", ""),
        ("PASO 4", "Cierre la ventana del Editor VBA."),
        ("PASO 5", "Haga clic derecho sobre el botón 'ACTUALIZAR' en la hoja REGISTRO_CUENTAS, seleccione 'Asignar Macro', elija 'ReiniciarRegistro' y presione Aceptar.")
    ]

    for idx, (step, text) in enumerate(instructions, start=3):
        ws_macro[f"A{idx}"] = step
        ws_macro[f"A{idx}"].font = Font(name="Calibri", size=10, bold=True, color="1F4E79")
        ws_macro[f"B{idx}"] = text
        if text.startswith("Sub") or text.startswith("    ") or text.startswith("End Sub"):
            ws_macro[f"B{idx}"].font = Font(name="Consolas", size=10, color="000000")
        else:
            ws_macro[f"B{idx}"].font = DARK_REG_10

    ws_macro.column_dimensions["A"].width = 15
    ws_macro.column_dimensions["B"].width = 110

    filename = "CUENTAS MENSUALES CASA 27.xlsx"
    wb.save(filename)
    print(f"Excel updated successfully with dropdowns: {filename}")

if __name__ == "__main__":
    build_dropdown_excel()
