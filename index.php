<?php 

const API_URL = 'https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY';

$ch = curl_init(API_URL);

//$result = file_get_contents(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$data = json_decode($result, true);
curl_close($ch);


?>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>La próxima pelicula de Marvel</title>    
    <meta name="description" content="La Imagen del dia por la nasa"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>
<main>
    <section>
        <img src="<?= $data["hdurl"];?>" width="300" alt="Poster de <?=$data["title"];?>"
        style="border-radius: 16px">
    </section>
    <hgroup>
        <h3><?=$data["title"];?> copyright <?=$data["copyright"];?></h3>
        <p>Date: <?=$data["date"];?></p>
        <p>Explanation: <?= $data["explanation"];?></p>
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
    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    img{
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>