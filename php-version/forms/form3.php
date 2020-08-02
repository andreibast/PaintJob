<?php

    $totalAreaNeeded = $totalBucketsNeeded = $totalBucketsNeededRounded = $totalPrice = 0;
    $totalArea = $neededLayers = $toolsPrice = $leftoverPaintOld = $newBucketLiters = $newBucketPrice = $newBucketCoverage = 0;

    if(isset($_POST['totalArea'])){
        $totalArea= $_POST['totalArea'];
    }
    if(isset($_POST['neededLayers'])){
        $neededLayers= $_POST['neededLayers'];
    }
    if(isset($_POST['toolsPrice'])){
        $toolsPrice= $_POST['toolsPrice'];
    }
    if(isset($_POST['leftoverPaintOld'])){
        $leftoverPaintOld= $_POST['leftoverPaintOld'];
    }
    if(isset($_POST['newBucketLiters'])){
        $newBucketLiters= $_POST['newBucketLiters'];
    }
    if(isset($_POST['newBucketPrice'])){
        $newBucketPrice= $_POST['newBucketPrice'];
    }
    if(isset($_POST['newBucketCoverage'])){
        $newBucketCoverage= $_POST['newBucketCoverage'];
    }

    if (isset($_POST["calculateAll"])){
        $totalAreaNeeded  = $neededLayers * $totalArea; //total liters needed
        $totalBucketsNeeded = (abs($totalAreaNeeded) / $newBucketCoverage) +$leftoverPaintOld;//total buckets needed
        $totalBucketsNeededRounded = abs(round($totalBucketsNeeded, 0,PHP_ROUND_HALF_UP));//total buckets needed rounded
        $totalPrice = abs(($totalBucketsNeededRounded * $newBucketPrice) + $toolsPrice);//total price
    } 
?>