<?php
    require("../../Model/database/MySQL.php"); // Réquisition

    if (!empty($_POST)) // Voir si le formulaire d'envoie fonctionne
    {
        if (!empty($_POST["id"]) && !empty($_POST["file_name"]) && !empty($_POST["file_upload"])) // Voir si les clés @id, @file_name et @file_upload sont pas vide 
        {
            $id = $_POST["id"];
            $file_name = $_POST["file_name"];
            $file_upload = $_POST["file_upload"];

            if ($id == 1)
            {
                $file_name = "abc_id9_hulot_arts";
            }
            if ($id == 2)
            {
                $file_name = "abc_id9_hulot_atr";
            }
            if ($id == 3)
            {
                $file_name = "abc_id9_hulot_atr1";
            }
            if ($id == 4)
            {
                $file_name = "abc_id9_hulot_autre_info";
            }
            if ($id == 5)
            {
                $file_name = "abc_id9_hulot_CA";
            }
            if ($id == 6)
            {
                $file_name = "abc_id9_hulot_cite";
            }
            if ($id == 7)
            {
                $file_name = "abc_id9_hulot_classe";
            }
            if ($id == 8)
            {
                $file_name = "abc_id9_hulot_demande";
            }
            if ($id == 9)
            {
                $file_name = "abc_id9_hulot_fond";
            }
            if ($id == 10)
            {
                $file_name = "abc_id9_hulot_info";
            }
            if ($id == 11)
            {
                $file_name = "abc_id9_hulot_info1";
            }
            if ($id == 12)
            {
                $file_name = "abc_id9_hulot_infom";
            }
            if ($id == 13)
            {
                $file_name = "abc_id9_hulot_io";
            }
            if ($id == 14)
            {
                $file_name = "abc_id9_hulot_lentreprise";
            }
            if ($id == 15)
            {
                $file_name = "abc_id9_hulot_reunion";
            }
            if ($id == 16)
            {
                $file_name = "abc_id9_hulot_section_presente";
            }
            if ($id == 17)
            {
                $file_name = "abc_id9_hulot_yoga";
            }

            $upload_filepath = "../../Vue/Ressource/Image/Img/$file_name".".jpg";

            unlink($upload_filepath);

            file_put_contents($upload_filepath, base64_decode($file_upload));
        }
    }
?>