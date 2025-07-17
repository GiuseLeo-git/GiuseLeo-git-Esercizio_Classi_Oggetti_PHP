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


$studente = new Studente("Alessio", 5);


echo "Voto iniziale di {$studente->nome}: {$studente->voto}\n";
echo $studente->nome . " è promosso? " . ($studente->promosso() ? "Sì" : "No") . "\n";


$studente->voto = 7;

echo "Voto modificato di {$studente->nome}: {$studente->voto}\n";
echo $studente->nome . " è promosso? " . ($studente->promosso() ? "Sì" : "No") . "\n";
?>

