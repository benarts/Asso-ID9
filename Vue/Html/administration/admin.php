<?php
    session_start();

    if ($_SESSION["admin"] == 1)
    { }
    else
    {
        header("Location: form_admin.php");
        die();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require("../../../Model/database/MySQL.php") ?>

        <title>Page admin</title>
        <link rel="icon" type="image/png" href="../../Ressource/Image/Icon/id9.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../../Css/css_special/police.css">
		<link rel="stylesheet" href="../../Css/css_admin/admin.css">
    </head>
    <body>
        <!-- haut de page -->
        <header>
			<h1 class="qui">Page<font color="#f5b500">admin</font></h1>
        </header>
		
        <!-- la barre de navigation -->
        <div class="anime-menu" align='center'>
            <img class="barre" src="../../Ressource/Image/Icon/barre.png" alt=""/>
            <nav>
                <ul class="menu">
                    <li class="menu"><a href="../../../index.php"><p class="d">Associations ID9</p></a></li>
                    <li class="menu"><a href="#!" onclick="javascript:logout();"><p class="d">Déconnexion</p></a></li>
                </ul>
            </nav>
        </div>
		
        <!-- corp de la page -->
        <main>
		
            <div class="container_list" id="list_images" align="center">
                <?php require("../../../Controleur/database_resource/list_images.php") ?>
            </div>

            <div class="container_list" id="list_texts" align="left">
                <?php require("../../../Controleur/database_resource/list_texts.php") ?>
            </div>

            <div class="container_list" id="list_texts" align="left">
                <?php require("../../../Controleur/database_resource/list_number_of_all.php") ?>
            </div>

            <div class="progress_upload">
                <p class="progress_upload_message">Mise en ligne en cours...</p>
            </div>
		
        </main>
		
		<!-- bas de page -->
		<footer>
			<div class="titre_souti" align="center">
				<h1 id="titreS">ASSOCIATION ID9</h1>
			</div>
		</footer>

        <style>
            .input_text::placeholder 
            {
                color: red;
                opacity: 1;
            }

            .input_text:-ms-input-placeholder 
            {
                color: red;
            }

            .input_text::-ms-input-placeholder 
            {
                color: red;
            }

            input[type="file" i]
            {
                align-items: baseline;
                background-color: #222222;
                border: 1px solid #f5b500;
                padding: 16px;
                border-radius: 6px;
                color: #f5b500;
                outline: none;
                cursor: pointer;
            }
        </style>

        <script src="../../../Vue/Js/js_admin/admin.js"></script>
    </body>
</html>