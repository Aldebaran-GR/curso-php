<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesion de cURL; ch = CURL Handle
$ch = curl_init(API_URL);
//Recibir peticion sin mostrar en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la peticion y almacenar la respuesta en una variable*/
$result = curl_exec($ch);

//Una alternativa seria utilizar la funcion file_get_contents
// $result = file_get_contents(API_URL); //Si solo quieres hacer un GET de una API


$data = json_decode($result, true);

//Cerrar la sesion de cURL
curl_close($ch);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Próxima película del MCU</title>
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">>
</head>

<main>
    <!-- <pre style="font-size: 8px; color: red; overflow: scroll; height: 250px;">
        <//?php var_dump($data); ?>
    </pre> -->

    <section>
        <img 
            src="<?= $data['poster_url'] ?>" width="300" alt="Imagen de la película <?= $data["title"]?>"
            style="border-radius: 10px; box-shadow: 0 0 16px rgba(96, 5, 243, 0.5);"
        >
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> Se estrena en <?= $data["days_until"]; ?></h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?> </p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?> </p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>