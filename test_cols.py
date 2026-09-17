from openpyxl.utils import get_column_letter

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
    "MANDARINA 1", "PAPAYA", "MANGO", "PIÑA", "PLATANO", "MANZANA", "SANDIA",
    "PALTA", "FRESA", "ARROZ", "FREJOLES", "LENTEJAS", "TALLARINES", "FIDEOS",
    "TOMATE", "CEBOLLA", "ZAPALLO", "LECHUGA", "PIMIENTO", "AJOS", "ARBEJAS",
    "CONDIMENTOS", "AZUCAR", "SAL", "SAL DE MARAS", "AVENA", "MANDARINA 2"
]

cols = ["N° DE ORDEN", "FECHA"] + majas_items + lucky_items + mercado_items + ["OTROS", "PRECIO", "TOTAL POR CONCEPTO", "USUARIO"]

print(f"Total columns: {len(cols)}")
for idx, c in enumerate(cols, 1):
    print(f"{idx}: {get_column_letter(idx)} -> {c}")
