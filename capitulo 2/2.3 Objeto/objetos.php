<?php 
	include_once './classes/Pessoa.class.php';

	include_once './classes/Conta.class.php';


	$carlos = new Pessoa;
	$carlos->Codigo = 10;
	$carlos->Nome = "Carlos da Silva";
	$carlos->Altura='1.85';
	$carlos->Idade = 25;
	$carlos->Nascimento = '10/04/1976';
	$carlos->Escolaridade = "Ensino Medio";

	echo 'Manipulando o objeto $carlos->Nome <br>';

	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";
	$carlos->formar('Tecnico em Eletricidade');
	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";



	echo "{$carlos->Nome} possui: {$carlos->Idade} anos <br>";
	$carlos->envelhecer(10);
	echo "{$carlos->Nome} possui: {$carlos->Idade} anos <br>";


//Criação do objeto $Conta Carlos

 	$contaCarlos = new Conta;
 	$contaCarlos->Agencia = 6677;
 	$contaCarlos->Codigo = "CC.1234.56";
 	$contaCarlos->DataDeCriacao='10/07';
 	$contaCarlos->Titular=$carlos;
 	$contaCarlos->Senha=9876;
 	$contaCarlos->Saldo=567.89;
 	$contaCarlos->Cancelada = false;
 	echo '<br>';
 	echo "Manipulando a conta de: {$contaCarlos->Titular->Nome} <br>";
 	echo "O saldo atual é R$ {$contaCarlos->obterSaldo()}<br>";
 	echo "Marcos retirou 300 reais {$contaCarlos->retirar(300)}<br>";
 	echo "O saldo atual é R$ {$contaCarlos->obterSaldo()}<br>";



 ?>