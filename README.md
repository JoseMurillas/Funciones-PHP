1. Construir una función que simule el comportamiento de una calculadora:
debe realizar las cuatro operaciones matemáticas básicas, calcular el
porcentaje, calcular la potencia (con la función pow(numero,potencia)) y
calcular la raíz cuadrada (con la función sqrt(numero)), esta información
debe ser retornada al usuario mostrándola en la pantalla.
Para este ejercicio deberá construir un formulario similar al siguiente:

2. Construir una función que permita crear un arreglo con los datos de
contacto de un usuario, para esto creará un formulario con campos para
registrar nombre, dirección, teléfono y correo, también deberá mostrar la
fecha y hora actual del sistema en el formulario y guardarla en un campo
del arreglo, al final deberá retornar un arreglo y mostrarlo en pantalla.
3. Construir una función que permita calcular y retorne la edad de una persona
a partir de la fecha de nacimiento substr(“cadena_original”, punto_inicio,
cantidad) Ejemplo 2021-11-03, date(‘Y’), también pueden convertir la fecha
completa en formato entero con la función strtotime() y después con la
función date(‘Y’, fecha_Entero) extraer el año.
4. Construir una función que calcule y retorne el pago quincenal de un
empleado teniendo en cuenta el salario mínimo mensual es de $1.300.000,
el subsidio de transporte $106.454, el descuento del 8% por concepto de
seguridad social y un descuento que pueda o no tener el empleado por un
adelanto solicitado (en el formulario deberá preguntar si tiene
descuentos).

5. Construir una función que calcule la fecha de inicio de las prácticas de un
técnico del SENA, a partir de su fecha de inicio de la formación lectiva,
con la función date() y strtotime(), date(“formato_de_fecha”,
strtotime($fecha_actual. “+ 1 month”)).
6. Construir una función que permita indicar la hora y fecha local de 10
diferentes ciudades del mundo que estarán establecidas previamente en un
control &lt;select&gt; de un formulario, también deberá mostrar que día de la
semana es: https://www.php.net/manual/es/timezones.php. GMT-05
date_default_timezone_set(&#39;America/Bogota&#39;);

Para los siguientes utilizar la función date(), que utilizarán para imprimir todos
los datos de tipo fecha.
7. Construir una función que imprima “En el día de hoy -dd- de mes -mm-
del año -aaaa- estamos en clase de php”.
8. Construir una función que imprima “la clase de hoy se termina en -#-
minutos (para esto calculará con la hora actual y las 6:00 pm).
9. Construir una función que retorne el EPOCH.
10. Construir una función que imprima “hoy es el día -#- del año, estamos en el
mes -nombre_mes-, este año –Si/No- es bisiesto”.
