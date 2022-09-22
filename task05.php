<?php
    function calc_average($tab) {
        $average =  array_sum($tab)/count($tab);        
        $average = round($average, 1);
        return $average;
    }
?>