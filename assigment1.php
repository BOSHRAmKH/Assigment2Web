<?php
//1

$age=21;//integer
$name="boshra";//string
$year=3.5;//float
$isGraduated=false;//boolean
echo "<br>";
//2

var_dump($age);
var_dump($name);
var_dump($year);
var_dump($isGraduated);
echo "<br>";

/*
echo is_int($age);
echo is_string($name);
echo is_float($year);
echo is_bool($isGraduated);*/


//3

echo $age;
echo $name;
echo $year;
echo $isGraduated;
//4
echo "<br>";
function testFun(){
    $testData="TestData";
    echo $testData;}
    testFun();
    echo "<br>";
//5
    $data="Iam Boshra , I Live in Gaza";

    $len = strlen($data);
    echo $len;
echo "<br>";
    $upper=strtoupper($data);
    echo $upper;
echo "<br>";
    $replace=str_replace("Gaza","gaza",$data);
    echo $replace;
echo "<br>";
    $rev= strrev($data);
    echo $rev;
  echo "<br>";  
    $arr=explode(" , " ,$data);
    var_dump($arr);
    echo "<br>";
    //6
    //int to float
    $x1=10;
    $newx1=(float)$x1;
    var_dump($newx1);
    echo "<br>";
    //float to int
$x2=10.55;
    $newx2=(int)$x2;
    var_dump($newx2);
    echo "<br>";
    //string to boolean
$x3="";
    $newx3=(bool)$x3;
    var_dump($newx3);
    echo "<br>";
    //int to boolean
$x4=0;
     $newx4=(bool)$x4;
      var_dump($newx4);
      echo "<br>";
?>