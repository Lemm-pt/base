<?php

namespace core\classes;

use Exception;

class Store{

// ============================================
     //________________________________________________________________//
    ////////////////////////////////////////////////////////////////////
    // mostra as views, recebe a coleção das views e as variáveis através dos dados
    public static function Layout($estruturas, $dados = null){

        //verifica se as estruturas é um array
        if(!is_array($estruturas)){
            // apenas na fase de desenvolvimento
            throw new Exception("Coleção de estruturas inválida");
        }//else{

        // }

        // variáveis
        // passar para o interior dos includes variáveis que são defenidas aqui
        if(!empty($dados) && is_array($dados)){
            //vem o 'titulo' => 'hsjsjsjsjjs', passa a ser a variável $titulo
            extract($dados); 

        }

         // apresentar as views{
         foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
         }

    }


  // ============================================
  public static function clienteLogado(){

    //verifica se existe um cliente com sessao
      return isset($_SESSION['cliente']);
  }


}