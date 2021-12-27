<?php
   session_start();
  foreach($_SESSION['carrinho']as $key => $value){
          //nome do produto
  	//quantidade
  	//preço
  	echo '<div class="carrinho-item">';
  	echo '<p>Nome: '.$value['nome'].'| quantidade: '.$value['quantidade'].'| Preço'.($value['quantidade']*$value['preco']).'</p>';
  	echo '</div>';
  }
  
?>