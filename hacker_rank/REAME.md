/*
Autor: John Tapias Zarrazola
Fecha: 05/07/2017
Licencia: MIT
Descripcion:
    Programming Challenge
*/

Contenido:
*cube.php es el código para resolver el reto en la plataforma.
*2cube.php es el mismo código con modificaciones para recibir y enviar datos por AJAX.

URL: https://www.hackerrank.com/challenges/cube-summation
Dificultad: hard
Tipo: Data Structures

Paradigmas de programación:
1) Imperativa
2) Programación Orientada a Objetos

El problema realmente aborda la representación de matrices dispersas.
Se decide en su primera implementación usar la representación de lista ligada de tripletas simple como matriz bi-dimensional,
en caso de no ser eficiente, se iba a usar listas doblemente ligadas con nodos cabeza.

Para la inserción:
1)Se utilizó búsqueda por barajas pero el código no quedaba legible
2)Luego se insertaban las tripletas ordenadas, pero generaban problemas de diversa naturaleza
3)Se intentó la forma más sencilla, poner la nueva tripleta al final de la lista y actualizar
su valor en caso de ya existir.

Para la suma:
Realmente era un problema de búsqueda acotada.
1)Cuando se insertaban las tripletas ordenadas, se podía implementar una heúristica:
	Si es menor al intervalo -> No sume
	Si está en el intervalo cerrado -> Sume
	Si es superior al intervalo -> Termine el ciclo, de esta forma se ahorran varias operaciones.
2)Como la implementación final no era ordenada, entonces se debía recorrer toda la lista para calcular la suma O(n)

Clases:
Se diseña la clase de cubo al cual se va a realizar la suma de sus miembros, son Getters, Setters y un Constructor muy primitivo.
Era más prueba de concepto que otra cosa.

Respecto a las estructuras de datos:
Inicialmente resolví el problema usando el lenguaje de programación Java, pero las estructuras de datos, aunque eficientes, no eran eficaces, ya que la información quedaba redundante, a pesar de que eran HashMap.
En PHP toda estructura de datos implementa ARRAY(HashMap, Tree,Set List, etc), eso es bueno hasta cierto punto, tiene limitación respecto a
que las Key sólo pueden ser datos primitivos tales como int o string. Si PHP permitiese Keys tipo Object, el problema se resuelve el pocas líneas de código.

Conclusión: NO complicarse, si una solución es simple y funciona, esa es.
