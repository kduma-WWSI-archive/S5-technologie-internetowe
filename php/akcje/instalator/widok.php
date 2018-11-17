<div id="content">
    <?php if($powodzenie):?>
        <div style="background: green; color: white; font-weight: bolder; font-size: 20px; text-align: center; padding: 10px 20px">Aplikacja zostala zaladowana pomyslnie!</div>
    <?php endif; ?>

    <?php if($konfiguracja == []): ?>
        <form method="post" id="formularz">
            <div>
                <label for="host">Host</label>
                <input type="text" id="host" name="host" placeholder="Host Bazy Danych" value="<?=$_POST['host'] ?? 'localhost'?>">
            </div>

            <div>
                <label for="dbname">Baza Danych</label>
                <input type="text" id="dbname" name="dbname" placeholder="Baza Danych" value="<?=$_POST['dbname'] ?? 'sosna'?>">
            </div>

            <div>
                <label for="login">Użytkownik</label>
                <input type="text" id="login" name="login" placeholder="Użytkownik Bazy Danych" value="<?=$_POST['login'] ?? 'root'?>">
            </div>

            <div>
                <label for="password">Hało</label>
                <input type="password" id="password" name="password" placeholder="Hało Bazy Danych" value="<?=$_POST['password'] ?? 'secret'?>">
            </div>


            <input type="submit" value="Instaluj">
        </form>
    <?php else: ?>
        <form method="post" id="formularz">
            <input type="submit" value="Instaluj Ponownie">
        </form>
    <?php endif; ?>
</div>