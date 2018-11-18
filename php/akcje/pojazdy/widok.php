<div id="content">
    <?php foreach ($lista_pojazdow as $pojazd):?>
        <div class="columns">
            <ul class="price">
                <li class="header" <?=$pojazd['klasa'] == 'Pro' ? 'style="background-color:#4CAF50"' : ($pojazd['klasa'] == 'Premium' ? 'style="background-color:red"' : '')?>><?=$pojazd['klasa'] ?? $pojazd['rodzaj']?></li>
                <li class="grey"><img src="img/<?=$pojazd['zdjecie']?>" style="width: 100%;"></li>
                <li class="grey">PLN <?=$pojazd['cena']?> / dzień</li>

                <li class="grey"><strong><?=$pojazd['producent']?></strong></li>
                <li class="grey"><strong><?=$pojazd['model']?></strong></li>
                <li class="grey"><?=$pojazd['rocznik']?> r.</li>
                <?php foreach (unserialize($pojazd['dane']) as $etykieta => $wartosc):?>
                    <li class="grey"><?=is_string($etykieta)?$etykieta:''?> <strong><?=$wartosc?></strong></li>
                <?php endforeach;?>
                <li class="grey NrPojazdu">Nr pojazdu<strong>:<span class="CyfraPojazdu" style="font-size: 20pt;"> <?=$pojazd['numer_pojazdu']?></span></strong></li>

                <li class="grey"><a href="?p=rezerwuj&pojazd=<?=$pojazd['id']?>" class="button">Rezerwuj</a></li>
            </ul>
        </div>
    <?php endforeach;?>
</div>
