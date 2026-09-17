import openpyxl
from openpyxl.styles import Font, PatternFill, Alignment, Border, Side
from openpyxl.worksheet.datavalidation import DataValidation
from openpyxl.formatting.rule import FormulaRule
from openpyxl.utils import get_column_letter

def build_excel():
    wb = openpyxl.Workbook()

    # ----------------------------------------------------
    # DATA DEFINITIONS
    # ----------------------------------------------------
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

    # Category columns
    columns_info = []

    # Fixed prefix columns: N° DE ORDEN, FECHA
    columns_info.append({"cat": "GENERAL", "sub": "N° DE ORDEN", "type": "ORDER"})
    columns_info.append({"cat": "GENERAL", "sub": "FECHA", "type": "DATE"})

    for item in majas_items:
        columns_info.append({"cat": "TIENDA MAJAS", "sub": item, "type": "QTY"})
    for item in lucky_items:
        columns_info.append({"cat": "TIENDA LUCKY PRODUCTOS", "sub": item, "type": "QTY"})
    for item in mercado_items:
        columns_info.append({"cat": "MERCADO", "sub": item, "type": "QTY"})

    columns_info.append({"cat": "OTROS", "sub": "DESCRIPCIÓN / CANT", "type": "TEXT"})
    columns_info.append({"cat": "RESUMEN / PAGO", "sub": "PRECIO", "type": "CURRENCY"})
    columns_info.append({"cat": "RESUMEN / PAGO", "sub": "TOTAL POR CONCEPTO", "type": "TOTAL_FORMULA"})
    columns_info.append({"cat": "RESUMEN / PAGO", "sub": "USUARIO", "type": "USER"})

    # STYLES
    TITLE_FONT = Font(name="Calibri", size=16, bold=True, color="FFFFFF")
    TITLE_FILL = PatternFill(start_color="1F4E79", end_color="1F4E79", fill_type="solid")

    CAT_FILLS = {
        "GENERAL": PatternFill(start_color="333333", end_color="333333", fill_type="solid"),
        "TIENDA MAJAS": PatternFill(start_color="1F4E78", end_color="1F4E78", fill_type="solid"),
        "TIENDA LUCKY PRODUCTOS": PatternFill(start_color="276A3C", end_color="276A3C", fill_type="solid"),
        "MERCADO": PatternFill(start_color="B25900", end_color="B25900", fill_type="solid"),
        "OTROS": PatternFill(start_color="62259D", end_color="62259D", fill_type="solid"),
        "RESUMEN / PAGO": PatternFill(start_color="2B2B2B", end_color="2B2B2B", fill_type="solid")
    }

    SUBHEADER_FILLS = {
        "GENERAL": PatternFill(start_color="EAEAEA", end_color="EAEAEA", fill_type="solid"),
        "TIENDA MAJAS": PatternFill(start_color="D9E1F2", end_color="D9E1F2", fill_type="solid"),
        "TIENDA LUCKY PRODUCTOS": PatternFill(start_color="E2EFDA", end_color="E2EFDA", fill_type="solid"),
        "MERCADO": PatternFill(start_color="FCE4D6", end_color="FCE4D6", fill_type="solid"),
        "OTROS": PatternFill(start_color="E1D5E7", end_color="E1D5E7", fill_type="solid"),
        "RESUMEN / PAGO": PatternFill(start_color="FFF2CC", end_color="FFF2CC", fill_type="solid")
    }

    WHITE_BOLD_11 = Font(name="Calibri", size=11, bold=True, color="FFFFFF")
    DARK_BOLD_9 = Font(name="Calibri", size=9, bold=True, color="000000")
    DARK_REG_10 = Font(name="Calibri", size=10, color="000000")
    SUMMARY_LABEL_FONT = Font(name="Calibri", size=11, bold=True, color="1F4E79")
    SUMMARY_VAL_FONT = Font(name="Calibri", size=12, bold=True, color="000000")

    THIN_BORDER = Border(
        left=Side(style='thin', color='D9D9D9'),
        right=Side(style='thin', color='D9D9D9'),
        top=Side(style='thin', color='D9D9D9'),
        bottom=Side(style='thin', color='D9D9D9')
    )
    CARD_BORDER = Border(
        left=Side(style='medium', color='1F4E79'),
        right=Side(style='medium', color='1F4E79'),
        top=Side(style='medium', color='1F4E79'),
        bottom=Side(style='medium', color='1F4E79')
    )

    # ----------------------------------------------------
    # SHEET 1: REGISTRO DE CUENTAS
    # ----------------------------------------------------
    ws = wb.active
    ws.title = "REGISTRO_CUENTAS"
    ws.views.sheetView[0].showGridLines = True

    # Row 1: Title
    ws.merge_cells("A1:C1")
    ws["A1"] = "CUENTAS MENSUALES CASA 27"
    ws["A1"].font = TITLE_FONT
    ws["A1"].fill = TITLE_FILL
    ws["A1"].alignment = Alignment(horizontal="center", vertical="center")

    # Instruction box / Instructions
    ws["E1"] = "Instrucción:"
    ws["E1"].font = Font(name="Calibri", size=10, bold=True, color="1F4E79")
    ws["F1"] = "Seleccione el USUARIO en la Columna final. Los colores (Rojo: AYLIN, Verde: ANDRÉ, Azul: JOHAM) se aplicarán automáticamente."
    ws["F1"].font = Font(name="Calibri", size=9, italic=True, color="555555")

    # Row 3-4: Column Headers (Merged Category headers and Subheaders)
    # Row 3: Category Header, Row 4: Subheaders
    cat_starts = {}
    for idx, col in enumerate(columns_info, start=1):
        cat = col["cat"]
        if cat not in cat_starts:
            cat_starts[cat] = [idx, idx]
        else:
            cat_starts[cat][1] = idx

    for cat, (start_col, end_col) in cat_starts.items():
        if start_col != end_col:
            ws.merge_cells(start_row=3, start_column=start_col, end_row=3, end_column=end_col)
        cell = ws.cell(row=3, column=start_col)
        cell.value = cat
        cell.font = WHITE_BOLD_11
        cell.fill = CAT_FILLS[cat]
        cell.alignment = Alignment(horizontal="center", vertical="center")

        # Apply style to all cells in merged range for borders
        for c in range(start_col, end_col + 1):
            ws.cell(row=3, column=c).fill = CAT_FILLS[cat]

    for idx, col in enumerate(columns_info, start=1):
        cell = ws.cell(row=4, column=idx)
        cell.value = col["sub"]
        cell.font = DARK_BOLD_9
        cell.fill = SUBHEADER_FILLS[col["cat"]]
        cell.alignment = Alignment(horizontal="center", vertical="center", wrap_text=True)
        cell.border = THIN_BORDER

    # Set row heights
    ws.row_dimensions[1].height = 35
    ws.row_dimensions[2].height = 12
    ws.row_dimensions[3].height = 24
    ws.row_dimensions[4].height = 40

    # Data Rows (Rows 5 to 104 -> 100 rows)
    start_row = 5
    end_row = 104

    # Columns letters mapping
    precio_col_letter = get_column_letter(len(columns_info) - 2) # PRECIO
    total_col_letter = get_column_letter(len(columns_info) - 1)  # TOTAL
    usuario_col_letter = get_column_letter(len(columns_info))    # USUARIO

    for r in range(start_row, end_row + 1):
        ws.row_dimensions[r].height = 20
        # Auto N° DE ORDEN
        cell_ord = ws.cell(row=r, column=1)
        cell_ord.value = f'=IF(B{r}<>""; ROW()-{start_row-1}; "")'
        cell_ord.alignment = Alignment(horizontal="center", vertical="center")
        cell_ord.font = DARK_REG_10
        cell_ord.border = THIN_BORDER

        # Auto FECHA
        cell_date = ws.cell(row=r, column=2)
        cell_date.value = f'=IF(ISNUMBER({precio_col_letter}{r}); IF(C{r}=""; TODAY(); C{r}); "")'
        cell_date.number_format = 'DD/MM/YYYY'
        cell_date.alignment = Alignment(horizontal="center", vertical="center")
        cell_date.font = DARK_REG_10
        cell_date.border = THIN_BORDER

        # Quantity columns and OTROS
        for c in range(3, len(columns_info) - 2):
            cell_q = ws.cell(row=r, column=c)
            cell_q.alignment = Alignment(horizontal="center", vertical="center")
            cell_q.font = DARK_REG_10
            cell_q.border = THIN_BORDER

        # PRECIO
        cell_p = ws.cell(row=r, column=len(columns_info) - 2)
        cell_p.number_format = '"S/"#,##0.00'
        cell_p.alignment = Alignment(horizontal="right", vertical="center")
        cell_p.font = DARK_REG_10
        cell_p.border = THIN_BORDER

        # TOTAL POR CONCEPTO
        cell_t = ws.cell(row=r, column=len(columns_info) - 1)
        cell_t.value = f'={precio_col_letter}{r}'
        cell_t.number_format = '"S/"#,##0.00'
        cell_t.alignment = Alignment(horizontal="right", vertical="center")
        cell_t.font = Font(name="Calibri", size=10, bold=True, color="000000")
        cell_t.border = THIN_BORDER

        # USUARIO
        cell_u = ws.cell(row=r, column=len(columns_info))
        cell_u.alignment = Alignment(horizontal="center", vertical="center")
        cell_u.font = Font(name="Calibri", size=10, bold=True, color="000000")
        cell_u.border = THIN_BORDER

    # Data Validation for USUARIO
    dv_user = DataValidation(type="list", formula1='"AYLIN,ANDRÉ,JOHAM"', allow_blank=True)
    dv_user.error ='Seleccione un usuario válido de la lista (AYLIN, ANDRÉ, JOHAM)'
    dv_user.errorTitle = 'Usuario Inválido'
    dv_user.prompt = 'Seleccione quien realizó el registro'
    dv_user.promptTitle = 'Usuario'
    ws.add_data_validation(dv_user)
    dv_user.add(f"{usuario_col_letter}{start_row}:{usuario_col_letter}{end_row}")

    # Conditional Formatting for Users
    # AYLIN -> Red text / light red background
    red_fill = PatternFill(start_color="FCE4D6", end_color="FCE4D6", fill_type="solid")
    red_font = Font(name="Calibri", size=10, color="C00000", bold=True)
    rule_aylin = FormulaRule(
        formula=[f'${usuario_col_letter}{start_row}="AYLIN"'],
        fill=red_fill,
        font=red_font
    )

    # ANDRÉ -> Green text / light green background
    green_fill = PatternFill(start_color="E2EFDA", end_color="E2EFDA", fill_type="solid")
    green_font = Font(name="Calibri", size=10, color="375623", bold=True)
    rule_andre = FormulaRule(
        formula=[f'${usuario_col_letter}{start_row}="ANDRÉ"'],
        fill=green_fill,
        font=green_font
    )

    # JOHAM -> Blue text / light blue background
    blue_fill = PatternFill(start_color="D9E1F2", end_color="D9E1F2", fill_type="solid")
    blue_font = Font(name="Calibri", size=10, color="1F4E78", bold=True)
    rule_joham = FormulaRule(
        formula=[f'${usuario_col_letter}{start_row}="JOHAM"'],
        fill=blue_fill,
        font=blue_font
    )

    full_range = f"A{start_row}:{usuario_col_letter}{end_row}"
    ws.conditional_formatting.add(full_range, rule_aylin)
    ws.conditional_formatting.add(full_range, rule_andre)
    ws.conditional_formatting.add(full_range, rule_joham)

    # Adjust Column Widths
    for idx, col in enumerate(columns_info, start=1):
        col_letter = get_column_letter(idx)
        if col["type"] == "ORDER":
            ws.column_dimensions[col_letter].width = 12
        elif col["type"] == "DATE":
            ws.column_dimensions[col_letter].width = 14
        elif col["type"] == "QTY":
            ws.column_dimensions[col_letter].width = 13
        elif col["type"] == "TEXT":
            ws.column_dimensions[col_letter].width = 25
        elif col["type"] in ["CURRENCY", "TOTAL_FORMULA"]:
            ws.column_dimensions[col_letter].width = 18
        elif col["type"] == "USER":
            ws.column_dimensions[col_letter].width = 16

    # ----------------------------------------------------
    # SHEET 2: RESUMEN Y DASHBOARD
    # ----------------------------------------------------
    ws_dash = wb.create_sheet(title="RESUMEN_EJECUTIVO")
    ws_dash.views.sheetView[0].showGridLines = True

    # Title
    ws_dash.merge_cells("A1:E1")
    ws_dash["A1"] = "RESUMEN DE CUENTAS Y CONSUMO POR USUARIO"
    ws_dash["A1"].font = TITLE_FONT
    ws_dash["A1"].fill = TITLE_FILL
    ws_dash["A1"].alignment = Alignment(horizontal="center", vertical="center")
    ws_dash.row_dimensions[1].height = 35

    # Table 1: Totals per User
    ws_dash["A3"] = "USUARIO"
    ws_dash["B3"] = "N° REGISTROS"
    ws_dash["C3"] = "TOTAL GASTADO (S/)"
    ws_dash["D3"] = "% DEL TOTAL"

    for col in ["A", "B", "C", "D"]:
        ws_dash[f"{col}3"].font = WHITE_BOLD_11
        ws_dash[f"{col}3"].fill = PatternFill(start_color="1F4E79", end_color="1F4E79", fill_type="solid")
        ws_dash[f"{col}3"].alignment = Alignment(horizontal="center", vertical="center")

    users_dash = [
        ("AYLIN", "Red", "FCE4D6", "C00000"),
        ("ANDRÉ", "Green", "E2EFDA", "375623"),
        ("JOHAM", "Blue", "D9E1F2", "1F4E78")
    ]

    for idx, (u_name, color_name, bg_hex, text_hex) in enumerate(users_dash, start=4):
        ws_dash[f"A{idx}"] = u_name
        ws_dash[f"A{idx}"].font = Font(name="Calibri", size=11, bold=True, color=text_hex)
        ws_dash[f"A{idx}"].fill = PatternFill(start_color=bg_hex, end_color=bg_hex, fill_type="solid")
        ws_dash[f"A{idx}"].alignment = Alignment(horizontal="center", vertical="center")

        ws_dash[f"B{idx}"] = f'=COUNTIF(REGISTRO_CUENTAS!${usuario_col_letter}${start_row}:${usuario_col_letter}${end_row}; "{u_name}")'
        ws_dash[f"B{idx}"].font = DARK_REG_10
        ws_dash[f"B{idx}"].alignment = Alignment(horizontal="center", vertical="center")

        ws_dash[f"C{idx}"] = f'=SUMIF(REGISTRO_CUENTAS!${usuario_col_letter}${start_row}:${usuario_col_letter}${end_row}; "{u_name}"; REGISTRO_CUENTAS!${total_col_letter}${start_row}:${total_col_letter}${end_row})'
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

    # Column dimensions for dashboard
    ws_dash.column_dimensions["A"].width = 20
    ws_dash.column_dimensions["B"].width = 18
    ws_dash.column_dimensions["C"].width = 22
    ws_dash.column_dimensions["D"].width = 16

    # Save Workbook
    output_filename = "CUENTAS MENSUALES CASA 27.xlsx"
    wb.save(output_filename)
    print(f"File created successfully: {output_filename}")

if __name__ == "__main__":
    build_excel()
