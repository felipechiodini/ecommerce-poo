<?php

    // ini_set("display_errors","on");
    // error_reporting(E_ALL);

    require __DIR__ . "/vendor/autoload.php";

    $router = new \Bramus\Router\Router();

    $router->mount("/api", function() use ($router) {

        $router->get("/login", function() {
            die('daw');
        });
    
        // will result in "/movies/id"
        $router->get("/(\d+)", function($id) {
            echo "movie id " . htmlentities($id);
        });
    
    });

    $router->set404("App/Controllers/Error@notFound");

    $router->run();
?>