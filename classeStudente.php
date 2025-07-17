<?php
class Studente {
    public $nome;
    public $voto;

    public function __construct($nome, $voto) {
        $this->nome = $nome;
        $this->voto = $voto;
    }

    public function promosso() {
    return $this->voto >= 6;
    }
}

$studente1 = new Studente("Giuseppe", 7.4);
$studente2 = new Studente("Luca", 5.5);

echo $studente1->nome . " è promosso? " . ($studente1->promosso() ? "Sì" : "No") . "\n";
echo $studente2->nome . " è promosso? " . ($studente2->promosso() ? "Sì" : "No") . "\n";

?>
