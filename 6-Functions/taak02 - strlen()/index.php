<?php 
function mijnNaamIsGroot(){
    $voornaam = 'Sander';
    $achternaam = 'loman';
    $geheleNaam = 'Mijn naam is' ." ". $voornaam ." ". $achternaam;
    echo strtoupper($geheleNaam);

}

mijnNaamIsGroot();








?>