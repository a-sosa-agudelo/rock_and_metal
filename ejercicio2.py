
print("===== CALCULADORA BÁSICA =====")

numero1 = float(input("Ingresa el primer número: "))
numero2 = float(input("Ingresa el segundo número: "))

print("\nSelecciona la operación:")
print("1. Sumar")
print("2. Restar")
print("3. Multiplicar")
print("4. Dividir")

opcion = input("Elige una opción (1-4): ")

if opcion == "1":
    resultado = numero1 + numero2
    print("Resultado de la suma:", resultado)

elif opcion == "2":
    resultado = numero1 - numero2
    print("Resultado de la resta:", resultado)

elif opcion == "3":
    resultado = numero1 * numero2
    print("Resultado de la multiplicación:", resultado)

elif opcion == "4":
    if numero2 != 0:
        resultado = numero1 / numero2
        print("Resultado de la división:", resultado)
    else:
        print("Error: no se puede dividir entre cero.")

else:
    print("Opción no válida. Intenta de nuevo.")
