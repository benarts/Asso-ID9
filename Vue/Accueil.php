<?php
	require("Model/database/MySQL.php"); // Join MySQL class
	require("Model/utils/InputUtils.php");
	require("Model/utils/MessageUtils.php");
	require('Model/lib/Exception.php');
    require('Model/lib/PHPMailer.php');
    require('Model/lib/SMTP.php');
	require("Controleur/database_resource/send_simple_mail.php");
	
	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ID9</title>
		<link rel="icon" type="image/png" href="Vue/Ressource/Image/Icon/id9.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="Vue/Css/css_special/police.css">
		<link rel="stylesheet" href="Vue/Css/css_accueil/accueil.css">
    </head>
    <body>
        <!-- -->
        <header>
            <div class="titre_so" align="center">
                <h1 id="titre">ASSOCIATION</h1>
                <div id="titre2">ID<font color="#f5b500">9</font></div>
                <h1 id="titre3">Insertion professionnelle</h1>
				<img class="icon_id9" src="Vue/Ressource/Image/Icon/id92.png" alt=""/>
            <button id="descendre">
                <a href="#" onclick='ScrollToBottom();'><</a>
            </button>
        </header>
        <!-- -->
        <div class="anime-menu" align='center'>
            <img class="barre" src="Vue/Ressource/Image/Icon/barre.png" alt=""/>
            <nav>
                <ul class="menu">
                    <li class="menu"><a href="index.php"><p class="d">Associations ID9</p></a></li>
                    <li class="menu"><a href="#"onclick='ScrollToBottom();'><p class="d">Actualités</p></a></li>
					<li class="menu"><a href="#"onclick='ScrollToBottom2();'><p class="d">Nos résultats</p></a></li>
					<li class="menu"><a href="#"onclick='ScrollToBottom3();'><p class="d">Accessibilité</p></a></li>
                    <li class="menu"><a href="#"onclick='ScrollToBottom4();'><p class="d">Contact</p></a></li>
					<?php if ($_SESSION["admin"] == 1){ echo '<li class="menu"><a href="Vue/Html/administration/form_admin.php"><p class="d">Administration</p></a></li>'; } ?>
                </ul>
            </nav>
        </div>
        <!-- -->
        <div id="contnaire">
            
            <div id="contnaire_info" align="center">
                <section id="contnaire_section1">
                    <div class="info_diap2">
						<h1 class="projet">Projet ID9</h1>
						<p class="present_projet">
							Session <font color="#f5b500">n°<?php include("Controleur/database_resource/texts/number_of_session.php"); ?></font> de notre projet"<font color="#f5b500">En...vie d'emploi!</font>"pour en savoir plus sur le deroulement
							vous pour nous contacter ou accéder la page suivante.
						</p>
						<button class='resuPlus'>
							<a href="Vue/Html/forma_id9.php">> En savoir plus</a>
						</button>
					</div>
                    <div class="info_diap">
						<h1 class="envide">En...vie d'emploi!</h1>
						<p class="date_forma">Début: 01 octobre 2018 / fin: 31 décembre 2018</p>
						<div class="forme">
							<p id="statut">ID9</p>
						</div>
					</div>
                    <div class="diapo">
                        <img class="img" src="Vue/Ressource/Image/Img/abc_id9_hulot_classe.jpg" alt=""/>
                    </div>
                </section>
                <section id="contnaire_section2">
                    <div class="card">
                        <a href="Vue/Html/inscrip_id9.php">
                            <div class="card-text">
                                    <h3>Iscription ID<font color="#f5b500">9</font></h3>
                                    <p>Tout savoir pour les demandes d'inscription.</p>
                            </div>
                            <div class="card-bottom">
                            </div>
                            <div class="card-top">
                            </div>
                            <div class="texte">
                                <div class="titreS"><h1>Iscription ID<font color="#f5b500">9</font></h1></div>
                            </div>
                            <img class= "card-img" src="Vue/Ressource/Image/Img/abc_id9_hulot_info1.jpg">
                        </a>
                    </div>
                    <div class="card">
                        <a href="Vue/Html/info_id9.php">
                            <div class="card-text">
                                    <h3>Info ID<font color="#f5b500">9</font></h3>
                                    <p>Accéder pour en savoir plus.</p>
                            </div>
                            <div class="card-bottom">
                            </div>
                            <div class="card-top">
                            </div>
                            <div class="texte">
                                <div class="titreS"><h1>Info ID<font color="#f5b500">9</font></h1></div>
                            </div>
                            <img class= "card-img" src="Vue/Ressource/Image/Img/abc_id9_hulot_info.jpg">
                        </a>
                    </div>
                </section>
                <button id="descendre2">
                    <a href="#" onclick='ScrollToBottom2();'><</a>
                </button>
            </div>
            
            <div class="autre_info">
				<div class='savoir' align="center">
					<h1 class="resul">Nos résultats</h1>
					<p class="evol">
						Voici les résultats obtenu dans notre projet "<font color="#f5b500">En...vie d'emploi!</font>"
					</p>
					<button class='resuPlus'>
						<a href="Vue/Html/forma_id9.php">> En savoir plus</a>
					</button>
				</div>
                <div class="result">
                    <div class="result1">
                        <img class='icon_Fem' src="Vue/Ressource/Image/Icon/femme.png" alt=""/>
                        <div id='info_Fem'>
                            <p id='score'>0</p>
                            <p id='nbF'>Nombre de femme</p>
                        </div>
                    </div>
                    <div class="result1">
                        <img class='icon_Fem' src="Vue/Ressource/Image/Icon/forma.png" alt=""/>
                        <div id='info_Fem'>
                            <p id='score'>0</p>
                            <p id='nbF'>Session</p>
                        </div>
                    </div>
                    <div class="result1">
                        <img class='icon_Fem' src="Vue/Ressource/Image/Icon/stuct.png" alt=""/>
                        <div id='info_Fem'>
                            <p id='score'>0</p>
                            <p id='nbF'>Nombre de structure</p>
                        </div>
                    </div>
                </div>
                <div class="result_general">
                    <div class="result2">
                        <img class='icon_Fem2' src="Vue/Ressource/Image/Icon/diplom.png" alt=""/>
                        <div class="chiff">
                            <div class="nb2">
								<p id='general_result'>0</p>%
							</div>
                            <p id='nbF2'>Réussite</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- div pour les personne visé -->
		<div class='contnaire_box'>
			<section class='present'>
				<h1	class='Ac'>Accessibilité</h1>
				<img class='icon_guil' src="Vue/Ressource/Image/Icon/guil.png" alt=""/>
				<p class="viser">
					Le dispositif mis en place répond à une double problématique de 
					proximité des entreprises du territoire et l’accès à l’emploi 
					des publics féminins, sans qualification ou sans  expérience
					professionnelle avérée.

					L’action se déroule en deux temps. 
					Les trois premiers mois les stagiaires seront amenés à suivre 
					des ateliers collectifs autour de différentes thématiques. 
				</p>
				<img class='icon_guil1' src="Vue/Ressource/Image/Icon/guil.png" alt=""/>
			</section>
			<section class='pr'>
				<button id="monter">
					<a href="#" onclick='ScrollToTop();'><</a>
				</button>
				
				<!-- section modifier pour les rajout d'image-->
				<!-- l'admin auras la possibilité de modifier les images du diapo -->
				<!-- il y'a deux block -->
				<div class='atelier_box'>
					<h1 class="at">NOS ATELIERS</h1>
					
					<!-- le block pour afficher les images  -->
					<div class='atelier_box1'>
						<div class="filtre_diapo"></div>
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr1.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
						<img class="mySlides icon_atelier2" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg">
					</div>
					
					<!-- et le block pour montrer la liste d'image -->
					<!-- ils sont sélectionable grâce au javascript et auras une influence sur le premier block-->
					<div class='atelier_box2'>
						<p class="atelier" align="center" >Nos ateliers</p>
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(1)">
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr1.jpg" onclick="currentDiv(2)">						
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(3)">
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(4)">
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(5)">
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(6)">
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(7)">
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(8)">
						<img class="demo w3-hover-opacity-off icon_atelier" src="Vue/Ressource/Image/Img/abc_id9_hulot_atr.jpg" onclick="currentDiv(9)">						
					</div>
				</div>
			</section>
			
		</div>
		<footer>
			<div class='ens' align='center'>
				<button class='ensavoir'>
					<a href="Vue/Html/info_id9.php">> En savoir plus</a>
				</button>
			</div>
			<div class="titre_souti" align="center">
				<div class="formul">
					<div class="contact">
						<h2 class="titre_contact" align="center" >Contactez-nous !</h2>
						<form class="contact1" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
							<input id="contactC" type="text" name="lastname" placeholder="Nom" required />							
							<input id="contactC" type="text" name="firstname" placeholder="Prénom" maxlength="50" required />
							<input id="contactC" type="number" name="number" placeholder="Téléphone" required />							
							<input id="contactC" type="email" name="email" placeholder="E-mail" maxlength="50" required />
							
							<textarea id="contactC2" maxlength="4000" name="edittext" placeholder="Message..." required ></textarea>
	
							<input align="center" class="conta" type="submit" name="submit" value="> ENVOYER"/><br/>
						</form>
						<p class="sending_message"><?php echo $message_error; ?></p>
					</div>
					<div class="infomation">
                        <p class="coord">
							<?php include("Controleur/database_resource/texts/responsable_contact.php"); ?>
						</p>
						<p class="coord">
                            <?php include("Controleur/database_resource/texts/coordinatrice_contact.php"); ?>
						</p>
					</div>
				</div>
				<div>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/io.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/maison.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/métiers.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/republi.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/proman.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/agricole.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/entre.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/epide.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/cidff.png" alt=''/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/carbu.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/arts.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/cite_cosmetique.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/cc.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/cci.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/pol.png" alt=""/>
					<img class='icon_part' src="Vue/Ressource/Image/Icon/apc.png" alt=""/>
				</div>
				<h1 id="titreS">ASSOCIATION <font color="#f5b500">|</font>ID<font color="#f5b500">9</font></h1>
			</div>
		</footer>
        <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23214.57404606847!2d5.3761524!3d43.3389188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce1a9dba447f4c36!2sCit%C3%A9+de+la+Cosm%C3%A9tique!5e0!3m2!1sfr!2sfr!4v1557838420630!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        <script src="Vue/Js/jquery-3.3.1.js" type="text/javascript"></script>
		<script src="Vue/Js/accueil.js" type="text/javascript"></script>
		<?php include("Controleur/database_resource/number_of_all/javascript/acceuil.js.php"); ?>			
    </body>
</html>