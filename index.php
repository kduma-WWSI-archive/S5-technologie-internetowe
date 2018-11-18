<?php

if(file_exists('konfiguracja.php')){
    $konfiguracja = require 'konfiguracja.php';
    $akcje = require 'akcje.php';
    $konektor = require 'php/db.php';
} else {
    $konfiguracja = [];
    // Jeśli nie ma pliku konfiguracyjnego to przekierowujemy do instalatora
    $akcje = ['strona-glowna' => ['*' => 'instalator']];
}



$identyfikator_strony = $_GET['p'] ?? 'strona-glowna';
$metoda = $_SERVER["REQUEST_METHOD"];

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    $metoda = 'AJAX-'.$metoda;
}

if (isset($akcje[$identyfikator_strony][$metoda])) {
    $akcja = $akcje[$identyfikator_strony][$metoda];
} elseif (isset($akcje[$identyfikator_strony]['*'])) {
    $akcja = $akcje[$identyfikator_strony]['*'];
} else {
    $akcja = 'blad';
}


if(file_exists('php/akcje/'.$akcja.'/akcja.php'))
    require 'php/akcje/'.$akcja.'/akcja.php';

if(file_exists('php/akcje/'.$akcja.'/widok.php'))
{
    require 'php/szablon/naglowek.php';
    require 'php/akcje/'.$akcja.'/widok.php';
    require 'php/szablon/stopka.php';
}




