<?php
    $id = 6;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key6", function($array_decoded)
    {
        echo "-{$array_decoded[0]}<br>-{$array_decoded[1]}";
    });
?>