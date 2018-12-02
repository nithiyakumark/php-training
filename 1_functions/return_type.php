<?php
// set function return type
declare(strict_types =1);

    function addNumbers(int $a,int $b,bool $printSum):int{
        $sum = $a + $b;
        if($printSum){
            echo 'The sum of '.$a.' + '.$b.' = '.$sum;
        }else{
            echo 'Fails';
        }
    }
    function modify(&$a) {
        $a =1;
    }
    $a = 2;
    modify($a);
    print_r($a);
    addNumbers(1,5,true); //retrun value as 6
    addNumbers(1,4,true); // it fails when strict_type is 1
    addNumbers(1,'hi',true); //it always fails
?>
