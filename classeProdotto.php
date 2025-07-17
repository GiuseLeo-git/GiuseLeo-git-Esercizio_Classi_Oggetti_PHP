<?php
class Prodotto {
    public $nome;
    public $prezzo;

    public function __construct($nome, $prezzo) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
}

$prodotto1 = new Prodotto("Laptop", 1200);

echo "Nome: " . $prodotto1->nome . "\n";
echo "Prezzo: " . $prodotto1->prezzo . "€\n";
?>