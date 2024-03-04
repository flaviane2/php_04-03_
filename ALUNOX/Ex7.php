<?php
// Definição da classe Pessoa
class Pessoa {
    public $nome;
    public $idade;
    
    public function apresentar() {
        return "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Instanciando um objeto da classe Pessoa
$pessoa = new Pessoa();
$pessoa->nome = "Flaviane";
$pessoa->idade = 18;

$pessoa2 = new Pessoa();
$pessoa2->nome = "Evellyn";
$pessoa2->idade = 18;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Objeto com HTML</title>
</head>
<body>
    <h1>Apresentação da Pessoa</h1>
    <p><?php echo $pessoa->apresentar(); ?></p>
    <p><?php echo $pessoa2->apresentar(); ?></p>
</body>
</html>
