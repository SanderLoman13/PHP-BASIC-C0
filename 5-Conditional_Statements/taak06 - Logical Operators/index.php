<?php 
$var1 = 6;

if($var1 < 10 && $var1 > 5) {
    echo "Het getal zit tussen de 10 en de 5!";
} else {
    echo "Het getal is groter dan 10 of kleiner dan 5!";
}
echo "<br>";
if($var1 < 10 || $var1 > 5) {
    echo "Het getal is kleiner dan 5!";
} else {
    echo "Het getal is groter dan 10!";
}
echo "<br>";
if($var1 < 10 xor $var1 > 5) {
    echo "Het getal is 5 of lager";
} else {
    echo "Het getal zit tussen de 5 en 10";
}
echo "<br>";
if($var1 < 10 ?? $var1 > 5) {
    echo "Het getal is kleiner dan 10!";
} else {
    echo "Het getal is groter dan 10!";
}
?>