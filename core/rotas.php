
<?php
// <!-- coleção de rotas -->

$rotas = [
    'inicio'         => 'main@index',
    'loja'           => 'main@loja',
    'carrinho'       => 'main@carrinho',
    'logout'         => 'main@logout',
   

 ];

// define ação por defeito
$acao = 'inicio';

//verifica se existe acao na query string
if(isset($_GET['a'])){

    // verifica se a ação existe nas rotas
    if(!key_exists($_GET['a'], $rotas)){
        $acao = 'inicio';
    }else{
        $acao = $_GET['a'];
    }

}

// trata a definição da rota

$partes = explode('@', $rotas[$acao]);

//var_dump($partes);
// echo '<br>';
// var_dump($rotas);
// echo '<br>'. $rotas['loja'];

// ucfirst 1ª letra maiuscula
$controlador = 'core\\controladores\\'.ucfirst($partes[0]); 
$metodo      = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();

//echo "$controlador - $metodo";