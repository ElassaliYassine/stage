function showCity(region) {
    
    var G_Marrakech = document.getElementsByClassName('G_Marrakech')  ;
    var G_Tanger= document.getElementsByClassName('G_Tanger')  ;
    var G_Oriental = document.getElementsByClassName('G_Oriental');
    var G_Fes = document.getElementsByClassName('G_Fes');
    var G_Rabat = document.getElementsByClassName('G_Rabat');
    var G_Beni = document.getElementsByClassName('G_Beni');
    var G_Casablanca = document.getElementsByClassName('G_Casablanca');
    var G_Draa = document.getElementsByClassName('G_Draa');
    var G_Souss= document.getElementsByClassName('G_Souss');
    var G_Guelmim = document.getElementsByClassName('G_Guelmim');
    var G_Laayoune = document.getElementsByClassName('G_Laayoune');
    var G_Dakhla = document.getElementsByClassName('G_Dakhla');
    for (let i = 0; i < G_Marrakech.length; i++) {
        G_Marrakech[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Souss.length; i++) {
        G_Souss[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Tanger.length; i++) {
        G_Tanger[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Oriental.length; i++) {
        G_Oriental[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Fes.length; i++) {
        G_Fes[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Rabat.length; i++) {
        G_Rabat[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Beni.length; i++) {
        G_Beni[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Casablanca.length; i++) {
        G_Casablanca[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Draa.length; i++) {
        G_Draa[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Guelmim.length; i++) {
        G_Guelmim[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Laayoune.length; i++) {
        G_Laayoune[i].style.display = "none" ;
        }
    for (let i = 0; i < G_Dakhla.length; i++) {
        G_Dakhla[i].style.display = "none" ;
        }    
    function ff1(value)
    {
        for (let i = 0; i < value.length; i++)
        {
            value[i].style.display = "block";
        }
    }
    if (region == 'L-Oriental')
    {
        return ff1(G_Oriental);
    }
    if (region == 'Fes-Meknes' ) {
        return ff1(G_Fes);
    }
    if (region == 'Rabat-Sale-Kenitra' ) {
        return ff1(G_Rabat);
    }
    if (region == 'Beni-Mellal-Khenifra' ) {
        return ff1(G_Beni);
    }
    if (region == 'Casablanca-Settat' ) {
        return ff1(G_Casablanca);
    }
    if (region == 'Draa-Tafilalet' ) {
        return ff1(G_Draa);
    }
    if (region == 'Souss-Massa' ) {
        return ff1(G_Souss);
    }
    if (region == 'Guelmim-Oued-Noun' ) {
        return ff1(G_Guelmim);
    }
    if (region == 'Laayoune-Sakia-El-Hamra' ) {
        return ff1(G_Laayoune);
    }
    if (region == 'Dakhla-Oued-Ed-Dahab' ) {
        return ff1(G_Dakhla);
    }
    if (region == 'Marrakech-Safi' ) {
        return ff1(G_Marrakech);
    }
    if (region == 'Tanger-Tetouan-Al-Hoceima' ) {
        return ff1(G_Tanger);
    }
}