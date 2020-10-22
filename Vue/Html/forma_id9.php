<?php
	require("../../Model/database/MySQL.php"); // Join MySQL class
	require("../../Model/utils/InputUtils.php");
	require("../../Model/utils/MessageUtils.php");
	require("../../Model/lib/Exception.php");
    require("../../Model/lib/PHPMailer.php");
    require("../../Model/lib/SMTP.php");
	require("../../Controleur/database_resource/send_simple_mail.php");

	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>En...vie d'emploi</title>
		<link rel="icon" type="image/png" href="../Ressource/Image/Icon/id9.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../Css/css_special/police.css">
		<link rel="stylesheet" href="../Css/css_formation/formation.css">
    </head>
    <body>
        <!-- haut de page -->
        <header>
			<h1 class="qui">En...vie<font color="#f5b500">d'emploi!!!</font></h1>
			<img class="icon_id9" src="../Ressource/Image/Icon/id92.png" alt=""/>
        </header>
		
        <!-- la barre de navigation -->
        <div class="anime-menu" align='center'>
            <img class="barre" src="../Ressource/Image/Icon/barre.png" alt=""/>
            <nav>
                <ul class="menu">
                    <li class="menu"><a href="../../index.php"><p class="d">Associations ID9</p></a></li>
					<li class="menu"><a href="inscrip_id9.php"><p class="d">Prescritption</p></a></li>
					<li class="menu"><a href="info_id9.php"><p class="d">Information</p></a></li>
					<li class="menu"><a href="#" onclick='ScrollToBottom();'><p class="d">Nos résultats</p></a></li>
                    <li class="menu"><a href="#" onclick='ScrollToForm();'><p class="d">Contact</p></a></li>
					<?php if ($_SESSION["admin"] == 1){ echo '<li class="menu"><a href="administration/form_admin.php"><p class="d">Administration</p></a></li>'; } ?>
                </ul>
            </nav>
        </div>
		
        <!-- corp de la page -->
        <main>
			<div class="objectif" align="center">
				<h1 class="deroul">Déroulement <br>de l'action</h1>
				<div class="img_obj">
					<img class='icon_obj' src="../Ressource/Image/Img/abc_id9_hulot_reunion.jpg" alt=""/>
				</div>
				<div class="sous_deroul">
					<h1 class="deroul2">Objectifs opérationnels: <font color="#f5b500">les objectifs</font></h1>
					<p class="obj">
					Le dispositif mis en place répond à une double problématique 
					de proximité des entreprises du territoire et l’accès à l’emploi 
					des publics <font color="#f5b500">féminins</font>, sans qualification ou sans  expérience 
					professionnelle avérée.

					L’action se déroule en deux temps. Les trois premiers mois les 
					stagiaires seront amenés à suivre des ateliers collectifs autour 
					de différentes thématiques. Ateliers qui vont leur permettre,
					par la dynamique de groupe, de :
					<br>
					<br>
					-	Retrouver une position sociale et se faire confiance<br>
					-	Créer du lien social<br>
					-	Se valoriser,  mieux se connaître<br>
					-	Appréhender le marché du travail<br>
					</p>
				</div>
			</div>
			<div class="cours" align="center">
				<div class="block_atelier">
					<h1 class="atelier">Atelier Emploi</h1>
					<div class="block_atelier2">
						<h1 class="demarre">Démarrage de l’action : <font color="#f5b500">Le Carburateur</font></h1> 
						<p class="nos_atelier">
							Pôle de l'Entrepreneuriat, 211 Chemin de la Madrague-Ville, 13015 Marseille.
						</p>
					</div>
				</div>
				
				<!-- //////////////////////////////////////////////////////////////////////////// -->
				<div class="block">
					<div class='note'>
						<div class="block_detail" id="Formation">
							<h1 id="titre_detail">
								<font color="#f5b500">Details</font>
								<a class='exemple' href="https://www.aht.li/3381630/projet_professionnel.pdf" target="_blank">> Bilan Forma...</a>
							</h1>
							<p id="detail">
								<?php include("../../Controleur/database_resource/texts/formation.php"); ?>
							</p>
							<p><a class='details autre_but' href="#1" onclick="Formation_off()">> Fermer</a></p>
						</div>
						<img class='icon_note' src="../Ressource/Image/Icon/maison.png" alt=""/>
						<p id="note">
							<font color="#f5b500">Lieu d’Intervention :</font><br>
							Maison de Provence, 7 Rue des Chapeliers, 13001 Marseille<br> 
						</p>
						<p><a class='details' href="#1" onclick="Formation_on()">> Details</a></p>
					</div>
					<div class='block_note'>
						<h1 id='block_atel'>Emploi/Formation</h1>
						<div class='heure'>
							<p id='heure'>39h</p>
						</div>
					</div>
					<img class='image_note' src="../Ressource/Image/Img/abc_id9_hulot_reunion.jpg" alt=""/>
				</div>
				
				<!-- ///////////////////////////ATELIER FRANCAIS///////////////////////////////// -->
				<div class="block">
					<div class='note'>
						<div class="block_detail" id="francais">
							<h1 id="titre_detail">
								<font color="#f5b500">Details</font>
								<a class='exemple' href="https://www.aht.li/3381598/Bilan_Francais.doc"target="_blank">> Bilan français</a>
							</h1>
							<p id="detail">
								<?php include("../../Controleur/database_resource/texts/french_workshop.php"); ?>
							</p>
							<p><a class='details autre_but' href="#1" onclick="francais_off()">> Fermer</a></p>
						</div>
						<img class='icon_note' src="../Ressource/Image/Icon/cidff.png" alt=""/>
						<p id="note">
							<font color="#f5b500">Lieu d’Intervention :</font><br>
							CIDF 1 Rue de Forbin, 13003<br> 
						</p>
						<p><a class='details' href="#1" onclick="francais_on()">> Details</a></p>
					</div>
					<div class='block_note'>
						<h1 id='block_atel'>Atelier Français</h1>
						<div class='heure'>
							<p id='heure'>33h</p>
						</div>
					</div>
					<img class='image_note' src="../Ressource/Image/Img/abc_id9_hulot_infom.jpg" alt=""/>
				</div>
				
				<!-- ///////////////////////////ATELIER THEATRE////////////////////////////////// -->
				<div class="block">
					<div class='note'>
						<div class="block_detail" id="theatre">
							<h1 id="titre_detail">
								<font color="#f5b500">Details</font>
								<a class='exemple' href="https://www.aht.li/3381610/bilan_theatre.pdf" target="_blank">> Bilan theatre</a>
							</h1>
							<p id="detail">
								<?php include("../../Controleur/database_resource/texts/theater_workshop.php") ?>
							</p>
							<p><a class='details autre_but' href="#1" onclick="Theatre_off()">> Fermer</a></p>
						</div>
						<img class='icon_note' src="../Ressource/Image/Icon/arts.png" alt=""/>
						<p id="note">
							<font color="#f5b500">Lieu d’Intervention :</font><br>
							Les Arts de la Rue  225 Avenue des Aygalades, 13015 <br> 
						</p>
						<p><a class='details' href="#1" onclick="Theatre_on()">> Details</a></p>
					</div>
					<div class='block_note'>
						<h1 id='block_atel'>Atelier Théâtre</h1>
						<div class='heure'>
							<p id='heure'>22h</p>
						</div>
					</div>
					<img class='image_note' src="../Ressource/Image/Img/abc_id9_hulot_arts.jpg" alt=""/>
				</div>
				
				<!-- //////////////////////////////////////////////////////////////////////////// -->
				<div class="block">
					<div class='note'>
						<div class="block_detail" id="yoga">
							<h1 id="titre_detail">
								<font color="#f5b500">Details</font>
								<a class='exemple' href="https://www.aht.li/3381628/bilan_yoga.pdf"target="_blank">> Bilan yoga</a>
							</h1>
							<p id="detail">
								<?php include("../../Controleur/database_resource/texts/yoga_workshop.php") ?>
							</p>
							<p><a class='details autre_but' href="#1" onclick="yoga_off()">> Fermer</a></p>
						</div>
						<img class='icon_note' src="../Ressource/Image/Icon/cc.png" alt=""/>
						<p id="note">
							<font color="#f5b500">Lieu d’Intervention :</font><br>
							1 Rue des Carmelins, 13002 Marseille<br>
						</p>
						<p><a class='details' href="#1" onclick="yoga_on()">> Details</a></p>
					</div>
					<div class='block_note'>
						<h1 id='block_atel'>Atelier Yoga</h1>
						<div class='heure'>
							<p id='heure'>22h</p>
						</div>
					</div>
					<img class='image_note' src="../Ressource/Image/Img/abc_id9_hulot_io.jpg" alt=""/>
				</div>
				
				<!-- //////////////////////////////////////////////////////////////////////////// -->
				<div class="block">
					<div class='note'>
						<div class="block_detail" id="Conferences">
							<h1 id="titre_detail">
								<font color="#f5b500">Details</font>
								<a class='exemple' href="https://www.aht.li/3381633/Conferences.docx"target="_blank">> Bilan confé...</a>
							</h1>
							<p id="detail">
								<?php include("../../Controleur/database_resource/texts/conference.php") ?>
							</p>
							<p><a class='details autre_but' href="#1" onclick="Conferences_off()">> Fermer</a></p>
						</div>
						<img class='icon_note' src="../Ressource/Image/Icon/agricole.png" alt=""/>
						<p id="note">
							<font color="#f5b500">Lieu d’Intervention :</font><br>
							>>Aller voir le pdf<<<br> 
						</p>
						<p><a class='details' href="#1" onclick="Conferences_on()">> Details</a></p>
					</div>
					<div class='block_note'>
						<h1 id='block_atel'>Conférences</h1>
						<div class='heure'>
							<p id='heure'>12h</p>
						</div>
					</div>
					<img class='image_note' src="../Ressource/Image/Img/abc_id9_hulot_CA.jpg" alt=""/>
				</div>

				<!-- //////////////////////////////////////////////////////////////////////////// -->
				<div class="block">
					<div class='note'>
						<div class="block_detail" id="Emploi">
							<h1 id="titre_detail">
								<font color="#f5b500">Details</font>
								<a class='exemple' href="https://www.aht.li/3381632/FORUMS_EMPLOI.docx"target="_blank">> Bilan Emploi</a>
							</h1>
							<p id="detail">
								<?php include("../../Controleur/database_resource/texts/employment_forum.php") ?>
							</p>
							<p><a class='details autre_but' href="#1" onclick="Emploi_off()">> Fermer</a></p>
						</div>
						<img class='icon_note' src="../Ressource/Image/Icon/métiers.png" alt=""/>
						<p id="note">
							Fréquentation par <font color="#f5b500">les stagiaires</font> 
							à Plusieurs Forum Emploi sur Marseille
						</p>
						<p><a class='details' href="#1" onclick="Emploi_on()">> Details</a></p>
					</div>
					<div class='block_note'>
						<h1 id='block_atel'>Forum Emploi</h1>
						<div class='heure'>
							<p id='heure'>32h</p>
						</div>
					</div>
					<img class='image_note' src="../Ressource/Image/Img/abc_id9_hulot_cite.jpg" alt=""/>
				</div>

				<!-- //////////////////////////////////////////////////////////////////////////// -->
				<div class="block">
					<a class='exemple1' href="https://www.aht.li/3381609/lettre_de_motivation_ANONYME.odt"target="_blank">> Exemple de LM <</a>
					<a class='exemple2' href="https://www.aht.li/3381608/CV_capacites_professionnelles.doc"target="_blank">> Exemple de CV <</a>
					<p id='ensavoir'><a class='ensavoir' href="https://www.aht.li/3381607/bilan.pptx"target="_blank">> Bilan général <</a></p><br>
					<img class='icon_dll' src="../Ressource/Image/Icon/pdf.png" alt=""/>
				</div>
			</div>
			
			<!-- //////////////////////////////////////////////////////////////////////////// -->
			<div class="autre_info">
				<h1 class='result_titre'>Nos chiffres</h1>
				<div class="result">
					<div class="result1">
						<img class='icon_Fem' src="../Ressource/Image/Icon/ateli2.png" alt=""/>
						<div id='info_Fem'>
							<p id='score'>0</p>
							<p id='nbF'>Nombre d'atelier</p>
						</div>
					</div>
					
					<div class="result1">
						<img class='icon_Fem' src="../Ressource/Image/Icon/sport.png" alt=""/>
						<div id='info_Fem'>
							<p id='score'>0</p>
							<p id='nbF'>Salle(s) de sport</p>
						</div>
					</div>
					
					<div class="result1">
						<img class='icon_Fem' src="../Ressource/Image/Icon/cpu.png" alt=""/>
						<div id='info_Fem'>
							<p id='score'>0</p>
							<p id='nbF'>Salle(s) avec 20 poste info</p>
						</div>
					</div>
					
					<div class="result1">
						<img class='icon_Fem' src="../Ressource/Image/Icon/conf.png" alt=""/>
						<div id='info_Fem'>
							<p id='score'>0</p>
							<p id='nbF'>Salle(s) pour les conférences</p>
						</div>
					</div>
				</div>
				
				<div class="result_general">
					<div class="result2">
						<img class='icon_Fem2' src="../Ressource/Image/Icon/femme.png" alt=""/>
						<div class="chiff">
							<p id='general_result'>0</p>
							<p id='nbF2'>Nombre de femme</p>
						</div>
					</div>
				</div>
			</div>
        </main>
		
		<!-- bas de page -->
		<footer>
			<div class='ens' align='center'>
				<p id='ensavoir1'><a class='ensavoir' href="inscrip_id9.php">> Rejoins nous</a></p>
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
							<?php include("../../Controleur/database_resource/texts/responsable_contact.php"); ?>
						</p>
						<p class="coord">
                            <?php include("../../Controleur/database_resource/texts/coordinatrice_contact.php"); ?>
						</p>
					</div>
				</div>
				<div>
					<img class='icon_part' src="../Ressource/Image/Icon/io.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/maison.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/métiers.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/republi.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/proman.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/agricole.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/entre.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/epide.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/cidff.png" alt=''/>
					<img class='icon_part' src="../Ressource/Image/Icon/carbu.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/arts.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/cite_cosmetique.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/cc.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/cci.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/pol.png" alt=""/>
					<img class='icon_part' src="../Ressource/Image/Icon/apc.png" alt=""/>
				</div>
				<h1 id="titreS">ASSOCIATION <font color="#f5b500">|</font>ID<font color="#f5b500">9</font></h1>
			</div>
		</footer>
        <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23214.57404606847!2d5.3761524!3d43.3389188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce1a9dba447f4c36!2sCit%C3%A9+de+la+Cosm%C3%A9tique!5e0!3m2!1sfr!2sfr!4v1557838420630!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        <script src="../Js/jquery-3.3.1.js" type="text/javascript"></script>
		<script src="../Js/formation.js" type="text/javascript"></script>
		<?php include("../../Controleur/database_resource/number_of_all/javascript/formation.js.php"); ?>
	</body>
</html>
