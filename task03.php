<?php 
    function get_shortest($array) {
        
        if ($array == "" || $array == null) {
            return null;
        } else {
            $length = count($array);
            $start = strlen($array[0]);
            $index = 0;
            for ($i = 1; $i < $length; $i++) {
               
                $obj = strlen($array[$i]);
                if ($start > $obj) {
                    $start = $obj;
                    $index = $i;
                } 
            }
            return $array[$index];
        }
    }
?>