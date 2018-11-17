<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wypżyczalnia samochodów pod Sosną">
    <meta name="keywords" content="limuzyna, camper, wypożyczalnia samochodów">
    <meta name="author" content="Krzysztof Sosnowski">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/skrypt.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Wypożyczalnia samochodów</title>
</head>
<body>
<div id="wrapper">
    <diV id="logo"><a href="/"><img src="img/logo.svg" /></a></div>
    <nav><ul id="menu"><li<?=$akcja=='index' ? ' class="active"' : '' ?>><a href="?">Home</a></li><li<?=$akcja=='o-firmie' ? ' class="active"' : '' ?>><a href="?p=o-firmie">O firmie</a></li><li<?=$akcja=='pojazdy' && $pojazd=='kamper' ? ' class="active"' : '' ?>><a href="?p=pojazdy&pojazd=kamper">Campery</a></li><li<?=$akcja=='pojazdy' && $pojazd=='limuzyna' ? ' class="active"' : '' ?>><a href="?p=pojazdy&pojazd=limuzyna">Limuzyny</a></li><li<?=$akcja=='galeria' ? ' class="active"' : '' ?>><a href="?p=galeria">Galeria</a></li><li<?=$akcja=='kontakt' ? ' class="active"' : '' ?>><a href="?p=kontakt">Kontakt</a></li></ul></nav>
    <div id="content">