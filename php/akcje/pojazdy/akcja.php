<?php
$pojazd = $_GET['pojazd'] ?? 'kamper';


$zapytanie_wybierajace = $konektor->prepare("SELECT * FROM pojazdy WHERE rodzaj = ?");

$zapytanie_wybierajace->execute([$pojazd]);
$lista_pojazdow = $zapytanie_wybierajace->fetchAll(PDO::FETCH_ASSOC);


