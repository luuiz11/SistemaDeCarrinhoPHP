<?php

session_start();
?>
<!DOCTYPE htmL>
<<!DOCTYPE html>
<html>
<head>
	
	<title>Carrinho de compras PHP</title>
	<style type="text/css">
		*{margin: 0;padding: 0;box-sizing :border-box;}

		h2.title{
			background-color: #069;
			width: 100%;
			padding: 20px;
			text-align: center;
			color: white;

		}
		.carrinho-container{
			display: flex;
			margin-top: 10px;

		}

		.produto{
			width: 33.3%;
			padding: 0 30px;
		}
		.produto img{
			max-width: 100%;
		}
		.produto a{
			display: block;
			width: 100%;
			padding: 10px;
			color: white;
			background-color: #5fb382;
			text-align: center;
			text-decoration: none;

		}
	</style>
</head> 
<body>
	<h2 class="title">Carrinho c/ PHP</h2>
	<div class="carrinho-container">
<?php
$items = array(['imagem'=>'item1.png','preco'=>'200'],
	['imagem'=>'item2.jpg','preco'=>'100'],
	['imagem'=>'item3.jpg','preco'=>'400']);

foreach ($items as $key => $value) {
	?>
	<div class="produto">
		<img src="<?php echo $value['imagem']?>" />

		<a href="?adicionar=<?php echo $key ?>">Adicionar ao carrinho!</a>

	</div><!--produto-->
	 
<?php
  }
?>
   </div><!--carrinho-container-->
   <?php 
     if(isset($_GET['adicionar'])){
     	//vamos aicionar ao carrinho.
     	$idproduto=(int)$_GET['adicionar'];
     	if(isset($items[$idproduto])){
     		echo 'o produto existe';
     	}else {
     		die'Você não pode adicionar um produto que não existe.';
     	}
     	
     }
   ?>
</body>
</html>