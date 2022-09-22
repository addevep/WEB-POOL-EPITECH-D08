<?php
    function sequence(int $seq) {
        $str = '1';
        $new_str = '';
        
        if ($seq == 0) {
            print "1\n";
        } else if ($seq < 0) {
            return;
        } 
        else {
            print "1\n";
            for ($i = 0; $i < $seq; $i++) {
                $length = strlen($str);
                
                for ($j = 0; $j < $length; $j++) {
                    $count = 1;
                    while ($j + 1 < $length && $str[$j] == $str[$j + 1]) {
                        $count++;
                        $j++;
                    }
                    $new_str .= $count.$str[$j];
            }
            $str = $new_str;
            echo "$str\n";
            $new_str = '';
        }
    }
}
?>