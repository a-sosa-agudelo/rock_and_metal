
a = 34
print(f"=== CALCULADORA BÁSICA === {a}")

numero1 = float(input("Ingresa el primer número: "))
numero2 = float(input("Ingresa el segundo número: "))

print("\n\nSelecciona una operación:")
print("1. Sumar")
print("2. Restar")
print("3. Multiplicar")
print("4. Dividir")
print("5. Módulo")


opcion = input("Elige una opción (1-4): ")

if opcion == "1":
    resultado = numero1 + numero2
    print("Resultado:", resultado)

    print("\n")
    print("si señor entró al if")


elif opcion == "2":
    resultado = numero1 - numero2
    print("Resultado:", resultado)

elif opcion == "3":
    resultado = numero1 * numero2
    print("Resultado:", resultado)

elif opcion == "4":
    if numero2 != 0:
        resultado = numero1 / numero2
        print("Resultado:", resultado)
    else:
        print("Error: no se puede dividir entre cero.")

elif opcion == "5":
    if numero2 != 0:
        resultado = numero1 % numero2
        print("Resultado:", resultado)
    else:
        print("Error: no se puede dividir entre cero.")

else:
    print("Opción no válida.")
