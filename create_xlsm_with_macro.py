import xlsxwriter
import openpyxl
from openpyxl.styles import Font, PatternFill, Alignment, Border, Side
from openpyxl.worksheet.datavalidation import DataValidation
from openpyxl.formatting.rule import FormulaRule
from openpyxl.utils import get_column_letter

# Step 1: Create an XLSM file with XlsxWriter to insert macro code and button
# XlsxWriter can create vba macros or we can generate both .xlsx and .xlsm formats so the user has the exact version they need!
