<?php 
$age=35;

/*$output = match($age){
    0, 1, 2, 3, 4 => 'Bebé',
    5, 6, 7, 8, 9, 10, 11, 12 => 'Niño',
    13, 14, 15, 16, 17 => 'Adolescente',
    18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39 => 'Adulto',
    40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64 => 'Adulto Maduro',
    65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81 => 'Anciano'
};*/
$output = match(true){
    $age <=4 => 'Bebé',
    $age <=12 => 'Niño',
    $age <=17 => 'Adolescente',
    $age <=39 => 'Adulto',
    $age <=64 => 'Adulto Maduro',
    default => 'Anciano'
};

echo $output;

?>