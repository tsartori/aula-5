<?php

define('__APP_ROOT__', __DIR__);

require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.min.css"
        integrity="sha256-F7gqKszCwmz8vhiti+AICU8dLfIEpxzPVihhhGfbbKg=" crossorigin="anonymous" />
    </head>
    <body>
        <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left ">
                    <a class="nav-item" href="index.php">
                        <img src="http://fagoc.br/download/a/logo" alt="logo" />
                    </a>
                </div>



                <div class="nav-right nav-menu">
                    <a class="nav-item" href="index.php?e=6">exercicio 6</a>
                    <a class="nav-item" href="index.php?e=7">exercicio 7</a>
                    <a class="nav-item" href="index.php?e=8">exercicio 8</a>
                </div>
            </div>
        </nav>
        <?php
        use Fagoc\core\Router;

        $router = new Router();
        $router->get('/exercicio/6', function(){
          $exercicio = __DIR__ . '/exercicio-6/' . 'file.php';
          if (file_exists($exercicio)) {
            require_once $exercicio;
          }
        });

        ?>
    </body>
</html>
