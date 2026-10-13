
print("===== CALCULADORA DE COSTOS DE EVENTOS =====")


def calcular_costo_total(alquiler, materiales, transporte, alimentacion):
    total = alquiler + materiales + transporte + alimentacion
    return total


# Solicitar los gastos del evento
alquiler = float(input("Costo del alquiler del lugar: $"))
materiales = float(input("Costo de los materiales: $"))
transporte = float(input("Costo del transporte: $"))
alimentacion = float(input("Costo de la alimentación: $"))


# Calcular el costo total usando la función
costo_total = calcular_costo_total(
    alquiler,
    materiales,
    transporte,
    alimentacion
)


# Mostrar los resultados
print("\n===== RESUMEN DEL EVENTO =====")
print("Alquiler: $", alquiler)
print("Materiales: $", materiales)
print("Transporte: $", transporte)
print("Alimentación: $", alimentacion)
print("------------------------------")
print("COSTO TOTAL DEL EVENTO: $", costo_total)
print("==============================")
