<?php


$x1 = array(
    "caption"=>"Data Donasi Barang 2022",
    "subCaption"=>"DIGIHELP",
    "xaxisName"=>"Bulan",
    "yAxisName"=>"Jumlah Donasi",
    "theme"=>"fint");
$x2 = array(
         array("label"=>"Januari-Maret","value"=>"7"),
         array("label"=>"April-Juni","value"=>"10"),
         array("label"=>"Juli-September","value"=>"12"),
         array("label"=>"Oktober-Desember","value"=>"11"),
    );
$x = array(
    "chart"=>$x1,
    "data"=>$x2
);

$y = json_encode($x);
echo $y;
?>