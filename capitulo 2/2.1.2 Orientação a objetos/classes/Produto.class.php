<?php 
    
    class Produto{
    	var $Codigo;
    	var $Descricao;
    	var $Preco;
    	var $Quantidade;
    
  	
  	function imprimirEtiqueta()
  	{
  		print 'Código: ' . $this->Codigo . "<br>";
  		print 'Descrição: ' . $this->Descricao . "<br>";
  	}
 
 }
 ?>
