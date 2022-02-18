<?php 

class Conta{
	var $Agencia;
	var $Codigo;
	var $DatadeCriacao;
	var $Titular;
	var $Senha;
	var $Saldo;
	var $Cancelada;

	function retirar($quantia)
	{
		if($quantia>0)
		{
			$this->Saldo -= $quantia;
		}
	}

	function depositar($quantia)
	{
		if($quantia>0)
		{
			$this->Saldo += $quantia;
		}
	}

	function ObterSaldo()
	{
		return $this->Saldo;
	}

	


	function __construct($Agencia,$Codigo,$DatadeCriacao,$Titular,$Senha,$Saldo)
	{
		$this->Agencia->$Agencia;
		$this->Codigo->$Codigo;
		$this->DatadeCriacao->$DatadeCriacao;
		$this->Titular->$Titular;
		$this->Senha->$Senha;
		$this->Saldo->$Saldo;

		//chamada a outro metodo dsa classe

		$this->depositar($Saldo);
		$this->$Cancelada = false;
	}

	function __destruct()
	{
		echo "Objeto Conta {$this->Codigo} de {$this->$Titular->$Nome} finalizada...<br>";
	}
}
?>
