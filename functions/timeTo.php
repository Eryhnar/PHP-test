<?php
    function daysTo ($from, $to) {
        $from = strtotime($from);
        $to = strtotime($to);
        $diff = $to - $from;
        return floor($diff / (60 * 60 * 24));
    }
?>