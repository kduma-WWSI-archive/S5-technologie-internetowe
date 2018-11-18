<div id="content">

    Lista Pojazdów

    <div id="search">
        <form>
            <label for="cena_od">Cena Od:</label>
            <input name="cena_od" id="cena_od"/>

            <label for="cena_do">Cena Od:</label>
            <input name="cena_do" id="cena_do"/>

            <label for="rodzaj">Rodzaj:</label>
            <select name="rodzaj" id="rodzaj">
                <option value="">Wszystkie</option>
                <option value="Kamper">Kampery</option>
                <option value="Limuzyna">Limuzyny</option>
            </select>

            <button type="button" onclick="szukaj_pojazdow();">
                Szukaj
            </button>
        </form>


    </div>
    <div id="data">

    </div>
    <script>szukaj_pojazdow();</script>
</div>
