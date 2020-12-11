<?php 
$test1 = 6;
$test2 = 6;
if($test1 == $test2){
    echo "Gelijk";
}
else{
    echo "Niet gelijk";
}
echo "<br>";
if($test1 <> $test2){
    echo "Ongelijk";
}
else{
    echo "Gelijk";
}
echo "<br>";
if($test1 === $test2){
    echo "Indentiek";
}
else{
    echo "Niet indentiek";
}
echo "<br>";
if($test1 > $test2){
    echo "Test 1 is groter dan test 2";
}
else{
    echo "Test 1 is kleiner dan test 2";
}
echo "<br>";
if($test1 < $test2){
    echo "Test 1 is kleiner dan test 2";
}
else{
    echo "Test 1 is groter dan test 2";
}
echo "<br>";
if($test1 >= $test2){
    echo "Test 1 is groter of gelijk aan test 2";
}
else{
    echo "Test 1 is kleiner of gelijk aan test 2";
}
echo "<br>";
if($test1 <= $test2){
    echo "Test 1 is kleiner of gelijk aan test 2";
}
else{
    echo "Test 1 is groter of gelijk aan test 2";
}
?>