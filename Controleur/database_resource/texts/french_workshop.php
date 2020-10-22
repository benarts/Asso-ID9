<?php
    $id = 5;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key5", function($array_decoded)
    {
        echo "{$array_decoded[0]}";
    });
?>