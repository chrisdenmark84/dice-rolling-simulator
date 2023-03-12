<?php

class generate
{

    private $result = 0;

    function generateRolls($num_rolls)
    {
        if ($num_rolls > 1000) {
            exit("<div class=\"result\"><h3>Error</h3><p>Roll less dice, you mad man</p>");
        }
        $count = 1;

        $rolls = [];

        while ($count <= $num_rolls) {

            $result = rand(1, 6);

            $rolls[$count]['die'] = $count;
            $rolls[$count]['result'] = $result;
            $count++;
        }
        return $rolls;
    }
};
