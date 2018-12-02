<?php
// & will change the original variable value
    function modify(&$a) {
        $a =1;
    }
    $a = 2;
    modify($a);
    print_r($a);

?>
