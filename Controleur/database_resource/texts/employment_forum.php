<?php
    $id = 9;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key9", function($array_decoded)
    {
        echo "<font color='#f5b500'>-7 Forum </font>{$array_decoded[0]}<br><font color='#f5b500'>-1 Forum </font>{$array_decoded[1]}<br><font color='#f5b500'>-1 Forum </font>{$array_decoded[2]}<br><font color='#f5b500'>-1 Forum </font>{$array_decoded[3]}<br><font color='#f5b500'>-1 Forum </font>{$array_decoded[4]}<br><font color='#f5b500'>-1 Salon </font>{$array_decoded[5]}";
    });
?>