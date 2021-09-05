<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<meta charset="utf-8">
	<title>TESTE DE PHP</title>

</head>
<body>

	<?php

		$nome = "Leandro";
		$idade ="29";


		echo "Olá Sr(a). $nome atualemnte você esta com $idade anos!";


	?>
	<br>
	<?php

		$quantidade = "2";
		$preco ="1000";

		$resultado =$quantidade*$preco;

		echo "<h1>Lista de Compras</h1><hr>";

		echo "O valor total de suas compras é de R$$resultado, deseja finalizar o pedido agora?";
	?>
	<br><br>
	<form method="get" action="recebe.php">

	 Quant.:&nbsp <input type="number" name="quant"><br><br>
	 Preço:&nbsp <input type="number" name="preco"><br><br>
	 <input type="submit" name="calcular">
	 
	 
		
	</form>
	
</body>
</html>