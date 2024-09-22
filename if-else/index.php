<?php 
$age = 35;
$isDev = true;

// Ternary
$output = $age > 25 ? "Ya estas viejo" : "Estás joven";
echo $output;

// If-Else con llaves
if($age > 25 && !$isDev) {
    echo "Ya estás viejo";
} else if ($age > 25 && $isDev){
    echo "Eres viejo pero desarrollador";
} else {
    echo "Estás joven";
}
?>

<?php if($age > 25 && !$isDev) : ?>
    <h2>Ya estas viejo</h2>
<?php elseif($age > 25 && $isDev) : ?>
    <h2>Eres viejo pero desarrollador</h2>
<?php else : ?>
    <h2>Estas joven</h2>
<?php endif; ?>
