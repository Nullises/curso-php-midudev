<?php 
$name="Ulises";
$lastName="Vargas";
$fullName = $name . " " .  $lastName;
$output = "Hola, mi nombre es \"$fullName\"";
$output .= " y soy desarrollador"
?>

<h1>
    <?= $output; ?>
</h1>