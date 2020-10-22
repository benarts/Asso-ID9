<?php
    require("../../Model/database/MySQL.php");

    if (!empty($_POST))
    {
        if (!empty($_POST["id"]) && !empty($_POST["column"]) && !empty($_POST["value_textarea"]))
        {
            $id = $_POST["id"];
            $column = $_POST["column"];
            $value = $_POST["value_textarea"];

            $sql = new MySQL("UPDATE number_of_all SET $column = $value");
            $sql->execute();
        }
    }
?>