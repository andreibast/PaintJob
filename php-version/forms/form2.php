<?php

    $totalSumArea = 0;
    $sum1 = $sum2 = $sum3 = $sum4 = $sum5 = $sum6 = $sum7 = $sum8 = 0;

    if(isset($_POST['sum1'])){
        $sum1= $_POST['sum1'];
    }
    if(isset($_POST['sum2'])){
        $sum2= $_POST['sum2'];
    }

    if(isset($_POST['sum3'])){
        $sum3= $_POST['sum3'];
    }

    if(isset($_POST['sum4'])){
        $sum4= $_POST['sum4'];
    }

    if(isset($_POST['sum5'])){
        $sum5= $_POST['sum5'];
    }

    if(isset($_POST['sum6'])){
        $sum6= $_POST['sum6'];
    }

    if(isset($_POST['sum7'])){
        $sum7= $_POST['sum7'];
    }

    if(isset($_POST['sum8'])){
        $sum8= $_POST['sum8'];
    }

    if(strlen($sum1) == 0 || is_string($sum1) ==0 || !is_numeric($sum1)){
        $sum1= 0;
    }
    if(strlen($sum2) == 0 || is_string($sum2) ==0 || !is_numeric($sum2)){
        $sum2= 0;
    }
    if(strlen($sum3) == 0 || is_string($sum3) ==0 || !is_numeric($sum3)){
        $sum3= 0;
    }
    if(strlen($sum4) == 0 || is_string($sum4) ==0 || !is_numeric($sum4)){
        $sum4= 0;
    }
    if(strlen($sum5) == 0 || is_string($sum5) ==0 || !is_numeric($sum5)){
        $sum5= 0;
    }
    if(strlen($sum6) == 0 || is_string($sum6) ==0 || !is_numeric($sum6)){
        $sum6= 0;
    }
    if(strlen($sum7) == 0 || is_string($sum7) ==0 || !is_numeric($sum7)){
        $sum7= 0;
    }
    if(strlen($sum8) == 0 || is_string($sum8) ==0 || !is_numeric($sum8)){
        $sum8= 0;
    }

    if (isset($_POST["calcAllArea"])){
        $totalSumArea  = $sum1 + $sum2+ $sum3+ $sum4+ $sum5+ $sum6+ $sum7+ $sum8;
    } 
?>