
<?php    
    use core\classes\Store;

    $_SESSION['cliente'] = 'Luciano';
?>

<div class="container-fluid navegacao">
    <div class="row">
        <div class="col-6 p-3"><a href="?a=inicio"><?= APP_NAME ?></a></div>

        <div class="col-6 p-3 text-end">
           <a href="?a=inicio">Inicio</a>
           <a href="?a=loja">Loja</a>

           <!--verifica se existe cliente na sessão -->
           <?php if(Store::clienteLogado()):  ?>
               
              <a href="?a=logout">Logout</a>
              <a href="?a=logout"><?= isset($_SESSION['cliente']) ? $_SESSION['cliente'] : 'Login' ?></a>

           <?php else: ?>

              <a href="?a=criar_conta">Criar conta</a>
              <a href="?a=login">Login</a>
              <a href="?a=carrinho"><i class="fas fa-shopping-cart"> </i></a>
              <span class="badge bg-warning">10</span>

           <?php  endif;?>
        </div>
    </div>
</div>