<?php
    $count;

    $sql = new MySQL("SELECT count(*) FROM information_schema.columns WHERE table_name = 'number_of_all'");
    $count = $sql->requestValueFromSQL();

    echo "<form style='margin-top: 56px;
    margin-bottom: 56px;' id='form_added' action='/' method='post'>\n<table style='width: 100%; padding-bottom: 24px; border-spacing: 0px;'>\n";
    echo "<tr style='height: 48px;
    font-size: 16px;
    color: rgba(255, 255, 255, 0.5);
    font-family: helvetica; text-align: left;'>\n</tr>";

    $title = array("Nombre de femme", "Nomde de session", "Nombre de structure", "Pourcentage de réussite", "Nombre d&#39;atelier", "Nombre de salle de sport", "Nombre de salle avec 20 postes informatique", "Nombre de salle de conférence");
    $column = array('number_of_wife', 'number_of_session', 'number_of_structure', 'percent_success', 'number_of_workshop', 'number_of_room_sporting', 'number_of_room_info', 'number_of_room_conference');
    $id = 1;

    for ($i = 0; $i < $count; $i++)
    {
        $sql = new MySQL("SELECT {$column[$i]} FROM number_of_all");
        $value = $sql->requestValueFromSQL();

        echo "<tr style='color: rgba(255, 255, 255, 0.5); font-family: helvetica; height:72px;'><td style='width:100%;'><p class='p_{$id}'>{$title[$i]} : {$value}</p></td><td style='display:flex;margin:16px 0px;'><textarea id='textarea_{$id}' cols='40' rows='2' style='margin-left:64px; padding: 12px 20px;border: 1px solid #222222;background-color: #333333;color: #FFFFFF; outline: none;' placeholder=\"Un champ vide n'est pas accepté\">{$value}</textarea><a id='a_{$id}' href='#!' onclick='javascript:replaceNumber({$id}, \"{$column[$i]}\", \"{$title[$i]}\");' style='border-radius: 30px; border: 1px solid rgb(245, 181, 0); border-image: none; color: rgb(245, 181, 0); padding-top: 18px; padding-right: 24px; padding-left: 24px; text-decoration: none; margin-right: 36px; margin-left: 36px; background-color: rgb(34, 34, 34);'>Remplacer</a></td></tr>";
        
        $id++;
    }
    
    echo "</table>\n</form>"
?>