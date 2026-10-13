
from datetime import datetime

nombre = input("¡Hola! ¿Cómo te llamas? ")

print("\n¡Bienvenido/a,", nombre + "!")
print("Este es tu primer programa en Python.")

fecha = datetime.now().strftime("%d/%m/%Y")

print("Fecha de ejecución:", fecha)
