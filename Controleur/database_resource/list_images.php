<?php
    $count;

    $sql = new MySQL("SELECT COUNT(id) FROM admin");
    $count = $sql->requestValueFromSQL();

    echo "<form style='margin-top: 56px;
    margin-bottom: 56px;
    ' id='form_utils' action='/' method='post'>\n<table style='width: 100%; padding-bottom: 24px; border-spacing: 0px;'>\n";
    echo "<tr style='height: 48px;
    font-size: 16px;
    color: rgba(255, 255, 255, 0.5);
    font-family: helvetica; text-align: left;'>\n<th style='padding-left: 24px;'>Image</th>\n</tr>";

    $sql = new MySQL("SELECT id, image_name FROM admin");
    $sql->createList($count, function($rows)
    {
        echo "<tr class='class_tr' style='height: 248px;'>\n<td style='padding-left: 24px; border-top: 1px solid rgba(255, 255, 255, 0.08);'><div style='height: 200px; width: fit-content; overflow: hidden; border-radius:4px;'><img style='height: 200px; transform: scale(1.2);' id='images_{$rows['id']}' src='../../Ressource/Image/Img/{$rows['image_name']}.jpg'></div></td>\n<td style='text-align:right;padding-right: 24px; border-top: 1px solid rgba(255, 255, 255, 0.08);'>\n<input type='file' id='{$rows['id']}' name='{$rows['id']}' accept='image/png, image/jpeg'><a href='#!' onclick='javascript:uploadFileImages({$rows['id']});' style='border-radius: 30px; border: 1px solid rgb(245, 181, 0); border-image: none; color: rgb(245, 181, 0); padding-top: 18px; padding-bottom:18px; padding-right: 24px; padding-left: 24px; text-decoration: none; margin-right: 36px; margin-left: 36px; background-color: rgb(34, 34, 34); font-family:helvetica;'>Déposer le fichier</a>\n</td>\n</tr>";
    });

    echo "</table>\n</form>"
?>