<?php
//MÉTOD0S ARRAY

// array_push (Agrega un dato al final de la lista)

$array = (array) ["Miguel","Marcelo", "Juan"];
 array_push($array, "Thomas"); 
 $array[] = "Alex"; //método abreviado
 print_r($array);


// array_unshift (Agrega un dato al inicio de la lista)

$array = (array) ["Miguel","Marcelo", "Juan"];
$res = array_unshift($array, "Thomas");
//No tiene método abreviado
print_r($array);


// array_pop (Extrae y elimina el último dato de la lista)

$array = (array) ["Miguel","Marcelo", "Juan"];
$res = array_pop($array);
//No tiene método abreviado
print_r($array);


// array_shift (Extrae y elimina el primer dato de la lista)

$array = (array) ["Miguel","Marcelo", "Juan"];
$res = array_shift($array);
//No tiene método abreviado
print_r($array);


// array_splice  (Extrae y elimina los datos que indiquemos de la lista)

$array = (array) ["Miguel","Marcelo", "Juan"];
$res = array_splice($array, 2);
//No tiene método abreviado
print_r($array);


// array_splice (Extrae y elimina los datos que indiquemos de la lista, luego del puntero que nosotros indiquemos)

$array = (array) ["Miguel","Marcelo", "Juan", "Alex"];
$res = array_splice($array, 2, 2);
//No tiene método abreviado
print_r($array);


/* array_splice (Elimina todos los datos ubicados continuos al puntero indicado por nosotros
 y además agrega un dato al final también indicado por nosotros)*/

$array = (array) ["Miguel","Marcelo", "Juan", "Alex"];
$res = array_splice($array, 1, count($array), "Thomas");
//No tiene método abreviado
print_r($array);


// array_splice (Agrega uno o más datos inmediatamente luego al puntero indicado por nosotros)

$array = (array) ["Miguel","Marcelo", "Juan", "Alex"];
$res = array_splice($array, 2, 0, ["Thomas", "Manuel"]);
//No tiene método abreviado
print_r($array);


/* array_slice (Duplica los datos de la lista principal sin afectarla y
retorna los dos selecionados con el puntero)*/

$array = (array) ["Miguel","Marcelo", "Juan", "Alex", "Thomas"];
$res = array_slice($array,2,-2, true);
//No tiene método abreviado
print_r($array);


// sort (ordena los datos string en orden alfabético)

$array = (array) ["Miguel","Marcelo", "Juan", "Alex", "Thomas"];
$res = sort($array);
//No tiene método abreviado   
print_r($array);
echo "<br>";
print_r($res);


// sort($array, SORT_NATURAL) (ordena los datos en orden alfanumérico)

$array = (array) ["Miguel","Marcelo", "Juan", "Alex", "Thomas"];
$res = sort($array, SORT_NATURAL);
//No tiene método abreviado   
print_r($array);
echo "<br>";
print_r($res);



// sort($array, SORT_NATURAL | SORT_FLAG_CASE ) (ordena los datos en orden lexicográfico)

$array = (array) ["Miguel","Marcelo", "Juan", "Alex", "Thomas"];
$res = sort($array, SORT_NATURAL | SORT_FLAG_CASE );
//No tiene método abreviado   
print_r($array);
echo "<br>";
print_r($res);


// array_keys (Extrae los índices de la lista)

$array = (array) ["Miguel","Marcelo", "Juan", "Alex", "Thomas"];
$res = array_keys($array);
//No tiene método abreviado   
print_r($array);
echo "<br>";
print_r($res);


?>