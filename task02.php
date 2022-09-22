<?php 
function dog_bark(int $woof_nb) {

    while ($woof_nb > 0) {
        if ($woof_nb > 0) {
            print "woof";
            $woof_nb--;
        } if ($woof_nb > 0) {
            print " ";
        }
    }
    print "\n";
}
?>