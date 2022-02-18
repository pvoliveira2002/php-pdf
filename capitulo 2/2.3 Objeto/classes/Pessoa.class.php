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
			if($centimetros>0){
				$this->Altura += $centimetros;
			}
		}

		function formar($titulacao){
			$this->Escolaridade = $titulacao;
		}
		
		function envelhecer($anos)
		{
			if($anos>0){
				$this->Idade+=$anos;	
			}	
		}
	}

	

 ?>