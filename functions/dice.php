<?php
    // function roll_dice($sides = 6, $die = 1) {
    // function roll_dice($sides = 6) {
        // $rolls = [];
        // for ($i = 0; $i < $die; $i++) {
        //     // $rolls[] = rand(1, $sides);
        //     $rolls[] = rand(1);
        // };
        // return $rolls;
        // return rand(1, $sides);
        function roll_dice($sides = 6, $dieNum = 1) {
            $output = "dice rolls: ";
            // $dieNum = 3;
            $total = 0;
            for ($i = 1; $i <= $dieNum; $i++) {
                $roll = rand(1, $sides);
                $total += $roll;
                $output .= "<br>Roll $i: ".$roll;
            }
            $output .= "<br>Total: ".$total."<br>";
            return $output;
        }
?>