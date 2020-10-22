<?php
    $count;
    $response;
    $id_textarea = 0;

    $sql = new MySQL("SELECT COUNT(id) FROM texts");
    $count = $sql->requestValueFromSQL();

    echo "<form style='margin-top: 56px;
    margin-bottom: 56px;
    ' id='form_added' action='/' method='post'>\n<table style='width: 100%; padding-bottom: 24px; border-spacing: 0px;'>\n";
    echo "<tr style='height: 48px;
    font-size: 16px;
    color: rgba(255, 255, 255, 0.5);
    font-family: helvetica; text-align: left;'>\n</tr>";

    $titles = array("Acceuil - Date de début et de Fin des sessions", "Acceuil - Numéro de session de projet", "Toutes", "Toutes", "Envie d'emploi - Bloc Emploi/Formation", "Envie d'emploi - Bloc Atelier Français", "Envie d'emploi - Bloc Atelier Théâtre", "Envie d'emploi - Bloc Atelier Yoga", "Envie d'emploi - Bloc Conférences", "Envie d'emploi - Bloc Forum Emploi");

    for ($i = 0; $i < $count; $i++)
    {
        $sql = new MySQL("SELECT current_text FROM texts WHERE id = $i");
        $response = $sql->requestValueFromSQL();

        echo "<tr style='color: #F5B500; font-family: helvetica; height: 72px; transform: translateY(50%);'><td>Page d'emplacement : {$titles[$i]} </td></tr>";

        $sql->decodeArray2($response, "key{$i}", $i, function($array_decoded, $key, $id)
        {
            $length;
            $numerotation = 1;

            $sql = new MySQL("SELECT json_length(current_text, '$.{$key}') FROM texts WHERE id = $id");
            $length = $sql->requestValueFromSQL();

            for ($e = 0; $e < $length; $e++)
            {
                echo "<tr style='color: rgba(255, 255, 255, 0.5); font-family: helvetica; height:72px;'><td><p class='p_{$id}_{$e}'>{$numerotation}. {$array_decoded[$e]}</p></td><td style='display:flex;margin:16px 0px;'><textarea id='textarea_{$id}_{$e}' cols='40' rows='2' style='margin-left:64px; padding: 12px 20px;border: 1px solid #222222;background-color: #333333;color: #FFFFFF; outline: none;' placeholder=\"Un champ vide n'est pas accepté\">{$array_decoded[$e]}</textarea><a id='a_{$id}_{$e}' href='#!' onclick='javascript:replaceText($id, $e, \"$array_decoded[$e]\")' style='border-radius: 30px; border: 1px solid rgb(245, 181, 0); border-image: none; color: rgb(245, 181, 0); padding-top: 18px; padding-right: 24px; padding-left: 24px; text-decoration: none; margin-right: 36px; margin-left: 36px; background-color: rgb(34, 34, 34);'>Remplacer</a></td></tr>";

                $numerotation++;
            }
        });
    }

    echo "</table>\n</form>"
?>