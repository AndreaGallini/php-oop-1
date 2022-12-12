<?php
include __DIR__ . '/Models/Movies.php';
$avatar = new Movie('Avatar', 'un bel film', '2022', 'fantasy');

echo 'Titolo :' . ' ' . $avatar->titolo;
echo ' <br> Descrizione del film :' . ' ' . $avatar->descrizione;
echo '<br>Anno di Pubblicazione :' . ' ' . $avatar->uscita;
echo '<br>Genere :' . ' ' . $avatar->genere;
?>