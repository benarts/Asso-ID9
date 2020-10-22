<?php
    $id = 0;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key1", function($array_decoded)
    {
        echo "Début: {$array_decoded[0]} / fin: {$array_decoded[1]}";
    });
?>