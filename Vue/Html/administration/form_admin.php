<?php
	session_start();

    if ($_SESSION["admin"] == 1)
    {
		header("Location: admin.php");
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Page Admin</title>
		<link rel="icon" type="image/png" href="../../Ressource/Image/Icon/id9.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../../Css/css_special/police.css">
		<link rel="stylesheet" href="../../Css/css_admin/formulaire.css">
    </head>
    <body>
        <header>
        </header>
		<div class="connecter" align="center">
			<h2 class="titre1" align="center">PAGE D'ADMINISTRATION</h2>
			<form class="formu1" action="../../../Controleur/database_resource/form_admin.php" method="post">
				<table>
					<tr>
						<td>
							<div class="content_edit">
								<svg width="24" height="24" viewBox="0 0 24 24">
									<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
									<path d="M0 0h24v24H0z" fill="none"/>
								</svg>
								<input class="texteC" type='text' placeholder="E-mail" name="mail"/>
							</div>
							<p class="error_message"><?php echo $_SESSION["error_mail"]; ?></p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="content_edit">
								<svg width="24" height="24" viewBox="0 0 24 24">
									<path d="M0 0h24v24H0z" fill="none"/>
									<path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
								</svg>
								<input class="texteC" type='password' placeholder="Mot de Passe" name="password"/>
							</div>
							<p class="error_message"><?php echo $_SESSION["error_password"]; ?></p>
						</td>
					</tr>
				</table>
				<br/>	
				<input type="submit" name="submit" data-submit="...Envoie en crous" class="connect" value="Connexion"/>
			</form>
			<p class="error_message"><?php echo $_SESSION["error_access"]; ?></p>
		</div>
        <footer>
		</footer>
		
		<script src="../../Js/js_admin/admin.js"></script>
    </body>
</html>