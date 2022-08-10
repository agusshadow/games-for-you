<?php

require_once __DIR__ . './../clases/Game.php';

$gender = $_GET['g'] ?? '';

$platform = $_GET['p'] ?? '';

if (!empty($gender)) {
    $games = (new Game())->getAsGender($gender);
    $title_to_display = $gender;
} elseif(!empty($platform)) {
    $games = (new Game())->getAsPlataform($platform);
    $title_to_display = $platform;
} else {
    $games = (new Game())->getAsParam('popularity');
}


?>

<section class="container-fluid py-3">

    <h2 class="mb-5 mt-3 text-center h1 py-3 "><?= $title_to_display ?? 'discover the best' ?> games</h2>
    <p class="mb-4 ms-2">Results: <span class="text-warning"><?= count($games)?></span></p>

    <div class="row row-cols-4 d-flex justify-content-center">

    <?php 

    foreach ($games as $game) {
        require 'game.php';
    };

    ?>

    </div>

</section>