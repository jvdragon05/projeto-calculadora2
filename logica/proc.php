<?php

    require 'funcoesCalculo.php';

    if(isset($_POST["selectOperacoes"])){
        
        $OP = $_POST["selectOperacoes"];

        if(isset($_POST["inputNum1"]) && ($_POST["inputNum1"])){
            $n1 = $_POST["inputNum1"];
            $n2 = $_POST["inputNum2"];
            if ($OP == "adicao") {
                $r = $n1 . " + " . $n2 . " = " . adicao($n1, $n2);
                echo $r;

            }elseif ($OP == "subtracao"){
                $r = $n1 . " - " . $n2 . " = " . sub($n1, $n2);
                echo $r;

            }elseif ($OP == "multiplicacao") {
                $r = $n1 . " x " . $n2 . " = " . mult($n1, $n2);
                echo $r;

            }elseif ($OP == "divisao") {
                $r = $n1 . " / " . $n2 . " = " . div($n1, $n2);
                echo $r;

            }
        }else{
            header("location:../");
        }
    }
?>