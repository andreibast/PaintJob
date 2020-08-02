<?php


    $wallArea = 0;
    $wallArea1 = $wallArea2 = false;

    if(isset($_POST['wallArea1'])){
        $wallArea1= $_POST['wallArea1'];
    }
    if(isset($_POST['wallArea2'])){
        $wallArea2= $_POST['wallArea2'];
    }
    
    if(!is_numeric($wallArea1)){
        $wallArea1 = 0;
    }
    if(!is_numeric($wallArea2)){
        $wallArea2 = 0;
    }


    if(!strlen($wallArea1) == 0 ||  !strlen($wallArea2) == 0){
        if (isset($_POST["calcWallArea"])){
            $wallArea  = $wallArea1 * $wallArea2;
        }
    }
?>