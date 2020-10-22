<?php
    $id = 3;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key3", function($array_decoded)
    {
        echo "<font color='#f5b500'>Coordinatrice:</font><br> 
        {$array_decoded[0]}<br> 
        <font color='#f5b500'>{$array_decoded[1]}</font><br> 
        {$array_decoded[2]}";
    });
?>