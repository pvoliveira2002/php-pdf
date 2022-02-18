<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>2.1.2</title>
</head>
<body>
	<?php 
		include_once './classes/Produto.class.php';

		$produto1 = new Produto;
		$produto2 = new Produto;

		$produto1->Codigo = 4001;
		$produto1->Descricao = 'CD - The best of the Queen';

		$produto2->Codigo = 2000;
		$produto2->Descricao = 'CD - The best of Michael Jackson';

		$produto1->imprimirEtiqueta();
		$produto2->imprimirEtiqueta();
	 ?>
</body>
</html>
