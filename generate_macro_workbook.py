import xlsxwriter
import openpyxl

# Step 1: Create XLSM using XlsxWriter with VBA macro and button
workbook = xlsxwriter.Workbook('CUENTAS MENSUALES CASA 27.xlsm')

# Add VBA code via string or directly into workbook structure if vba project exists
# Since we can attach a button to macro, XlsxWriter allows adding buttons linked to macros!

# Let's write the VBA module code into a file and compile/inject if vbaProject.bin is present
# Alternatively, XlsxWriter can add form control button to sheet!
# Let's see xlsxwriter button addition:
worksheet = workbook.add_worksheet("REGISTRO_CUENTAS")
worksheet.show_comments()

# Button in XlsxWriter:
# worksheet.insert_button(row, col, options)
# options = {'macro': 'ReiniciarRegistro', 'caption': 'ACTUALIZAR', 'width': 120, 'height': 35}
