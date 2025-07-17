<?php
class Contatore {
    private $numero;

    public function __construct($numeroIniziale = 0) {
        $this->numero = $numeroIniziale;
    }


    public function incrementa() {
        $this->numero++;
    }


    public function valore() {
        return $this->numero;
    }
}

$contatore = new Contatore(5);

$contatore->incrementa();
$contatore->incrementa();
$contatore->incrementa();

echo "Valore del contatore dopo 3 incrementi: " . $contatore->valore() . "\n";
?>
