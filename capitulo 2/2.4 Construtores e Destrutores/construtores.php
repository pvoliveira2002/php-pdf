<?php 
//carrega as classes

include_once './classes/Conta.class.php';
include_once './classes/Pessoa.class.php';

//criação do objeto carlos
$carlos = new Pessoa(10,"Carlos da Silva",1.85,25,"10/04/1976","Ensino Medio",650.00);

echo "Manipulando o objeto {$carlos->Nome}: <br>";

echo "{$carlos->Nome} é formado em {$carlos->Escolaridade}";
$carlos->formar('Tecnico em eletricidade');
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}<br>";

echo "{$carlos->Nome} possui {$carlos->idade} anos <br>";
$carlos->envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->idade} anos <br>";

//criação do objeto $contaCarlos
$contaCarlos = new Conta(6677,"CC.1234.56","10/07/02",$carlos,9876,867.86);

echo "<br>";
echo "Manipulando a conta de: {$contaCarlos->Titular->Nome}: <br>";

echo "O saldo atual é R$ {$contaCarlos->obterSaldo()} <br>";
$contaCarlos->Depositar(20);
echo "O saldo atual é R$ {$contaCarlos->obterSaldo()} <br>";
$contaCarlos->retirar(10);
echo "O saldo atual é R$ {$contaCarlos->obterSaldo()} <br>";




