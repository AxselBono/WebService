<?php

#//echo "<br>Module GETPARAMS";

// function test(){}
$method="";
$p1="";
$p2="";
$p3="";

$res="";

$err=0;
$err_desc="";
$date=date("Y-m-d h:i:s a", time());

if(isset($_GET["method"])){
    $method=$_GET["method"];
}

if(isset($_GET["p1"])){
    $p1=$_GET["p1"];
}

if(isset($_GET["p2"])){
    $p2=$_GET["p2"];
}

if(isset($_GET["p3"])){
    $p3=$_GET["p3"];
}

#//echo "<br>__________________________";
#//echo "<br>method=".$method;
#//echo "<br>p1=".$p1;
#//echo "<br>p2=".$p2;
#//echo "<br>p3=".$p3;


?>