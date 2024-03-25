<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// phpinfo();

//Arrays
$a = array("cliente1" => 1000, "cliente2" => 2000, "cliente3" => 3000);
print_r( $a);
echo "</br>";

$a1 = array("cliente1" => array("nome" => "Franciel", "endereco" => "Rua A"), "cliente2" => array("nome" => "Pedro", "endereco" => "Rua B"), "cliente3" => array("nome" => "Maria", "endereco" => "Rua C"));
print_r( $a1);
echo "</br>";

print_r( $a1["cliente1"]["nome"]);
echo "</br>";

print_r( $a1['cliente1']['endereco']);
echo "</br>";


//Classe
class Animal{
    public $nome;
    public $idade;

    // Construtor
    // public function __construct($nome, $idade){
    //     $this->nome = $nome;
    //     $this->idade = $idade;
    // }

    public function __construct(){
        echo "</br>";
        echo "O animal foi criado";
    }
    

    // Destrutor
    public function __destruct(){
        echo "</br>";
        echo "O animal {$this->nome} foi destruído";
    }

    public function comer(){
        echo "O animal está comendo";
        echo "</br>";
    }
}

//Função
$animal = new Animal();
$animal->nome = "Cachorro";
$animal->idade = 5;
// print_r( $animal);
echo "</br>";
print_r("Nome: " .$animal->nome);
echo "</br>";
print_r("Idade: " .$animal->idade);
echo "</br>";

$animal = new Animal();
$animal->nome = "Cavalo";
$animal->idade = 10;
// print_r( $animal);
echo "</br>";
print_r("Nome: " .$animal->nome);
echo "</br>";
print_r("Idade: " .$animal->idade);
echo "</br>";

$animal->comer();
echo "</br>";

function comer(){
    echo "O animal está comendo";
}


// Código 
echo "<h1>teste</h1>";
$nome = "Franciel1";
if(isset($nome) && $nome == "Franciel"){
    echo "O nome é Franciel";
}else{
    echo "O nome não é Franciel";
}

//Constates
define("NOME", "Franciel");
echo "</br>";
echo "Constante NOME: ".NOME;
echo "</br>";

const PI = 3.14159;
echo "</br>";
echo "Constante π: ".PI;
echo "</br>";

//Listas
// Criando uma lista de unicórnios
$unicorns = array("Sparkles", "Rainbow Dash", "Twilight Sparkle", "Rarity", "Fluttershy", "Applejack", "Pinkie Pie", "Sunset Shimmer", "Trixie Lulamoon", "Celestia");

// Imprimindo a lista de unicórnios 
echo "<ul>";
for($i = 0; $i < count($unicorns); $i++){
    echo "<li>" . $unicorns[$i] . "</li>";
}
echo "</ul>";


//Operadores lógicos
var_dump(true && true);
echo "</br>";
var_dump(true && false);
echo "</br>";
var_dump(false && true);
echo "</br>";
var_dump(false && false);
echo "</br>";

var_dump(true || true);
echo "</br>";
var_dump(true || false);
echo "</br>";
var_dump(false || true);
echo "</br>";
var_dump(false || false);

var_dump(!true);
echo "</br>";
var_dump(!false);
echo "</br>";

var_dump(1 == 1);
echo "</br>";
var_dump(1 == 2);
echo "</br>";
var_dump(1 != 1);
echo "</br>";
var_dump(1 != 2);
echo "</br>";

var_dump(1 < 2);
echo "</br>";
var_dump(1 > 2);
echo "</br>";
var_dump(1 <= 2);
echo "</br>";
var_dump(1 >= 2);
echo "</br>";

var_dump(1 + 1);
echo "</br>";
var_dump(1 - 1);
echo "</br>";
var_dump(1 * 1);
echo "</br>";
var_dump(1 / 1);
echo "</br>";
var_dump(1 % 1);
echo "</br>";
var_dump(1 ** 1);
echo "</br>";

var_dump(1 << 1);
echo "</br>";
var_dump(1 >> 1);
echo "</br>";
var_dump(~1);
echo "</br>";
var_dump(1 & 1);
echo "</br>";
var_dump(1 | 1);
echo "</br>";
var_dump(1 ^ 1);
echo "</br>";


//Laços de repetição
for($i = 0; $i < 10; $i++){
    echo "O número é " . $i . "</br>";
}

$i = 0;
while($i < 10){
    echo "O número é " . $i . "</br>";
    $i++;
}

$i = 0;
do{
    echo "O número é " . $i . "</br>";
    $i++;
}while($i < 10);

$i = 0;
foreach($unicorns as $unicorn){
    echo "O unicórnio é " . $unicorn . "</br>";
}

$i = 0;
foreach($a1 as $key => $value){
    echo "A chave é " . $key . " e o valor é " . $value . "</br>";
}

$cont = 0; 

//continue e break
for(;; $cont++){
    if ($cont %2 == 0){
        continue;
    }
        
    if ($cont >=10){
        break;
    }        
    echo "O número é " . $cont . "</br>";   
}

//estrutura de decisão
if(true){
    echo "É verdade";
    echo "</br>";
}else{
    echo "Não é verdade";
    echo "</br>";
}

if(false){
    echo "É verdade";
    echo "</br>";
}else{
    echo "Não é verdade";
    echo "</br>";
}

if(1 == 1){
    echo "É verdade";
    echo "</br>";
}else{
    echo "Não é verdade";
    echo "</br>";
}

if(1 != 2){
    echo "É verdade";
    echo "</br>";
}else{
    echo "Não é verdade";
    echo "</br>";
}

$numero = 1;
switch($numero){
    case 1:
        echo "É o número 1";
        echo "</br>";
        break;
    case 2:
        echo "É o número 2";
        echo "</br>";
        break;
default:
    echo "Não é nenhum dos números acima";
    echo "</br>";
} 

//funções
function ola(){
    echo "Olá, mundo!";
    echo "</br>";
}

ola();

function ola2($nome){
    echo "Olá, " . $nome . "!";
    echo "</br>";
}

ola2("Franciel");

function ola3($nome, $idade){
    echo "Olá, " . $nome . "! Você tem " . $idade . " anos.";
    echo "</br>";
}

ola3("Franciel", 41);

function ola4($nome, $idade, $profissao){
    echo "Olá, " . $nome . "! Você tem " . $idade . " anos e é " . $profissao . ".";
    echo "</br>";
}

ola4("Franciel", 41, "programador");

//funções anônimas
$anonima = function(){
    echo "Olá, mundo!";
    echo "</br>";
};
$anonima();

$anonima2 = function($nome){
    echo "Olá " . $nome . ", da função anônima!";
    echo "</br>";
};
$anonima2("Franciel");
    echo "</br>";

?>

<?php
class Pessoa{
    public $nome = "";
    public $idade = 0;
    public $sexo = "Masculino";

    function fazerAniversario($idade){
       return $this->$idade = $idade + 1;
    }
}

class Aluno extends Pessoa{
    public $matricula = 000;
    public $curso = "Informática";

    function estudar(){
        echo "O aluno está estudando";
        echo "</br>";
    }
}

$p1 = new Pessoa();
$p1->nome = "Franciel";
$p1->sexo = "Masculino";
$p1->idade = 41;

print_r($p1);

echo "</br>";

$a1 = new Aluno();

$a1->nome = "Franciel";
$a1->idade = 41;
$a1->sexo = "Masculino";
$a1->matricula = 123456;

// print_r($a1);

echo "</br>";

//realiza aniversãrio do aluno
$a1->idade = $a1->fazerAniversario($a1->idade);

print_r($a1);

echo "</br>";
?>

<?php
class Pessoa1{
    private $nome;
    private $idade;
    private $sexo;

    // public function __construct($nome, $idade, $sexo){
    //     $this->nome = $nome;
    //     $this->idade = $idade;
    //     $this->sexo = $sexo;
    // }

    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

}


$pessoa1 = new Pessoa1();

$pessoa1->setNome("Franciel");
$pessoa1->setIdade(41);
$pessoa1->setSexo("Masculino");

print_r($pessoa1);
echo "</br>";
echo "Nome: ". $pessoa1->getNome();
echo "</br>";
echo "Idade: ". $pessoa1->getIdade();
echo "</br>";
echo "Sexo: ". $pessoa1->getSexo();
echo "</br>";
?>


// Display the table
<form name="form1" method='post' action="index2.php">
  Nome: <input type='text' name='nome'><br>
  E-mail: <input type='email' name='email'><br>
  Senha: <input type='password' name='senha'><br>
  <input type='submit' value='Submit'>
</form>

<!-- <a href="index2.php">Inserir e recuperar dados no MySQL</a> -->

</body>
</html>