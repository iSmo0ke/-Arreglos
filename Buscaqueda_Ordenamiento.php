<?php
function buscarElemento($arreglo, $elemento) {
    foreach ($arreglo as $clave => $valor) {
        if ($valor == $elemento) {
            return $clave;        }
    }
    return -1;
}

function ordenarArreglo(&$arreglo) {
    sort($arreglo);
}

$arreglo = [4, 2, 8, 1, 6, 3];
$elementoBuscado = 6;

$indice = buscarElemento($arreglo, $elementoBuscado);

if ($indice != -1) {
    echo "El elemento $elementoBuscado se encuentra en el índice $indice del arreglo.<br>";
} else {
    echo "El elemento $elementoBuscado no se encuentra en el arreglo.<br>";
}

echo "Arreglo sin ordenar: " . implode(", ", $arreglo) . "<br>";
ordenarArreglo($arreglo);
echo "Arreglo ordenado: " . implode(", ", $arreglo) . "<br>";
?>
