
print("===== PRESUPUESTO PERSONAL =====")

# Datos del usuario
nombre = input("Ingresa tu nombre: ")

# Ingresos y gastos
ingresos = float(input("¿Cuánto dinero recibiste este mes? $"))
gastos = float(input("¿Cuánto dinero gastaste este mes? $"))

# Calcular saldo disponible
saldo = ingresos - gastos

# Determinar si el presupuesto es positivo
presupuesto_positivo = saldo >= 0

# Mostrar resultados
print("\n===== RESUMEN FINANCIERO =====")
print("Usuario:", nombre)
print("Ingresos: $", ingresos)
print("Gastos: $", gastos)
print("Saldo disponible: $", saldo)
print("¿Presupuesto positivo?:", presupuesto_positivo)

if saldo > 0:
    print("¡Excelente! Te quedó dinero disponible.")
elif saldo == 0:
    print("Gastaste exactamente todo tu ingreso.")
else:
    print("Cuidado: tus gastos superaron tus ingresos.")

print("==============================")
