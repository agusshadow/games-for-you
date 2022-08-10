
<div class="card col p-0 border-0 position-relative m-2" style="width: 19rem;">
<img src="<?= $game->getFrontPage() ?>" class="card-img-top" alt="...">
<!-- <div class="card-body pb-3">
    <h3 class="card-title h4 text-warning pb-2"><?= $game->getTitle() ?></h3>
    <p class="card-text text-light"><?= $game->getShortDescription() ?></p>
</div> -->
<ul class="list-group pt-2">
    <li class="list-group-item border-0 d-block"><span class="bg-light py-1 px-2 text-dark rounded"><?= $game->getGender() ?></span></li>
    <li class="list-group-item border-0 d-block"><span class="bg-light py-1 px-2 text-dark rounded"><?= $game->getIcon() ?></span></li>
</ul>
<div class="card-body p-2">
    <a class="btn btn-card border-0 d-block mb-2 m-1" href="<?= $game->getUrlGame() ?>" class="card-link" target="blank">Visit Web</a>
    <a class="btn btn-card border-0 d-block mb-2 m-1" href="index.php?s=single-game&id=<?= $game->getId() ?>" class="card-link">View More</a>
</div>

</div>
