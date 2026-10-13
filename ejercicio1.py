
from datetime import datetime

nombre = input("¿Cuál es tu nombre? ")

fecha = datetime.now().strftime("%d/%m/%Y")

print(f"¡Bienvenido, {nombre}!")
print(f"Fecha de ejecución: {fecha}")
