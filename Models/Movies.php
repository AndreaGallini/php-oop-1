<?php
class Movie
{
    public $titolo;
    public $descrizione;
    public $uscita;
    public $genere;
    public $etaFilm;
    public static $cinema = 'BoolFleex';




    function __construct($_titolo, $_descrizione, $_uscita, $_genere = ['null'])
    {
        $this->genere = $_genere;
        $this->uscita = $_uscita;
        $this->titolo = $_titolo;
        $this->descrizione = $_descrizione;




    }
    public static function Mycinema()
    {
        return 'Prima Visione su ' . self::$cinema;
    }
}


?>