<?php
    require("../../Model/database/MySQL.php");

    if (!empty($_POST))
    {
        if (!empty($_POST["id"]) || (!empty($_POST["value_textarea"]) && !empty($_POST["source"])))
        {
            $id = $_POST["id"];
            $value = $_POST["value_textarea"];
            $source = $_POST["source"];

            $sql = new MySQL("UPDATE texts SET current_text = json_replace(current_text, replace(json_search(current_text, 'one', '$source'), '\"', ''), '$value') WHERE id = $id");
            $sql->execute();
        }
        else
        {
            echo "value empty";
        }
    }
    else
    {
        echo "vide;";
    }
?>