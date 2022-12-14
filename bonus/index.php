<?php

include __DIR__ . '/app/Movie.php';
include __DIR__ . '/app/Actor.php';

//creare attori con Actor class
$leo = (array) new Actor('Leonardo', 'di Caprio');
$tom = (array) new Actor('Tom', 'Hanks');
$bambi = (array) new Actor('Bambi', '');
$vin = (array) new Actor('Vin', 'Diesel');
$others = (array) new Actor('Others', '');

// var_dump($leo, $tom);

$bambi = (array) new Movie('Bambi', 'Aron Arone', 117, 'de', 4.2, 'https://www.corriere.it/methode_image/2022/08/13/Spettacoli/Foto%20Spettacoli%20-%20Trattate/bambi%204-keqG-U33601694680386CYG-656x492@Corriere-Web-Sezioni.jpg', [$bambi, $others]);
$ryan = (array) new Movie('Saving Private Ryan', 'Steven Spielberg', 169, 'en', 4.6, 'https://pad.mymovies.it/filmclub/2006/01/051/locandina.jpg', [$tom, $others]);
$inception = (array) new Movie('Inception', 'Cristopher Nolan', 147, 'en', 4.5, 'https://m.media-amazon.com/images/I/912AErFSBHL._SL1500_.jpg', [$leo]);
$titanic = (array) new Movie('Titanic', 'James Cameron', 182, 'en', 4.9, 'https://www.superguidatv.it/wp-content/uploads/2019/10/titanic-film.jpg', [$leo, $others]);


// var_dump($bambi, $ryan, $inception, $titanic);
// $bambi = (array) $bambi;


//unire istanze film in array
$movies = [$bambi, $ryan, $inception, $titanic];
// var_dump($movies);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h2>Movies</h2>
        <ul>
            <?php
            foreach ($movies as $movie) {
            ?>
                <li class="card">
                    <img src="<?= $movie['poster'] ?>" alt="">
                    <h4> <?= $movie['title'] ?></h4>
                    <h5> Directed by: <span><?= $movie['directed_by'] ?></span></h5>
                    <h5> Running time: <span><?= $movie['running_time'] ?></span></h5>
                    <h5> Original lang: <span><?= $movie['original_language'] ?></span></h5>
                    <h5> Vote: <span><?= $movie['vote'] ?></span></h5>
                    <h5 class="actors">Actors
                        <span>
                            <?php
                            $actors = $movie['actors'];
                            foreach ($actors as $actor) {
                            ?>
                            <li>
                                <?=
                                $actor['name'] . ' ' . $actor['last_name'];
                                ?>
                            </li>
                            <?php
                            }
                            ?>
                        </span>
                    </h5>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

</body>

</html>