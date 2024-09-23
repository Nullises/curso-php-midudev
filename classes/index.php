<?php 
require_once 'class.php';

// Manera recomendada
$hero = new Superhero("Superman", "Kripton", ["Super Fuerza", "Ojos láser", "Le da la vuelta al mundo y regresa al pasado"], "Invisible");

// Manera no recomendada
/*$hero->name = "Superman";
$hero->planet = "Kripton";
$hero->powers = "Super Fuerza";*/
// $hero->description();
// $hero->show_all();

// Acceder a método estático
$newHero = Superhero::show_random();
$newHero->description();
// $hero->propiedadInvisible; // dará error
// echo $hero->mostrarPropiedadInvisible(); // la mostrará, porque la propiedad private la usa en la clase
?>