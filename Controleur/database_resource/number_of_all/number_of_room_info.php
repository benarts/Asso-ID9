<?php
    $number;

    $sql = new MySQL("SELECT number_of_room_info FROM number_of_all");
    $number = $sql->requestValueFromSQL();

    echo $number;
?>