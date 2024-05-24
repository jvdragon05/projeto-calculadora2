<?php

require 'funcoesCalculo.php';
session_start();


    
    if(isset($_POST["selectOperacoes"])){
        
        $OP = $_POST["selectOperacoes"];

        if(isset($_POST["inputNum1"]) && ($_POST["inputNum1"])){
            $n1 = $_POST["inputNum1"];
            $n2 = $_POST["inputNum2"];
            
            if ($OP == "adicao") {
                $r = $n1 . " + " . $n2 . " = " . adicao($n1, $n2);
                echo $r;
                $_SESSION["resultado"] = $r;
                header('location:../index.php');

            }elseif ($OP == "subtracao"){
                $r = $n1 . " - " . $n2 . " = " . sub($n1, $n2);
                echo $r;
                $_SESSION["resultado"] = $r;
                header('location:../index.php');

            }elseif ($OP == "multiplicacao") {
                $r = $n1 . " x " . $n2 . " = " . mult($n1, $n2);
                echo $r;
                $_SESSION["resultado"] = $r;
                header('location:../index.php');

            }elseif ($OP == "divisao") {
                $r = $n1 . " / " . $n2 . " = " . div($n1, $n2);
                echo $r;
                $_SESSION["resultado"] = $r;
                header('location:../index.php');

            }elseif ($OP == "toFahrenheit") {
                $r = $n1 . " X 9/5 + 32 = " . fah($n1);
                echo $r;
                $_SESSION["temperatura"] = $r;
                header('location:../temperatura.php');

            }elseif ($OP == "toCelsius") {
                $r = $n1 . " - 32 / 1.8 = " . cel($n1);
                echo $r;
                $_SESSION["temperatura"] = $r;
                header('location:../temperatura.php');

            }
        }else{
            header("location:../");
        }
    }


    if(isset($_GET["selectOperacoes"])){
        
        $OP = $_GET["selectOperacoes"];

        if(isset($_GET["inputNum3"])){
            $n3 = $_GET["inputNum3"];
            if ($OP == "toCM") {
                $r = $n3 . "m X 100 = " . toCM($n3) . "cm";
                echo $r;
                $_SESSION["medida"] = $r;
                header('location:../conversor.php');

            }elseif ($OP == "toMT") {
                $r = $n3 . "cm / 100 = " . toMT($n3) . "m";
                echo $r;
                $_SESSION["medida"] = $r;
                header('location:../conversor.php');

            }elseif ($OP == "toKM") {
                $r = $n3 . "m / 1000 = " . toKM($n3) . "km";
                echo $r;
                $_SESSION["medida"] = $r;
                header('location:../conversor.php');

            }elseif ($OP == "KM_toMT") {
                $r = $n3 . "km X 1000 = " . KM_toMT($n3) . "m";
                echo $r;
                $_SESSION["medida"] = $r;
                header('location:../conversor.php');

            }
        }
    }
?>