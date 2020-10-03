<?php

$monthArray = array(31,28,31,30,31,30,31,31,30,31,30,31);

$uyear = 1998;
$umonth = 8;
$uday = 8;

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
      $resultday = $Cday - $uday . " Days ";
}else if($uday == $Cday){
     $resultday = $Cday - $uday . " Days\n";
}else{
     $resultday = ($Cday+$monthArray[$umonth-1]) - $uday . " Days\n";
    for ($i=0; $i < 1; $i++) { 
        $myday++;
    }
}

// month calculation
if($cmonth > $umonth){
    if($myday == 1){
        $resultMonth = ($cmonth - 1) - $umonth . " Months "; 
    }else{
        $resultMonth = $cmonth - $umonth . " Months ";
    }
}else if($umonth == $cmonth){
    if($myday == 1){
        $resultMonth = ($cmonth+12-1) - $umonth . " Month ";
        for ($i=0; $i < 1; $i++) { 
            $mymonth++;
        }
    }else{
        $resultMonth = $cmonth - $umonth . " Month ";
    }
}else{
    if($myday == 1){
        $resultMonth = ($cmonth+12-1) - $umonth . " Months ";
    }else{
        $resultMonth = ($cmonth+12) - $umonth . " Months ";
    }
    for ($i=0; $i < 1; $i++) { 
        $mymonth++;
    }
}

// year calculation
if($cyear > $uyear){
    if($mymonth == 1){
        $resultYear = ($cyear - 1) - $uyear . " Years "; 
    }else{
        $resultYear = $cyear - $uyear . " Years ";
    }
}else if($uyear == $cyear){
    $resultYear = $cyear - $uyear . " Year ";
}


echo  $resultYear, $resultMonth, $resultday;


?>