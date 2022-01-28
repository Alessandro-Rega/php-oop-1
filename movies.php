<?php
    class Movies{
        public $titolo;
        public $anno;
        public $tipologia;
        public $descrizione;

        function __construct($_titolo, $_anno, $_tipologia)
        {
            $this->titolo = $_titolo;
            $this->anno = $_anno;
            $this->tipologia = $_tipologia;        
        }

        public function getDescrizione(){
            return $this->descrizione;
        }
    }
?>