<?php
    $number;

    $sql = new MySQL("SELECT number_of_room_sporting FROM number_of_all");
    $number = $sql->requestValueFromSQL();

    echo $number;
?>