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
		.carrinho-item{
			max-width: 1200px;
			margin: 10px auto;
			padding-bottom: 10px;

			border-bottom: 2px dotted #ccc;
		}
		.carrinho-item p{
			font-size: 19px;
			color: #black;
		}
	</style>
</head> 
<body>
	<h2 class="title">Carrinho c/ PHP</h2>
	<div class="carrinho-container">
<?php
$items = array(['nome'=>	'Curso 1','imagem'=>'item1.png','preco'=>'200'],
	['nome'=>	'Curso 2','imagem'=>'item2.jpg','preco'=>'100'],
	['nome'=>	'Curso 3','imagem'=>'item3.jpg','preco'=>'400']);

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
       if(isset($_SESSION['carrinho'][$idproduto])){
     		$_SESSION['carrinho'][$idproduto]['quantidade']++;
     		}else{
          $_SESSION['carrinho'][$idproduto] = array('quantidade'=>1,'nome'=>$items[$idproduto]['nome'],'preco'=>$items[$idproduto]['preco']);
     		}
     		echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
     	} else {
     		die('Você não pode adicionar um produto que não existe.');
     	}


    }
?>
<h2 class="title">Carrinho:<h2>
	<?php include('carrinho.php'); ?>
</body>
</html>