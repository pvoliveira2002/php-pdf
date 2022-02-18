<?php 
	class Pessoa{
		var $Codigo;
		var $Nome;
		var $Altura;
		var $Idade;
		var $Nascimento;
		var $Escolaridade;
		var $Salario;

		function crescer($centimetros)
		{
			if($centimetros>0)
			{
				$this->Altura += $centimetros;
			}
		}

		function formar($titulacao)
		{
			$this->Escolaridade = $titulacao;
		}
		
		function envelhecer($anos)
		{
			if($anos>0)
			{
				$this->Idade+=$anos;	
			}	
		}
	

	//Capitulo 2.4,


		//metodo construtor 

		//Inicializa PROPRIEDADES


	function __construct($Codigo,$Nome,$altura,$Idade,$Nascimento,$Escolaridade,$Salario)
	{
		$this->Codigo->$Codigo;
		$this->Nome->$Nome;
		$this->Altura->$Altura;
		$this->Idade->$Idade;
		$this->Nascimento->$Nascimento;
		$this->Escolaridade->$Escolaridade;
		$this->Salario->$Salario;

	}
		//METODO DESTRUTOR 

		//Finaliza Objeto

	function __destruct()
	{
		echo "Objeto {$this->Nome} Finalizado... <br>";
 	}

 }

 ?>