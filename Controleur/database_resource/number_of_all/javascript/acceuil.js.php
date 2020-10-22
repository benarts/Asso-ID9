<script>
    var duree = 1;

    // Femme
    var numberFemme = <?php include("Controleur/database_resource/number_of_all/number_of_wife.php"); ?>; // Nombre final du conpteur
    var conpteurFemme = 0; // Initialisation du conpteur
    var deltaFemme = Math.ceil((duree * 1000) / numberFemme); // On calcule l'intervalle de temps entre chaque rafraîchissement du conpteurFemme (durée mise en milliseconde)

    // Session
    var numberSession = <?php include("Controleur/database_resource/number_of_all/number_of_session.php"); ?>; // Nombre final du conpteur
    var compteurSession = 0; // Initialisation du conpteur
    var deltaSession = Math.ceil((duree * 1000) / numberSession); // On calcule l'intervalle de temps entre chaque rafraîchissement du conpteurFemme (durée mise en milliseconde)

    // Structure
    var numberStructure = <?php include("Controleur/database_resource/number_of_all/number_of_structure.php"); ?>; // Nombre final du conpteur
    var compteurStructure = 0; // Initialisation du conpteur
    var deltaStructure = Math.ceil((duree * 1000) / numberStructure); // On calcule l'intervalle de temps entre chaque rafraîchissement du conpteurFemme (durée mise en milliseconde)

    var Reussit = <?php include("Controleur/database_resource/number_of_all/percent_success.php"); ?>;
    var compteurReussit = 0 ;
    var deltaReussit = Math.ceil((duree * 1000) / Reussit);

    // Variable dans le HTML
    var node =  document.querySelectorAll("#score"); // On récupère tous les noeuds où sera rafraîchi la valeur du conpteurFemme
    var res = document.getElementById("general_result");
                
    window.addEventListener("scroll", () =>
    {
        if (document.body.scrollTop >= 817 || document.documentElement.scrollTop >= 817)
        {		
            setTimeout(animationFemme, deltaFemme);
        }
        
        if (document.body.scrollTop >= 941 || document.documentElement.scrollTop >= 941)
        {
            setTimeout(animationSession, deltaSession);
        }
        
        if (document.body.scrollTop >= 1090 || document.documentElement.scrollTop >= 1090)
        {
            setTimeout(animationStructure, deltaStructure);
            setTimeout(animationReussit, deltaReussit);
        }
    });

    function animationFemme() 
    {
        if (conpteurFemme < numberFemme)
        {
            node[0].innerHTML = ++conpteurFemme;
            setTimeout(animationFemme, deltaFemme);
        }
    }

    function animationSession() 
    {
        if (compteurSession < numberSession)
        {
            node[1].innerHTML = ++compteurSession;
            setTimeout(animationSession, deltaSession);
        }
    }

    function animationStructure() 
    {
        if (compteurStructure < numberStructure)
        {
            node[2].innerHTML = ++compteurStructure;
            setTimeout(animationStructure, deltaStructure);
        }
    }

    function animationReussit()
    {	
        if(Reussit > compteurReussit)
        {
            res.innerHTML = ++compteurReussit;
            setTimeout(animationReussit, deltaReussit);
        }
    }
</script>