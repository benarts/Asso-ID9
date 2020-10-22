<?php
    $id = 7;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key7", function($array_decoded)
    {
        echo "<font color='#f5b500'>{$array_decoded[0]}</font><br>
        <font color='#f5b500'>1.</font> {$array_decoded[1]} <br>
        <font color='#f5b500'>2.</font> {$array_decoded[2]} <br>
        <font color='#f5b500'>3.</font> {$array_decoded[3]} <br>
        <font color='#f5b500'>4.</font> {$array_decoded[4]} <br>
        <font color='#f5b500'>5.</font> {$array_decoded[5]} <br>
        <font color='#f5b500'>6.</font> {$array_decoded[6]} <br>
        <font color='#f5b500'>7.</font> {$array_decoded[7]}";
    });
?>