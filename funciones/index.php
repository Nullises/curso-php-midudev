<?php 
declare(strict_types=1); 
function get_until_message(int $days): string {
    return match(true) {
        $days === 0 => "¡SE ESTRENA HOY!",
        $days === 1 => "¡SE ESTRENA MAÑANA!",
        $days < 7 => "¡SE ESTRENA ESTA SEMANA!",
        default => "¡SE ESTRENA EN " . $days . " DÍAS!"
    };
}
function get_data(string $url): array {
    $data = file_get_contents($url);
    $data = json_decode($data, true);
    return $data;
}
?>