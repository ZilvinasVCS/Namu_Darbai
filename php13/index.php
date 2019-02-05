<?php 
    class Names {
        public $vardas;
        public $pavarde;
        
        public function labas() {
            return 'LaaaaBaaaaSSSSS!!! <br>' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
        }
    }

    $zmogus1 = new Names();
    $zmogus2 = new Names();

    $zmogus1 -> vardas = "Alex";
    $zmogus1 -> pavarde = "Alexandrov";

    $zmogus2 -> vardas = "Ruta";
    $zmogus2 -> pavarde = "Rutiene";

    echo $zmogus1 -> labas();
    echo $zmogus2 -> labas();
?>
