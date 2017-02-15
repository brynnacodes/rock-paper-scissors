<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/rockPaperScissors.php";

    session_start();
    if (empty($_SESSION['list_of_games'])) {
        $_SESSION['list_of_games'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__.'/../views']);

    $app->get("/", function() use($app) {
        return $app["twig"]->render("homepage.html.twig");
    });

    $app->post('/player1submit', function() use ($app){
        $newRockPaperScissors = new RockPaperScissors;
        $input1 = $_POST('input1');
        $newRockPaperScissors->save();

        return $app['twig']->render('homepage.html.twig');
    });

    return $app;

?>
