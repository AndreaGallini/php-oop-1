<?php
class Movie
{
    public $titolo;
    public $descrizione;
    public $uscita;
    public $genere;



    function __construct($_titolo, $_descrizione, $_uscita, $_genere)
    {
        $this->genere = $_genere;
        $this->uscita = $_uscita;
        $this->titolo = $_titolo;
        $this->descrizione = $_descrizione;


    }
}


?>