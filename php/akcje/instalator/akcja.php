<?php

$powodzenie = !! ($_GET['sukces'] ?? false);

if($metoda != 'POST') {

} else {

    if($konfiguracja == []) {
        $konfiguracja = [
            'host'     => $_POST['host'],
            'dbname'   => $_POST['dbname'],
            'login'    => $_POST['login'],
            'password' => $_POST['password'],
        ];

        $konektor = require __DIR__.'/../../../php/db.php';

        file_put_contents(__DIR__.'/../../../konfiguracja.php', '<?php return '.var_export($konfiguracja, true).';');
    }

$SQL = <<<END_SQL

DROP TABLE IF EXISTS wypozyczenia;
DROP TABLE IF EXISTS pojazdy;

CREATE TABLE pojazdy
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    klasa ENUM('Basic', 'Pro', 'Premium'),
    rodzaj ENUM('Limuzyna', 'Kamper') NOT NULL,
    numer_pojazdu INT NOT NULL,
    cena DECIMAL(10,2) NOT NULL,
    model VARCHAR(255) NOT NULL,
    producent VARCHAR(255) NOT NULL,
    rocznik INT NOT NULL,
    zdjecie VARCHAR(255) NOT NULL,
    dane TEXT
);

CREATE TABLE wypozyczenia
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pojazd_id INT NOT NULL,
    imie VARCHAR(15) NOT NULL,
    nazwisko VARCHAR(30) NOT NULL,
    telefon VARCHAR(9) NOT NULL,
    od DATE NOT NULL,
    do DATE NOT NULL,
    
    CONSTRAINT pojazd_wypozyczenie FOREIGN KEY (pojazd_id) REFERENCES pojazdy (id)
);

END_SQL;

    $konektor->exec($SQL);

    $przykladowe_pojazdy = [
        ['Limuzyna', 'Basic', 12, 1500, '120\'', 'Lincoln', 2016, 'lincoln120.jpg', serialize(['Kierowca w cenie' => 'TAK', '10 osobowy', 'długość: 9 metrów', '1 bar, skórzana tapicerka', 'Kaucja zwrotna' => '5000 PLN'])],
        ['Limuzyna', 'Pro', 4, 1800, 'Retro', 'Excalibur', 1969, 'excalibur.jpg', serialize(['Kierowca w cenie' => 'TAK', '6 osobowy', 'długość: 8 metrów', '1 bar, skórzana tapicerka', 'Kaucja zwrotna' => '5000 PLN'])],
        ['Limuzyna', 'Premium', 5, 3000, 'H2', 'Hammer', 2018, 'HammerH2.jpg', serialize(['Kierowca w cenie' => 'TAK', '20 osobowy', 'długość: 13 metrów', '3 bary, stroboskopy', 'Kaucja zwrotna' => '5000 PLN'])],
        ['Limuzyna', null, 1, 1800, 'Replika', 'Rolls Royce', 2015, 'RR3.jpg', serialize(['Kierowca w cenie' => 'TAK', '10 osobowy', 'długość: 9 metrów', '1 bar, skórzana tapicerka', 'Kaucja zwrotna' => '5000 PLN'])],
        ['Limuzyna', null, 3, 2000, '300C', 'Chrysler', 2017, 'chrysler300Ca.jpg', serialize(['Kierowca w cenie' => 'TAK', '10 osobowy', 'długość: 8.7 metrów', '1 bar, skórzana tapicerka', 'Kaucja zwrotna' => '5000 PLN'])],
        ['Limuzyna', null, 2, 1300, '70', 'Lincoln', 2010, 'lincoln70.jpg', serialize(['Kierowca w cenie' => 'NIE', '6 osobowy', 'długość: 8 metrów', '1 bar, skórzana tapicerka', 'Kaucja zwrotna' => '5000 PLN'])],

        ['Kamper', 'Basic', 3, 450, 'CARA COMPACT 600 MEG', 'KNAUS WEINSBERG PEPPER', 2017, 'camper3.jpg', serialize(['"Całoroczny"  + bagażnik rowerowy', 'Klimatyzacja postojowa' => 'NIE', 'Kat. "B",   DMC 3500 kg', '3/4 osobowy', 'Manualna 6 biegowa skrzynia', '674/220/276 cm dł./szer./wys. zewn.', 'Kaucja zwrotna' => '5000 PLN', 'Opłata serwisowa' => '350 PLN'])],
        ['Kamper', 'Pro', 2, 500, 'Globe-Traveller', 'Active ZS / PEUGEOT 2, 0 / 163 KM', 2018, 'camper2.jpg', serialize(['Całoroczny', 'Klimatyzacja postojowa' => 'NIE', 'Kat. "B",   DMC 3500 kg', '3/4 osobowy', 'Manualna 6 biegowa skrzynia', '599/206/256 cm dł./szer./wys. zewn.', 'Kaucja zwrotna' => '5000 PLN', 'Opłata serwisowa' => '350 PLN'])],
        ['Kamper', 'Premium', 1, 950, 'Aristeo 694', 'BENIMAR / FIAT DUCATO INTEGRA', 2017, 'camper1.jpg', serialize(['Całoroczny', 'Klimatyzacja postojowa' => 'TAK', 'Kat. "B",   DMC 3500 kg', '4 osobowy', 'Automatyczna skrzynia biegów', '738/234/289 cm dł./szer./wys. zewn..', 'Kaucja zwrotna' => '5000 PLN', 'Opłata serwisowa' => '350 PLN'])],
        ['Kamper', null, 8, 900, 'K-YACHT MH89TL', 'MOBILVETTA / FIAT DUCATO INTEGRA', 2016, 'camper8.jpg', serialize(['Całoroczny', 'Klimatyzacja postojowa' => 'TAK', 'Kat. "B",   DMC 3500 kg', '4 osobowy', 'Manualna 6 biegowa skrzynia', '738/232/289 cm dł./szer./wys. zewn.', 'Kaucja zwrotna' => '5000 PLN', 'Opłata serwisowa' => '350 PLN'])],
        ['Kamper', null, 5, 500, 'SKY TRAVELLER 600 DKG', 'KNAUS / FIAT DUCATO ALCOVA', 2016, 'camper5.jpg', serialize(['Całoroczny', 'Klimatyzacja postojowa' => 'TAK', 'Kat. "B",   DMC 3500 kg', '6 osobowy', 'Manualna 6 biegowa skrzynia', '649/234/319 cm dł./szer./wys. zewn.', 'Kaucja zwrotna' => '5000 PLN', 'Opłata serwisowa' => '350 PLN'])],
        ['Kamper', null, 11, 550, 'Trend T 7057 EB', 'DETHLEFFS / Citroen 2, 0 / 130KM', 2018, 'camper11.jpg', serialize(['Całoroczny', 'Klimatyzacja postojowa' => 'NIE', 'Kat. "B",   DMC 3499 kg', '5 osobowy', '6 biegowa skrzynia manualna', '233/290/741 cm dł./szer./wys. zewn.', 'Kaucja zwrotna' => '5000 PLN', 'Opłata serwisowa' => '350 PLN'])],
    ];

    $zapytanie_wstawiajace = $konektor->prepare("INSERT INTO pojazdy (rodzaj, klasa, numer_pojazdu, cena, model, producent, rocznik, zdjecie, dane) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    foreach ($przykladowe_pojazdy as $pojazd) {
        $zapytanie_wstawiajace->execute($pojazd);
    }


    header("Location: ?p=instalator&sukces=1");
    exit;
}