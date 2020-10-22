<?php
    $id = 8;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key8", function($array_decoded)
    {
        echo "<font color='#f5b500'>{$array_decoded[0]}</font><br>{$array_decoded[1]}<br><font color='#f5b500'>{$array_decoded[2]}</font><br>{$array_decoded[3]}<br><font color='#f5b500'>{$array_decoded[4]}</font><br>{$array_decoded[5]}";
    });
?>