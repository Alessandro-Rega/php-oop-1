<?php
    include_once __DIR__ . './movies.php';

    $movie_marvel = [
        new Movies("Spiderman No Way Home", 2021, "Azione/Avventura"),
        new Movies("Avengers End game", 2019, "Azione/Sci-fi"),
    ];

    $movie_dc = [
        new Movies("L'uomo d'acciaio", 2013 , "Azione/Avventura"),
        new Movies("The Batman", 2022, "Azione/Avventura"),
    ];

    $movie_marvel[0]->descrizione = "L'identità dell'Uomo Ragno viene rivelata a tutti, e non riesce più a separare la sua vita normale dalla vita da supereroe, e quando chiede aiuto al Dottor Strange, lo costringe a scoprire cosa significa veramente essere l'Uomo Ragno.";
    $movie_marvel[1]->descrizione = "Alla deriva nello spazio senza cibo o acqua, Tony Stark vede la propria scorta di ossigeno diminuire di minuto in minuto. Nel frattempo, i restanti Vendicatori affrontano un epico scontro con Thanos.";

    $movie_dc[0]->descrizione = "La genesi di Superman, che giunge sulla Terra dal pianeta Krypton ancora neonato. Cresciuto amorevolmente dai coniugi Kent, Superman scopre i propri straordinari poteri durante l'adolescenza e decide di metterli segretamente a servizio del prossimo.";
    $movie_dc[1]->descrizione = "Dal celebre fumetto, le avventurose vicende di Batman, il supereroe che combatte il crimine indossando un costume da pipistrello, mentre è alla costante ricerca dei segreti del suo passato.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>Film</h1>
    <hr>
    <h2>Marvel</h2>
    <?php foreach($movie_marvel as $movie){?>
        <h3><?php echo $movie->titolo; ?></h3>
        <h4><?php echo $movie->anno; ?></h4>
        <h4><?php echo $movie->tipologia; ?></h4>
        <p><?php echo $movie->getDescrizione(); ?></p>
    <?php } ?>
    <hr>
    <h2>DC Entertainment</h2>
    <?php foreach($movie_dc as $movie){?>
        <h3><?php echo $movie->titolo; ?></h3>
        <h4><?php echo $movie->anno; ?></h4>
        <h4><?php echo $movie->tipologia; ?></h4>
        <p><?php echo $movie->getDescrizione(); ?></p>
    <?php } ?>
</body>
</html>