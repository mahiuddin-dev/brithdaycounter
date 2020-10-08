<?php

if(isset($_REQUEST["userinput"])){

    $userinput = $_REQUEST["userinput"];

    $dataArrayString = explode("-", $userinput);
    $dataArrayInt = array();

    for($i=0; $i < count($dataArrayString); $i++){
        $dataArrayInt[] = intval($dataArrayString[$i]);
    }

    $monthArray = array(31,28,31,30,31,30,31,31,30,31,30,31);

    $uyear = $dataArrayInt[2];
    $umonth = $dataArrayInt[1];
    $uday = $dataArrayInt[0];

    $cyear = date("Y");
    $cmonth = date("m");
    $Cday = date("d");

    $myday = 0;
    $mymonth = 0;


    $resultday;
    $resultMonth;
    $resultYear;

    // day condition
    if($Cday > $uday){
        $resultday = $Cday - $uday;
    }else if($uday == $Cday){
        $resultday = $Cday - $uday;
    }else{
        $resultday = ($Cday+$monthArray[$umonth-1]) - $uday;
        for ($i=0; $i < 1; $i++) { 
            $myday++;
        }
    }

    // month calculation
    if($cmonth > $umonth){
        if($myday == 1){
            $resultMonth = ($cmonth - 1) - $umonth; 
        }else{
            $resultMonth = $cmonth - $umonth;
        }
    }else if($umonth == $cmonth){
        if($myday == 1){
            $resultMonth = ($cmonth+12-1) - $umonth;
            for ($i=0; $i < 1; $i++) { 
                $mymonth++;
            }
        }else{
            $resultMonth = $cmonth - $umonth;
        }
    }else{
        if($myday == 1){
            $resultMonth = ($cmonth+12-1) - $umonth;
        }else{
            $resultMonth = ($cmonth+12) - $umonth;
        }
        for ($i=0; $i < 1; $i++) { 
            $mymonth++;
        }
    }

    // year calculation
    if($cyear > $uyear){
        if($mymonth == 1){
            $resultYear = ($cyear - 1) - $uyear; 
        }else{
            $resultYear = $cyear - $uyear;
        }
    }else if($uyear == $cyear){
        $resultYear = $cyear - $uyear;
    }

    echo  $resultYear." Year ".$resultMonth." Month ".$resultday." Day";

    }

?>