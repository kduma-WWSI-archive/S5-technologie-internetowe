<?php


$db = new PDO('mysql:host='. $konfiguracja['host'].';dbname='. $konfiguracja['dbname'].';encoding=utf8', $konfiguracja['login'], $konfiguracja['password']);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

return $db;