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

    $incressDay = 0;
    $incressMonth = 0;
    
    // day condition
    if($Cday > $uday){
        $resultday = $Cday - $uday;
    }else if($uday == $Cday){
        $resultday = $Cday - $uday;
    }else{
        $resultday = ($Cday+$monthArray[$umonth-1]) - $uday;
        for ($i=0; $i < 1; $i++) { 
            $incressDay++;
        }
    }

    // month calculation
    if($cmonth > $umonth){
        if($incressDay == 1){
            $resultMonth = ($cmonth - 1) - $umonth; 
        }else{
            $resultMonth = $cmonth - $umonth;
        }
    }else if($umonth == $cmonth){
        if($incressDay == 1){
            $resultMonth = ($cmonth+12-1) - $umonth;
            for ($i=0; $i < 1; $i++) { 
                $incressMonth++;
            }
        }else{
            $resultMonth = $cmonth - $umonth;
        }
    }else{
        if($incressDay == 1){
            $resultMonth = ($cmonth+12-1) - $umonth;
        }else{
            $resultMonth = ($cmonth+12) - $umonth;
        }
        for ($i=0; $i < 1; $i++) { 
            $incressMonth++;
        }
    }

    // year calculation
    if($cyear > $uyear){
        if($incressMonth == 1){
            $resultYear = ($cyear - 1) - $uyear; 
        }else{
            $resultYear = $cyear - $uyear;
        }
    }else if($uyear == $cyear){
        $resultYear = $cyear - $uyear;
    }

    // Year, Years, Month, Months, Day, Days decided
    if($resultYear <= 1){
        $finalyear = $resultYear." Year, ";
    }else{
        $finalyear = $resultYear." Years, ";
    }

    if($resultMonth <= 1){
        $finalMonth = $resultMonth." Month, ";
    }else{
        $finalMonth = $resultMonth." Months, ";
    }

    if($resultday <= 1){
        $finalDay = $resultday." Day ";
    }else{
        $finalDay = $resultday." Days ";
    }

    echo  $finalyear.$finalMonth.$finalDay;

}

?>