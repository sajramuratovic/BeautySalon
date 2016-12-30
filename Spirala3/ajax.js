var prikaziSadrzaj = function(naziv)
{
        var ajax = new XMLHttpRequest();
		
        ajax.onreadystatechange = function() 
		{
                if (ajax.readyState == 4 && ajax.status == 200)
                        document.getElementById("polje").innerHTML = ajax.responseText;
                
				if (ajax.readyState == 4 && ajax.status == 404)
                        document.getElementById("polje").innerHTML = "Greska: nepoznat URL";
        }
        ajax.open("GET", naziv, true);
        ajax.send();
}