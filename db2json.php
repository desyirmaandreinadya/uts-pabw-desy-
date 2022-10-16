<?php

$server ="localhost";
$un = "root";
$ps = "";
$db = "digihelp";
$kon = mysqli_connect($server, $un, $ps, $db);

$hsl = mysqli_query($kon, "SELECT * FROM fondpreneur");

$x1 = array(
    "caption"=>"Data Donasi 2022",
    "subCaption"=>"DIGIHELP",
    "xaxisName"=>"Bulan",
    "yAxisName"=>"Jumlah Donasi",
    "theme"=>"fint");

  $x2 = array();

  $kon = mysqli_connect("localhost","root","","digihelp");
  $hsl = mysqli_query($kon,"SELECT * FROM digihelp");
  while($r = mysqli_fetch_assoc($hsl)){
    $datum = array("label"=>$r['bulan'],"value"=>$r['Jumlah Donasi']);
    array_push($x2,$datum);
  } 

$x = array(
    "chart"=>$x1,
    "data"=>$x2
);

$y = json_encode($x);
echo $y;
?>