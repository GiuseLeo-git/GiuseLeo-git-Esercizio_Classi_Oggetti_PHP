<?php
class Libro {
    public $titolo;
    public $autore;
    public $prezzo;

    public function __construct($titolo, $autore, $prezzo) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->prezzo = $prezzo;
    }


    public function scheda() {
        return "Scheda Libro:\n" .
               "  Titolo: " . $this->titolo . "\n" .
               "  Autore: " . $this->autore . "\n" .
               "  Prezzo: €" . number_format($this->prezzo, 2, ',', '.') . "\n";
    }
}


$libro1 = new Libro("Il Signore degli Anelli", "J.R.R. Tolkien", 25.50);
$libro2 = new Libro("Cent'anni di solitudine", "Gabriel García Márquez", 18.99);


echo $libro1->scheda();
echo "\n";
echo $libro2->scheda();
?>
