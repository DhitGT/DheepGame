<?php

    function JsonWeapon($type, $reloadspeed, $mag, $rof, $damage,$skin){
        $jsonWp = json_encode([
            "type" => $type, 
            "reloadspeed" => $reloadspeed,
            "mag" => $mag,
            "rof" => $rof,
            "damage" => $damage,
            "skin" => $skin
        ]);

        return $jsonWp;
    }
    function JsonPlayer($skill,$speed,$hp,$skin){
        $jsonWp = json_encode([
            "skill" => $skill,
            "speed" => $speed,
            "hp" => $hp,
            "skin" => $skin
        ]);

        return $jsonWp;
    }

?>