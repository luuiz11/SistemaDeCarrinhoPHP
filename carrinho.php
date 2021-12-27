<?php
  foreach($_SESSION['carrinho']as $key => $value){
          //nome do produto
  	//quantidade
  	//preço
  	echo '<div class="carrinho-item">';
  	echo '<p>Nome: '.$value['nome'].'| quantidade: '.$value['quantidade'].'| Preço'.($value['quantidade']*$value['preco']).'</p>';
  	echo '</div>';
  }
  
?>
<a href="?remover=<?php echo $key ?>">Remover do carrinho</a>
<?php 
if(isset($_GET['remover']))
    {
      $idProduto = (int) $_GET['remover'];
        if(isset($_SESSION['carrinho']))
        {
            unset($_SESSION['carrinho'][$idProduto]);
        }
    }
    ?>
