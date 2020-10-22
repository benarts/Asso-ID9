<?php
    $id = 4;
    $response;

    $sql = new MySQL("SELECT current_text FROM texts WHERE id = $id");
    $response = $sql->requestValueFromSQL();

    $sql->decodeArray($response, "key4", function($array_decoded)
    {
        echo "-{$array_decoded[0]}<br>
        -{$array_decoded[1]}<br>
        -{$array_decoded[2]}<br>
        -{$array_decoded[3]}<br>
        -{$array_decoded[4]}";
    });
?>