<?php
	require("../../Model/database/MySQL.php"); // Join MySQL class
	require("../../Model/utils/InputUtils.php");
	require("../../Model/utils/MessageUtils.php");
	require("../../Model/lib/Exception.php");
    require("../../Model/lib/PHPMailer.php");
    require("../../Model/lib/SMTP.php");
	require("../../Controleur/database_resource/send_files_mail.php");

	session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Prescription</title>
		<link rel="icon" type="image/png" href="../Ressource/Image/Icon/id9.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../Css/css_special/police.css">
		<link rel="stylesheet" href="../Css/css_inscription/inscription.css">
    </head>
    <body>
        <!-- haut de page -->
        <header>
			<h1 class="qui">Page <font color="#f5b500">de prescription</font></h1>
			<img class="icon_id9" src="../Ressource/Image/Icon/id92.png" alt=""/>
        </header>
		
        <!-- la barre de navigation -->
        <div class="anime-menu" align='center'>
            <img class="barre" src="../Ressource/Image/Icon/barre.png" alt=""/>
            <nav>
                <ul class="menu">
                    <li class="menu"><a href="../../index.php"><p class="d">Associations ID9</p></a></li>
					<li class="menu"><a href="forma_id9.php"><p class="d">Envie d'emploi</p></a></li>
					<li class="menu"><a href="info_id9.php"><p class="d">Information</p></a></li>
                    <li class="menu"><a href="#" onclick='ScrollToInscip();' ><p class="d">Contact</p></a></li>
					<?php if ($_SESSION["admin"] == 1){ echo '<li class="menu"><a href="administration/form_admin.php"><p class="d">Administration</p></a></li>'; } ?>
                </ul>
            </nav>
        </div>
		
        <!-- corp de la page -->
        <main>
			<div class="titre_souti" align="center">
				<h1 class="din">Prescription</h1>
				<div class="formul">
					<div class="contact">
						<h2 class="titre_contact" align="center" >Contactez-nous !</h2>
						<form class="contact1" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
						<input id="contactC" type="text" name="lastname" placeholder="Nom" required />							
							<input id="contactC" type="text" name="firstname" placeholder="Prénom" maxlength="50" required />
							<input id="contactC" type="number" name="number" placeholder="Téléphone" required />							
							<input id="contactC" type="email" name="email" placeholder="E-mail" maxlength="50" required />
							<p id="text_pdf">Déposer votre fichie prescritption...</p>
							
							<input id="contactC3" type="file" name="attachment" required />
							<textarea id="contactC2" maxlength="4000" name="edittext" placeholder="Message..." required ></textarea>
							<br/>	
							<input align="center" class="conta" type="submit" name="submit" value="> ENVOYER"/><br/>
							<p class="sending_message"><?php echo $message_error; ?></p>
						</form>
					</div>
					<div class="infomation">
						<a class='insc' href='https://www.aht.li/3381597/prescription.doc'target="_blank">
							> Fiche de prescription
						</a>
						<a class='insc' href='https://www.aht.li/3381626/action.pptx'target="_blank">
							> Présentation
						</a>
						<p class="coord">
							<?php include("../../Controleur/database_resource/texts/responsable_contact.php"); ?>
						</p>
						<p class="coord">
                            <?php include("../../Controleur/database_resource/texts/coordinatrice_contact.php"); ?>
						</p>
					</div>
				</div>
				<h1 id="titreS">ASSOCIATION <font color="#f5b500">|</font>ID<font color="#f5b500">9</font></h1>
			</div>
        </main>
		
		<!-- bas de page -->
		<footer>
			<iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23214.57404606847!2d5.3761524!3d43.3389188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce1a9dba447f4c36!2sCit%C3%A9+de+la+Cosm%C3%A9tique!5e0!3m2!1sfr!2sfr!4v1557838420630!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		    <script src="../Js/jquery-3.3.1.js" type="text/javascript"></script>
			<script src="../Js/formation.js" type="text/javascript"></script>
		</footer>
    </body>
</html>