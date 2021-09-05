<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>DRs. do Hardware</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>ORÇAMENTO</h1><hr><br>

	<div class="conteudo">
		<?php

			$data     = $_POST["data"];
			$garantia = $_POST["garantia"];
			$servico  = $_POST["servico"];
			$aparelho = $_POST["aparelho"];
			$cleinte  = $_POST["cliente"];


			echo "<strong>Detalhes do orçamento</strong><br>";
			echo "Data $data Tempo de garantia após a entrega <strong>$garantia</strong> meses<br>";
			echo "Aparelho para manuntenção: <strong>$aparelho</strong><br>";

			echo "Serviço a ser executado: <strong>$servico</strong><br>";

				switch ($servico) {
					case 'Formatação':
						echo "O valor será de R$100,00 da mão de obra.";
						break;

						case 'Troca de peças':
						echo "O valor será de R$50,00 da mão de obra mais R$&nbsp &nbsp &nbsp &nbsp referente a peça escolhida.";						break;

						case 'Outros':
						echo "O valor será de R$50,00 da mão de obra, mais R$&nbsp &nbsp &nbsp &nbsp referente ao serviço escolhido.";
						break;
					
					default:
						echo "Infelimente não é poss´vel reralizar esse serviço no momento.";
						break;
				}

				echo "<br>Declaro está de acordo com os valores e informções acima descritos<br> <strong>$cleinte</strong>";

		?>
		<br>
		<p>Assinatura:_________________________________</p>
		<p>Data:___/___/___</p><br>
		<p>Ao assinar você concorda com todos os termos de serviço e garantia.</p><br>
		<form>
			<input type="button" value="Imprimir Orçamento" onclick="window.print()">
		</form>

		<a href="index.html"> << Voltar </a>
	
	</div>

	<div class="rodape">
			<h2>DRs. DO HARDWARE (ltda)</h2>
		</div>
		<footer>
			<h3>Todos os direitos reservados - Desenvolvido por DRs. do Hardware (ltda)</h3>
		</footer>

</body>
</html>