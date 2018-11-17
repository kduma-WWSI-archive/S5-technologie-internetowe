<?php
$rodzaj = $_GET['rodzaj'] ?? null;
$od = $_GET['od'] ?? 0;
$do = isset($_GET['do']) && $_GET['do'] ? $_GET['do'] : 10000;

if($rodzaj) {
    $zapytanie_wybierajace = $konektor->prepare("SELECT id, rodzaj, numer_pojazdu, cena, model, producent, rocznik FROM pojazdy WHERE rodzaj = ? AND cena BETWEEN ? AND ? ORDER BY cena DESC");
    $zapytanie_wybierajace->execute([$rodzaj, $od, $do]);
} else {
    $zapytanie_wybierajace = $konektor->prepare("SELECT id, rodzaj, numer_pojazdu, cena, model, producent, rocznik FROM pojazdy WHERE cena BETWEEN ? AND ? ORDER BY cena DESC");
    $zapytanie_wybierajace->execute([$od, $do]);
}

$lista_pojazdow = $zapytanie_wybierajace->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: text/json; charset=utf-8");

echo json_encode($lista_pojazdow, JSON_PRETTY_PRINT);