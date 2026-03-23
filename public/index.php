<?php

// open session

use core\classes\Database;

session_start();

// Load all the classes with composer
require_once('../vendor/autoload.php');

// echo 'tewste';

// $bd = new Database();
// $clientes = $bd->select("SELECT * FROM clientes");
// //$clientes = $bd->statement("TRUNCATE clientes");
// echo '<pre>';
// print_r($clientes);

//carrega o sistema de rotas
require_once('../core/rotas.php');

// echo APP_NAME;