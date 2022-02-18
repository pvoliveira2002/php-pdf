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
} 
?>