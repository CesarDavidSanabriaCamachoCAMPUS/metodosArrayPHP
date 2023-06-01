<?php
    //Métodos mas usados de php

    // header contiene el formato para visualizar de forma optima el ejercicio
    header('Content-Type: application/json');

    //array_flip(): Intercambia las claves con sus valores correspondientes en un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    $arrayflip = array_flip($nombres);
    print_r($arrayflip);

    //array_fill(): Rellena un array con un valor especificado, el primer numero es la posicion, el segundo es la cantidad, y el tercer valor es lo que queremor llenar.
    $arrayfill = array_fill(4,1,"Cesar",);
    print_r($arrayfill);

    //array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
    $numeros = array("1", "2", "3", "4", "5");
    $arrayfilter = array_filter($numeros, function($pares){
        return $pares % 2 === 0;
    });
    print_r($arrayfilter);

    //array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
    function raiz($x){
        return (sqrt($x));
    }
    $numerosRaiz = array("10", "20", "30", "40", "50");
    $arrayMap = array_map("raiz", $numerosRaiz);
    print_r($arrayMap);

    //array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
    function sumaTotal($total, $x){
        $total += $x;
        return $total;
    }
    $numerosSuma = array("2", "4", "6", "8", "10");
    $arrayReduce = array_reduce($numerosSuma, "sumaTotal");
    print_r($arrayReduce);
  
    //array_key_exists(): Comprueba si una clave existe en un array.
    $nombresKey = array("Cesar" => 1, "Jdam"  => 2, "Jean"  => 3, "Ao Kuan"  => 4, "Hitel"  => 5);
    $arrayKeyExist = (array_key_exists("Cesar", $nombresKey)? 'EXISTE':'NO EXISTE');
    print_r($arrayKeyExist);

    //in_array(): Comprueba si un valor existe en un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    $inArray = (in_array("Ao Kuan", $nombres)? "Existe" : "No existe");
    print_r($inArray);

    //array_rand(): Devuelve una o varias claves aleatorias de un array.
    $nombresAleatorios = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    $arrayRand = array_rand($nombresAleatorios, 2);
    print_r($arrayRand);

    //array_unique(): Elimina los valores duplicados de un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_push(): Agrega uno o más elementos al final de un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_pop(): Extrae y elimina el último elemento de un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_reverse(): Revierte el orden de los elementos en un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_sum(): Devuelve la suma de todos los valores de un array numérico.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_product(): Devuelve el producto de todos los valores de un array numérico.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_chunk(): Divide un array en fragmentos más pequeños.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_keys(): Devuelve todas las claves de un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_values(): Devuelve todos los valores de un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
    //array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.
    $nombres = array("Cesar", "Jdam", "Jean", "Ao Kuan", "Hitel");
    print_r();
?>