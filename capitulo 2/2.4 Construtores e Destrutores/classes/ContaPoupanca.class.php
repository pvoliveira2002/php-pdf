<?php 
	class ContaPoupanca extends Conta
	{
		var $Aniversario;

		/* método construtor(sobrescrito)
		      agora,tambem inicializa a variavel $aniversario
		  */

		function __construct($Agencia, $Codigo,$DatadeCriacao,$Titular,$Senha,$Saldo,$Aniversario)
		{
			// Chamada do método construtor da classe-pai.

			parent::__construct($Agencia, $Codigo,$DatadeCriacao,$Titular,$Senha,$Saldo);
			$this->Aniversario = $Aniversario;
		}
		/* método Retirar (sobrescrito)
			verifica se ha saldo para retirar tal $quantia 
		*/

		function retirar($quantia)
		{
			if($this->Saldo >=$quantia){
				// Executa Método da classe-pai
				parent::Retirar($quantia);
			}
			else
			{
				echo "Retirada não permitida... <br>"
				return false;
			}

			// retirada permitida 
			return true;
		}
	}

 ?>