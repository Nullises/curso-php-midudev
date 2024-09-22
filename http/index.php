

<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión de cURL; ch = cURL handle
/*$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Ejecutar la petición
$result = curl_exec($ch);

// Verificar si la petición fue exitosa
if ($result === false) {
    // Si la petición falló, mostrar el error
    echo "Error: " . curl_error($ch);
    } else {
        // Si la petición fue exitosa, mostrar el resultado
    $full_result =json_decode($result, true);
}
// Cerrar la sesión de cURL
curl_close($ch);*/
$full_result = file_get_contents(API_URL);
$full_result = json_decode($full_result, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Next Movie</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
    <style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center
    }

    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-items: center;
    }

   
</style>
</head>
<body>
    <main>
        <section>
            <img width="200" src="<?= $full_result['poster_url'] ?>" alt="" style="border-radius: 16px">
        </section>
        <hgroup>
            <h2><?= $full_result["title"];?> se estrena en <?= $full_result["days_until"];?> días</h2>
            <p>Fecha de estreno <?= $full_result["release_date"];?></p>
        </hgroup>
    </main>
</body>
</html>