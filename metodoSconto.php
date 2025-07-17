<?php
class Prodotto {
    public $nome;
    public $prezzo;

    public function __construct($nome, $prezzo) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function applicaSconto($percentuale) {
        $sconto = ($this->prezzo * $percentuale) / 100;
        $this->prezzo -= $sconto;
    }
}

$prodotto1 = new Prodotto("Smartphone", 500);
$prodotto1->applicaSconto(20);

echo "Nome: " . $prodotto1->nome . "\n";
echo "Prezzo dopo sconto: " . $prodotto1->prezzo . "€\n";
?>
