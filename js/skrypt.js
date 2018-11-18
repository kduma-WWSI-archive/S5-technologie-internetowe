function startGETRequest(url, onComplete)
{
    var ajax;

    if (window.XMLHttpRequest){
        ajax=new XMLHttpRequest();
    }else{
        return alert ("nie utworzono obiektu");
    }

    ajax.onreadystatechange=function(){
        if(ajax.readyState===4){
            var responseText = ajax.responseText;
            onComplete(responseText);
            delete ajax;
        }
    };
    ajax.open("GET",url,true);
    ajax.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    ajax.send(null);
}


function szukaj_pojazdow(){
    var cena_od = document.getElementById('cena_od').value;
    var cena_do = document.getElementById('cena_do').value;
    var rodzaj = document.getElementById('rodzaj').value;

    url="?p=lista-pojazdow&od="+cena_od+"&do="+cena_do+"&rodzaj="+rodzaj;
    url=encodeURI(url);
    startGETRequest(url,wyswietl_pojazdy);
}

function wyswietl_pojazdy(json){
    var obj = JSON.parse(json);
    console.log(obj);
    var data = document.getElementById('data');

    var html = '';
    html+= "<table border='1'>";
    obj.map(row => {
        html += "<tr>";
            html += "<td>";
                html += row.numer_pojazdu;
            html += "</td>";

            html += "<td>";
                html += row.rodzaj;
            html += "</td>";

            html += "<td>";
                html += row.cena;
            html += "</td>";

            html += "<td>";
                html += row.producent;
            html += "</td>";

            html += "<td>";
                html += row.model;
            html += "</td>";

            html += "<td>";
                html += row.rocznik;
            html += "</td>";

            html += "<td>";
                html += "<a href=\"?p=rezerwuj&pojazd="+row.id+"\">Więcej Informacji</a>";
            html += "</td>";
        html += "</tr>";
    });
    html+= "</table>";
    data.innerHTML=html;
}

