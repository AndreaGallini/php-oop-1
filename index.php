<?php
include __DIR__ . '/Models/Movies.php';
$avatar = new Movie('Avatar', 'un bel film', '2022', ['fantasy', 'triller']);

echo 'Titolo :' . ' ' . $avatar->titolo;
echo ' <br> Descrizione del film :' . ' ' . $avatar->descrizione;
echo '<br>Anno di Pubblicazione :' . ' ' . $avatar->uscita;
echo '<br>Genere :' . ' ' . implode(' , ', $avatar->genere);
echo '<br>' . Movie::Mycinema();
echo '<br><br><br>';



$up = new Movie('UP', 'un bel film', '2021', ['commedia', 'comico']);

echo ' <br>Titolo :' . ' ' . $up->titolo;
echo ' <br> Descrizione del film :' . ' ' . $up->descrizione;
echo '<br>Anno di Pubblicazione :' . ' ' . $up->uscita;
echo '<br>Genere :' . ' ' . implode(' , ', $up->genere);
echo '<br>' . Movie::Mycinema();

?>