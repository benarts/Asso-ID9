<?php
    $number;

    $sql = new MySQL("SELECT number_of_workshop FROM number_of_all");
    $number = $sql->requestValueFromSQL();

    echo $number;
?>