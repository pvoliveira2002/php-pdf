<?php 

class ContaCorrente extends Conta
{
	var Limite;

	/*Método construtor(sobrescrito)agora tambem
	inicializa a variavel $limite
	*/

	function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo,$Limite)
	{
		//chamada do método construtor da classe-pai
		parent::__construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo);
		$this->Limite = $Limite;
	}
}

	//Metodo Retirar (Sobrescrito)
	//verifica se a quantia retirada esta dentro do limite
	
	function Retirar($quantia)
	{
		$cpmf=0.05;

		if({$this->Saldo + $this->Limite} >= $quantia)
		{
			parent::Retirar($quantia);

			parent::Retirar($quantia * $cpmf)
		}
	}
 ?>}
