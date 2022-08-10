<?php 

require_once 'clases/Game.php';

$id = $_GET['id'];

$game = (new Game())->getAsId($id);

/* echo '<pre>';
print_r($game);
echo '</pre>'; */

?>

<section class="container-fluid py-3">

    <div class="row">
        <div class="col-12 col-md-4 pt-4">

        <img src="<?= $game->getFrontPage()?>" alt="">

        <h2 class="text-warning mt-3 mb-4"><?= $game->getTitle()?></h2>

        <div>
            <p class="d-block mb-1">Platform: <span class="text-muted"><?= $game->getPlatform()?></span></p>   
            <p class="d-block mb-1">Release date: <span class="text-muted"><?= $game->getPublicationDate()?></span></p>
            <p class="d-block mb-1">Developer by: <span class="text-muted"><?= $game->getDeveloper()?></span></p>   
        </div>

        <div class="p-0">
            <a class="btn btn-card border-0 mt-4" href="<?= $game->getUrlGame() ?>" class="card-link" target="blank">Visit Web</a>
        </div>

        </div>
        <div class="col-12 col-md-8 pt-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?= $game->getImages()['0']['image']?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= $game->getImages()['1']['image']?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= $game->getImages()['2']['image']?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="bg-secondary p-4">
            <h3 class="pb-3">Description:</h3>
            <p><?= $game->getDescription()?></p>
        </div>
    </div>

    


    

</section>