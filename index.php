<?php 

require_once './clases/Game.php';


$games = (new Game())->getAsParam('popularity');

$allowed_routes = [
    'home' => [
        'title' => 'Games for you'
    ],
    'single-game' => [
        'title' => 'Games for you'
    ],
    'login' => [
        'title' => 'Login'
    ],
    'favorites' => [
        'title' => 'Favorites'
    ],
    'account' => [
        'title' => 'Account'
    ],
    '404' => [
        'title' => 'Page not found'
    ],
];

$view = isset($_GET['s']) ? $_GET['s'] : 'home';

if (!isset($allowed_routes[$view])) {
  $view = '404';
}

$selected_view = $allowed_routes[$view];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo-icos.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <title>Games for you</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container py-2 py-md-3">
            <a class="navbar-brand me-5" href="index.php?s=home&p=all">Games For You</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gender
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?s=home&g=mmorpg">Mmorpg</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=shooter">Shooter</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=strategy">Strategy</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=moba">Moba</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=racing">Racing</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=sports">Sports</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=social">Social</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=sandbox">Sandbox</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=survival">Survival</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=pvp">Pvp</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&g=pve">Pve</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Platform
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?s=home&p=all">All</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&p=pc">PC</a></li>
                        <li><a class="dropdown-item" href="index.php?s=home&p=browser">Browser</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Consoles (Coming soon)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?s=login">Account</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-card border-0" type="submit">Buscar</button>
            </form>
            </div>
        </div>
    </nav>
    </header>

    <main class="container">

    <?php 

        if (file_exists('views/' . $view . '.php')) {
          require_once __DIR__ . '/views/' . $view . '.php';
        } else {
          require_once __DIR__ . '/views/404.php';
        }
        
        ?>

   

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
