<?php

//define uma constante com escopo global no projeto
define('__APP_ROOT__','C:\xampp\htdocs\aula-5.git');

function get($index) {
    $value = null;
    if (isset($_GET[$index])){
      $value = $_GET[$index];
    }
    return $value;
}

function post($index) {
    $value = null;
    if (isset($_POST[$index])){
      $value = $_POST[$index];
    }
    return $value;
}
