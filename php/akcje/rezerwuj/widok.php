<div id="content">
    <?php if(isset($blad) && $blad != ''):?>
        <div style="background: red; color: white; font-weight: bolder; font-size: 20px; text-align: center; padding: 10px 20px"><?=$blad?></div>
    <?php endif; ?>
    <form method="post" id="formularz">
        <div>
            <label for="imie">Imię</label>
            <input type="text" id="imie" name="imie" placeholder="Imię" value="<?=$_POST['imie'] ?? ''?>">
        </div>

        <div>
            <label for="nazwisko">Nazwisko</label>
            <input type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko" value="<?=$_POST['nazwisko'] ?? ''?>">
        </div>

        <div>
            <label for="telefon">Telefon</label>
            <input type="tel" id="telefon" name="telefon" placeholder="Telefon" value="<?=$_POST['telefon'] ?? ''?>">
        </div>

        <div>
            <label for="od">Rezerwacja od</label>
            <input type="date" id="od" name="od" placeholder="Rezerwacja od" value="<?=$_POST['od'] ?? date('Y-m-d')?>">
        </div>

        <div>
            <label for="do">Rezerwacja do</label>
            <input type="date" id="do" name="do" placeholder="Rezerwacja do" value="<?=$_POST['do'] ?? date('Y-m-d', strtotime('+1 day'))?>">
        </div>


        <input type="submit" value="Rezerwuj">
    </form>
    <div id="map">
        <ul class="price">
            <li class="header" <?=$pojazd['klasa'] == 'Pro' ? 'style="background-color:#4CAF50"' : ($pojazd['klasa'] == 'Premium' ? 'style="background-color:red"' : '')?>><?=$pojazd['klasa'] ?? $pojazd['rodzaj']?></li>
            <li class="grey"><img src="img/<?=$pojazd['zdjecie']?>" style="width: 50%;"></li>
            <li class="grey">PLN <?=$pojazd['cena']?> / dzień</li>

            <li class="grey"><strong><?=$pojazd['producent']?></strong></li>
            <li class="grey"><strong><?=$pojazd['model']?></strong></li>
            <li class="grey"><?=$pojazd['rocznik']?> r.</li>
            <?php foreach (unserialize($pojazd['dane']) as $etykieta => $wartosc):?>
                <li class="grey"><?=is_string($etykieta)?$etykieta:''?> <strong><?=$wartosc?></strong></li>
            <?php endforeach;?>
            <li class="grey NrPojazdu">Nr Pojazdu<strong>:<span class="CyfraPojazdu" style="font-size: 20pt;"> <?=$pojazd['numer_pojazdu']?></span></strong></li>
        </ul>
    </div>
</div>