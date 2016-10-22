<?php
define('__APP_ROOT__', __DIR__);
require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Meu Curso Legal</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.min.css" integrity="sha256-F7gqKszCwmz8vhiti+AICU8dLfIEpxzPVihhhGfbbKg=" crossorigin="anonymous" />
    </head>
    <body>
        <nav class="nav has-shadow">
            <div class="container">

                <div class="nav-left">
                    <a class="nav-item is-brand" href="./">
                        <img src="http://fagoc.br/download/a/logo" alt="logo"/>
                    </a>
                </div>

                <div class="nav-right nav-menu">
                    <a class="nav-item" href="./6">Exercicio 6</a>
                    <a class="nav-item" href="./7">Exercicio 7</a>
                    <a class="nav-item" href="./8">Exercicio 8</a>
                </div>
            </div>
        </nav>
        <pre>
        <?php
        use Fagoc\Core\Router;
        $router = new Router();
        $router->get('/exercicio/:exercicio', function($exercicio) {
            var_dump($outra);
            $exercicio = __DIR__ . '/exercicio-' . $exercicio . '/' . 'file.php';
            if (file_exists($exercicio)) {
                require_once $exercicio;
            }
        });
        $router->run();
        ?>
    </pre>
    </body>
</html>
