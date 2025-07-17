<?php
class Prodotto {
    public $nome;
    public $prezzo;

    public function __construct($nome, $prezzo) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }
}

$prodotto1 = new Prodotto("Laptop", 1200.00);
$prodotto2 = new Prodotto("Smartphone", 800.00);

echo "Nome: " . $prodotto1->nome . ", Prezzo: " . $prodotto1->prezzo . "€\n";
echo "Nome: " . $prodotto2->nome . ", Prezzo: " . $prodotto2->prezzo . "€\n";
?>