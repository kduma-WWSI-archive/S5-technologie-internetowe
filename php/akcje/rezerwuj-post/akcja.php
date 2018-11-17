<?php

$zapytanie_wybierajace = $konektor->prepare("SELECT * FROM pojazdy WHERE id = ?");

$zapytanie_wybierajace->execute([$_GET['pojazd'] ?? 0]);
$pojazd = $zapytanie_wybierajace->fetch(PDO::FETCH_ASSOC);

if(!$pojazd)
    return $akcja = 'blad';

$imie = $_POST['imie'] ?? '';
$nazwisko = $_POST['nazwisko'] ?? '';
$telefon = $_POST['telefon'] ?? '';
try {
    $od = new DateTime($_POST['od'] ?? '');
    $do = new DateTime($_POST['do'] ?? '');
} catch (Exception $exception) {
    $blad = 'Niepoprawny format daty';
    return $akcja = 'rezerwuj';
}


if($imie == '' || $nazwisko == null || $telefon == null) {
    $blad = 'Wszystkie pola są wymagane!';
    return $akcja = 'rezerwuj';
}

$zapytanie_wybierajace_w_zakresie = $konektor->prepare("SELECT * FROM wypozyczenia WHERE pojazd_id = ? AND do >= ? AND od <= ?");
$zapytanie_wybierajace_w_zakresie->execute([$pojazd['id'], $od->format('Y-m-d'), $do->format('Y-m-d')]);

if($zapytanie_wybierajace_w_zakresie->rowCount()) {
    $blad = 'Ten pojazd jest już zarezerwowany w tym okresie!';
    return $akcja = 'rezerwuj';
}

$zapytanie_wstawiajace = $konektor->prepare("INSERT INTO wypozyczenia (pojazd_id, imie, nazwisko, telefon, od, do) VALUES (?, ?, ?, ?, ?, ?)");
$zapytanie_wstawiajace->execute([$pojazd['id'], $imie, $nazwisko, $telefon, $od->format('Y-m-d'), $do->format('Y-m-d')]);