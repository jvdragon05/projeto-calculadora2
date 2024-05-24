<?php
    function adicao($n1, $n2){
        $r = $n1 + $n2;
        return($r);
    }
    function sub($n1, $n2){
        $r = $n1 - $n2;
        return($r);
    }
    function mult($n1, $n2){
        $r = $n1 * $n2;
        return($r);
    }
    function div($n1, $n2){
        $r = $n1 / $n2;
        return($r);
    }
    function fah($n1){
        $r = $n1 * 1.8;
        $r2 = $r + 32;
        return($r2);
    }
    function cel($n1){
        $r = $n1 - 32;
        $r2 = $r / 1.8;
        return($r2);
    }
    function toCM($n3){
        $r = $n3 * 100;
        return($r);
    }
    function toMT($n3){
        $r = $n3 / 100;
        return($r);
    }
    function toKM($n3){
        $r = $n3 / 1000;
        return($r);
    }
    function KM_toMT($n3){
        $r = $n3 * 1000;
        return($r);
    }
?>