<?php 

class Game {
    private $id;
    private $title;
    private $front_page;
    private $short_description;
    private $url_game;
    private $gender;
    private $platform;
    private $developer;
    private $publication_date;
    private $icon;

    private $description;
    private $requirements;
    private $images;

    // return all games

    public function getGames() {

        $url = "https://www.freetogame.com/api/games";
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $games = [];

        foreach ($data as $valor) {
            $game = new Game();
            $game->setId($valor['id']);
            $game->setTitle($valor['title']);
            $game->setFrontPage($valor['thumbnail']);
            $game->setShortDescription($valor['short_description']);
            $game->setUrlGame($valor['game_url']);
            $game->setGender($valor['genre']);
            $game->setPlatform($valor['platform']);
            $game->setDeveloper($valor['developer']);
            $game->setPublicationDate($valor['release_date']);
            $game->setIconImg($valor);
            array_push($games, $game);
        }

        return $games;

    }

    // returns the game corresponding to the id
    // @param = id

    public function getAsId($id) {

        $url = "https://www.freetogame.com/api/game?id=" . $id;
        $json = file_get_contents($url);
        $datos = json_decode($json, true);

        $game = new Game();
        $game->setId($datos['id']);
        $game->setTitle($datos['title']);
        $game->setFrontPage($datos['thumbnail']);
        $game->setShortDescription($datos['short_description']);
        $game->setUrlGame($datos['game_url']);
        $game->setGender($datos['genre']);
        $game->setPlatform($datos['platform']);
        $game->setDeveloper($datos['developer']);
        $game->setPublicationDate($datos['release_date']);
        $game->setIconImg($datos);
        $game->setDescription($datos['description']);
        /* $game->setRequirements($datos['minimum_system_requirements']); */
        $game->setImages($datos['screenshots']);

        return $game;

    }

    // returns the games corresponding to the platform
    // @param = platform
    // options = pc, browser or all

    public function getAsPlataform($platform) {

        $url = "https://www.freetogame.com/api/games?platform=" . $platform;
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $games = [];

        foreach ($data as $valor) {
            $game = new Game();
            $game->setId($valor['id']);
            $game->setTitle($valor['title']);
            $game->setFrontPage($valor['thumbnail']);
            $game->setShortDescription($valor['short_description']);
            $game->setUrlGame($valor['game_url']);
            $game->setGender($valor['genre']);
            $game->setPlatform($valor['platform']);
            $game->setDeveloper($valor['developer']);
            $game->setPublicationDate($valor['release_date']);
            $game->setIconImg($valor);
            array_push($games, $game);
        }

        return $games;

    }

    // returns the games corresponding to the gender
    // @param = gender
    // options = mmorpg, shooter, strategy, moba, racing, sports, social, sandbox, open-world, survival, pvp, pve, pixel, voxel, zombie, turn-based, first-person, third-Person, top-down, tank, space, sailing, side-scroller, superhero, permadeath, card, battle-royale, mmo, mmofps, mmotps, 3d, 2d, anime, fantasy, sci-fi, fighting, action-rpg, action, military, martial-arts, flight, low-spec, tower-defense, horror, mmorts

    public function getAsGender($gender) {

        $url = "https://www.freetogame.com/api/games?category=" . $gender;
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $games = [];

        foreach ($data as $valor) {
            $game = new Game();
            $game->setId($valor['id']);
            $game->setTitle($valor['title']);
            $game->setFrontPage($valor['thumbnail']);
            $game->setShortDescription($valor['short_description']);
            $game->setUrlGame($valor['game_url']);
            $game->setGender($valor['genre']);
            $game->setPlatform($valor['platform']);
            $game->setDeveloper($valor['developer']);
            $game->setPublicationDate($valor['release_date']);
            $game->setIconImg($valor);
            array_push($games, $game);
        }

        return $games;

    }

    // returns the games corresponding to the release date, alphabetical or relevance
    // @param = gender
    // options = release-date, popularity, alphabetical or relevance

    public function getAsParam($popularity) {

        $url = "https://www.freetogame.com/api/games?sort-by=" . $popularity;
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $games = [];

        foreach ($data as $valor) {
            $game = new Game();
            $game->setId($valor['id']);
            $game->setTitle($valor['title']);
            $game->setFrontPage($valor['thumbnail']);
            $game->setShortDescription($valor['short_description']);
            $game->setUrlGame($valor['game_url']);
            $game->setGender($valor['genre']);
            $game->setPlatform($valor['platform']);
            $game->setDeveloper($valor['developer']);
            $game->setPublicationDate($valor['release_date']);
            $game->setIconImg($valor);
            array_push($games, $game);
        }

        return $games;

    }

    public function setIconImg($game) {
        if ($game['platform'] == 'PC (Windows)') {
            $this->setIcon('Windows');
        } else {
            $this->setIcon('Browser');
        }

    }

    // returns the game corresponding to the id
    // @param = id

    public function getAsName($name) {


        $url = "https://www.freetogame.com/api/games";
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $separator = " ";
        $array = explode($separator, $name);

        foreach ($data as $valor) {

            if ($valor['title'] == $name) {
                $game = new Game();
                $game->setId($valor['id']);
                $game->setTitle($valor['title']);
                $game->setFrontPage($valor['thumbnail']);
                $game->setShortDescription($valor['short_description']);
                $game->setUrlGame($valor['game_url']);
                $game->setGender($valor['genre']);
                $game->setPlatform($valor['platform']);
                $game->setDeveloper($valor['developer']);
                $game->setPublicationDate($valor['release_date']);
                $game->setIconImg($valor);         
            } 
        }

        return isset($game) ? $game : 'no se encontro nada';
    }

    // setters

    public function setId($valor) {
        $this->id = $valor;
    }

    public function setTitle($valor) {
        $this->title = $valor;
    }

    public function setFrontPage($valor) {
        $this->front_page = $valor;
    }

    public function setShortDescription($valor) {
        $this->short_description = $valor;
    }

    public function setUrlGame($valor) {
        $this->url_game = $valor;
    }

    public function setGender($valor) {
        $this->gender = $valor;
    }

    public function setPlatform($valor) {
        $this->platform = $valor;
    }

    public function setDeveloper($valor) {
        $this->developer = $valor;
    }

    public function setPublicationDate($valor) {
        $this->publication_date = $valor;
    }

    public function setIcon($valor) {
        $this->icon = $valor;
    }

    public function setDescription($valor) {
        $this->description = $valor;
    }

    public function setRequirements($valor) {
        $this->requirements = $valor;
    }

    public function setImages($valor) {
        $this->images = $valor;
    }



    // getters

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFrontPage() {
        return $this->front_page;
    }

    public function getShortDescription() {
        return $this->short_description;
    }

    public function getUrlGame() {
        return $this->url_game;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getPlatform() {
        return $this->platform;
    }

    public function getDeveloper() {
        return $this->developer;
    }

    public function getPublicationDate() {
        return $this->publication_date;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getRequirements() {
        return $this->requirements;
    }

    public function getImages() {
        return $this->images;
    }

    

}

?>