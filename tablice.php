<?php
echo "ZADANIE 1<br>";

$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

echo "5 komorka: " . $tab1[4] . "<br>";
$tab1[6] = 12;

$tab2 = array();
for($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}

$tab3 = array();
echo "Tab3 (suma): ";
for($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
    echo $tab3[$i] . " ";
}
echo "<br>";


for($i = 0; $i < 10; $i++) {
    $tab2[$i] = $tab1[9 - $i + 1]; 
}


echo "<br>ZADANIE 2<br>";
$t = array(5, 3, 8, 3, 12, 1, 9, 3, 4, 6); 

$min = $t[0];
$max = $t[0];
for($i = 1; $i < count($t); $i++) {
    if($t[$i] < $min) $min = $t[$i];
    if($t[$i] > $max) $max = $t[$i];
}
echo "Min: $min, Max: $max<br>";


$suma = 0;
for($i = 0; $i < count($t); $i++) {
    $suma += $t[$i];
}
echo "Srednia: " . $suma . "<br>";

$ile_trojek = 0;
for($i = 0; $i < count($t); $i++) {
    if($t[$i] == 3) $ile_trojek++;
}
echo "Ilosc trojek: $ile_trojek<br>";

$parzyste = 0;
$nieparzyste = 0;
for($i = 0; $i < count($t); $i++) {
    if($t[$i] % 2 == 0) $parzyste++;
    else $nieparzyste++;
}
echo "Parzyste: $parzyste, Nieparzyste: $nieparzyste<br>";


echo "<br>=== ZADANIE 3 ===<br>";
$znaki = array('K', 'a', 'c', 'p', 'e', 'r', 'T', 'e', 's', 't');


for($i = 0; $i < count($znaki); $i++) {
    $kod = ord($znaki[$i]);
    if($kod >= 97 && $kod <= 122) { 
        $znaki[$i] = chr($kod + 10);
    } else if($kod >= 65 && $kod <= 90) { 
        $znaki[$i] = chr($kod - 10);
    }
}
echo "Po zmianie wielkosci liter: " . implode("", $znaki) . "<br>";


echo "<br>ZADANIE 4<br>";
$A = array();
for($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 50);
}

$maxA = $A[0];
for($i = 1; $i < 100; $i++) {
    if($A[$i] > $maxA) $maxA = $A[$i];
}
$ile_maxA = 0;
for($i = 0; $i < 100; $i++) {
    if($A[$i] == $maxA) $ile_maxA++;
}
echo "Najwieksza w A to $maxA, wystapila $ile_maxA razy.<br>";

echo "Liczby nieparzyste: ";
for($i = 0; $i < 100; $i++) {
    if($A[$i] % 2 != 0) echo $A[$i] . " ";
}
echo "<br>";


$w_przedziale = 0;
echo "Liczby w przedziale <5, 15): ";
for($i = 0; $i < 100; $i++) {
    if($A[$i] > 5 && $A[$i] < 15) {
        echo $A[$i] . " ";
        $w_przedziale++;
    }
}
echo "<br>Razem w przedziale: $w_przedziale<br>";


echo "<br>ZADANIE 5<br>";
$fib = array();
$fib[0] = 0;
$fib[1] = 1;
for($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}
echo "Pierwsze 10 liczb Fibonacciego: ";
for($i = 0; $i < 10; $i++) {
    echo $fib[$i] . " ";
}
echo "<br>";
?>