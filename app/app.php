<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/rockPaperScissors.php";

    session_start();
    if (empty($_SESSION['list_of_games'])) {
        $_SESSION['list_of_games'] = array();
    }

    $app["debug"] = true;

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__.'/../views']);

    $app->get("/", function() use($app) {

        return $app["twig"]->render("homepage.html.twig");
    });

    $app->post('/playersubmit', function() use ($app){
        $input1 = strtolower($_POST['input1']);
        $input2 = strtolower($_POST['input2']);
        $newRockPaperScissors = new RockPaperScissors;

        $results = $newRockPaperScissors->play_game($input1, $input2);
        return $app['twig']->render('game_results.html.twig', array("results" => $results));
    });
    return $app;

?>
