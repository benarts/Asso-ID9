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
        <title>Information</title>
		<link rel="icon" type="image/png" href="../Ressource/Image/Icon/id9.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../Css/css_special/police.css">
		<link rel="stylesheet" href="../Css/css_information/information.css">
    </head>
    <body>
        <!-- haut de page -->
        <header>
			<h1 class="qui">Qui sommes<font color="#f5b500">-nous!!!</font></h1>
			<img class="icon_id9" src="../Ressource/Image/Icon/id92.png" alt=""/>
        </header>
		
        <!-- la barre de navigation -->
        <div class="anime-menu" align='center'>
            <img class="barre" src="../Ressource/Image/Icon/barre.png" alt=""/>
            <nav>
                <ul class="menu">
                    <li class="menu"><a href="../../index.php"><p class="d">Associations ID9</p></a></li>
                    <li class="menu"><a href="forma_id9.php"><p class="d">Envie d'emploi</p></a></li>
					<li class="menu"><a href="inscrip_id9.php"><p class="d">Prescription</p></a></li>
                    <li class="menu"><a href="#" onclick='ScrollToInfo();'><p class="d">Contact</p></a></li>
					<?php if ($_SESSION["admin"] == 1){ echo '<li class="menu"><a href="administration/form_admin.php"><p class="d">Administration</p></a></li>'; } ?>
                </ul>
            </nav>
        </div>
		
        <!-- corp de la page -->
        <main>
			<div class="sect_2" align="center">
				<h1 class="texteC">La création</h1>
				<div class="section_block">
					<h1 class="date">Mai 2015</h1>
					<p class="text15">
						5 femmes, aux parcours atypiques se rencontrent.
					</p>
					<div class="bar"></div>
				</div>
				<div class="section_block">
					<h1 class="date">Janvier 2016</h1>
					<p class="text16">
						Création d'ID9.
					</p>
					<div class="bar2"></div>
				</div>
				<div class="section_block">
					<h1 class="date">Octobre 2017</h1>
					<p class="text17">
						Lancement de la première action  de terrain.
					</p>
					<div class="bar3"></div>
				</div>
			</div>
			<div class="sect_3" align="center">
				<div class="section_block1">
					<h1 class="text_info">Des femmes</h1>
					<p class="">
						Sans qualification</br>
						Sans expérience professionnelle</br>
						Habitant dans les QPV</br>
					</p>
				</div>
				<div class="section_block1">
					<h1 class="text_info">EN…VIE D’EMPLOI !</h1>
					<p class="">
						Ateliers pluriels en collectif</br>
						Coaching individuel</br>
					</p>
				</div>
				<div class="section_block1">
					<h1 class="text_info">1 Emploi</h1>
					<p class="">
						Notre objectif: </br>
						70% de sorties </br>
						positives</br>
					</p>
				</div>
			</div>
			<div class="sect_4" align="center">
				<div class="section_block2">
					<img class="img" src="../Ressource/Image/Img/abc_id9_hulot_yoga.jpg" alt=""/>
				</div>
				<div class="section_block2">
					<h1 class="ate">12 ateliers Se révéler :</h1>
					<p class="text_atelier">
						Gagner en confiance en soi et définir la matrice de ses compétences
						36 H
					</p>
				</div>
				<div class="section_block2">
					<h1 class="ate">12 ateliers 
						S’adapter à son contexte :</h1>
					<p class="text_atelier"> 
						Connaître le marché pour s’y adapter
						18 H
					</p>
				</div>
				<div class="section_block2">
					<img class="img" src="../Ressource/Image/Img/abc_id9_hulot_atr.jpg" alt=""/>
				</div>
				<div class="section_block2">
					<img class="img" src="../Ressource/Image/Img/abc_id9_hulot_atr1.jpg" alt=""/>
				</div>
				<div class="section_block2">
					<h1 class="ate">12 ateliers Structurer sa démarche : </h1>
					<p class="text_atelier">
						Définir sa stratégie marketing de soi
						18 H
					</p>
				</div>
				<div class="section_block2">
					<h1 class="ate">
						Réaliser son projet 
						24H
					</h1>
				</div>
				<h1 class="moi">3 mois intensifs : 8h/Semaine* + Travail personnel inter session + 3 mois de suivi  – Total : 102H/participant</h1>
			</div>
        </main>
		
		<!-- bas de page -->
		<footer>
			<div class='ens' align='center'>
				<button class='ensavoir'>
					<a href="inscrip_id9.php">> Rejoins nous</a>
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
	</body>
</html>