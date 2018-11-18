<?php

/** @var PDO $konektor */
$zapytanie_wybierajace = $konektor->prepare("SELECT * FROM pojazdy WHERE id = ?");

$zapytanie_wybierajace->execute([$_GET['pojazd'] ?? 0]);
$pojazd = $zapytanie_wybierajace->fetch(PDO::FETCH_ASSOC);

if(!$pojazd)
    return $akcja = 'blad';