<?php
    $number;

    $sql = new MySQL("SELECT percent_success FROM number_of_all");
    $number = $sql->requestValueFromSQL();

    echo $number;
?>