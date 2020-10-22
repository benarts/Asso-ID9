<script>
    var duree = 1;

    // Atelier
    var numberAtelier = <?php include("../../Controleur/database_resource/number_of_all/number_of_workshop.php"); ?>; // Nombre final du conpteur
    var conpteurAtelier = 0; // Initialisation du conpteur
    var deltaAtelier = Math.ceil((duree * 1000) / numberAtelier); // On calcule l'intervalle de temps entre chaque rafraîchissement du conpteurFemme (durée mise en milliseconde)

    // Sports
    var numberSport = <?php include("../../Controleur/database_resource/number_of_all/number_of_room_sporting.php"); ?>; // Nombre final du conpteur
    var compteurSport = 0; // Initialisation du conpteur
    var deltaSport= Math.ceil((duree * 1000) / numberSport); // On calcule l'intervalle de temps entre chaque rafraîchissement du conpteurFemme (durée mise en milliseconde)

    // info
    var numberInfo = <?php include("../../Controleur/database_resource/number_of_all/number_of_room_info.php"); ?>; // Nombre final du conpteur
    var compteurInfo = 0; // Initialisation du conpteur
    var deltaInfo = Math.ceil((duree * 1000) / numberInfo); // On calcule l'intervalle de temps entre chaque rafraîchissement du conpteurFemme (durée mise en milliseconde)

    // Conférences
    var numberConf = <?php include("../../Controleur/database_resource/number_of_all/number_of_room_conference.php"); ?>; // Nombre final du conpteur
    var compteurConf = 0; // Initialisation du conpteur
    var deltaConf= Math.ceil((duree * 1000) / numberConf); // On calcule l'intervalle de temps entre chaque rafraîchissement du conpteurFemme (durée mise en milliseconde)

    // Femmes
    var femme = <?php include("../../Controleur/database_resource/number_of_all/number_of_wife.php"); ?>;
    var compteurfemme = 0 ;
    var deltafemme = Math.ceil((duree * 1000) / femme);

    // Variable dans le HTML
    var node =  document.querySelectorAll("#score"); // On récupère tous les noeuds où sera rafraîchi la valeur du conpteurFemme
    var resfemme = document.getElementById("general_result");
                
    window.addEventListener("scroll", () =>
    {
        if (document.body.scrollTop >= 1517 || document.documentElement.scrollTop >= 1517)
        {		
            setTimeout(animationAtelier, deltaAtelier);
            setTimeout(animationSport, deltaSport);
            setTimeout(animationInfo, deltaInfo);
            setTimeout(animationConf, deltaConf);
            setTimeout(animationfemme, deltafemme);
        }
    });
    
    function animationAtelier() 
    {
        if (conpteurAtelier < numberAtelier)
        {
            node[0].innerHTML = ++conpteurAtelier;
            setTimeout(animationAtelier, deltaAtelier);
        }
    }
    function animationSport() 
    {
        if (compteurSport < numberSport)
        {
            node[1].innerHTML = ++compteurSport;
            setTimeout(animationSport, deltaSport);
        }
    }

    function animationInfo() 
    {
        if (compteurInfo < numberInfo)
        {
            node[2].innerHTML = ++compteurInfo;
            setTimeout(animationInfo, deltaInfo);
        }
    }

    function animationConf() 
    {
        if (compteurConf < numberConf)
        {
            node[3].innerHTML = ++compteurConf;
            setTimeout(animationConf, deltaConf);
        }
    }
    function animationfemme()
    {	
        if(femme > compteurfemme)
        {
            resfemme.innerHTML = ++compteurfemme;
            setTimeout(animationfemme, deltafemme);
        }
    }
</script>