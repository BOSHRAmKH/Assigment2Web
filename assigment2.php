<?php 
echo "Assigment2"."<hr>" ."<hr>";
//ques2
echo "abs-100= " .abs(-100) ."<br>";
$abs=abs(-7+3)+abs(-5)."<br>";
echo "abs(-7+3)+abs(-5)= ";
print $abs; echo "<hr>";
echo "rand()=" .rand()."<br>";
echo "rand(1,10)=".rand(1,10)."<br>";echo "<hr>";
echo"round(56.884457,2)=" .round(56.884457,2)."<br>";
echo "round(pi(),2)=" .round(pi(),2)."<br>";echo "<hr>";
echo "pi()=" .pi()."<br>";
//دالة بتجيب محيط الدائرة
function Circumference ($radius){
return round(2 * pi() * $radius,2);
}
$radius=10;
echo "Radius= ".$radius."<br>";
echo "Circumference= ".Circumference($radius)."<br>";

echo "<hr>";
echo"min(10,50,100)=" .min(10,50,100)."<br>";
echo" max(10,50,100)=" . max(10,50,100)."<br>";
echo "<hr>";
///--------------------------------------
//ques3
define("Massage","Hello World");
echo  "Massage :" . Massage ."<br>";
echo "<hr>";
///--------------------------------------
//ques4
echo "Full path: " . __FILE__ . "<br>";
echo "Directory: " . __DIR__ ."<br>";
echo "<hr>";
///--------------------------------------
//ques5 part1
$variable1= 100;
$variable2=50;
echo "variable1= 10;  variable2=10;";
echo "variable1+variable2= ".($variable1 + $variable2) ."<br>";
echo "variable1-variable2= ".($variable1 - $variable2) ."<br>";
echo "variable1*variable2= ".($variable1 * $variable2) ."<br>";
echo "variable1/variable2= ".($variable1 / $variable2) ."<br>";
echo "variable1%variable2= ".($variable1 % $variable2) ."<br>";
echo "<hr>";
///---------------------------------------------------------
//ques5 part2
echo "variable1 == variable2 = ";
var_dump($variable1 == $variable2) ;
echo "<br>";
echo "variable1 != variable2 = ";
var_dump($variable1 != $variable2) ;
echo "<br>";
echo "variable1 > variable2 = ";
var_dump($variable1 > $variable2) ;
echo "<br>";
echo "variable1 < variable2 = ";
var_dump($variable1 < $variable2) ;
echo "<br>";
echo "variable1 >= variable2 = ";
var_dump($variable1 >= $variable2) ;
echo "<br>";
echo "variable1 <=variable2 = ";
var_dump($variable1 <= $variable2) ;
echo "<hr>";
///---------------------------------------------------
//ques5 part3
echo  "variable1 = " .$variable1. "<br>";
echo "variable1++ = " .$variable1++ ."<br>";
echo "++variable1 = " .++$variable1 ."<br>";
echo  "variable2 = ". $variable2. "<br>";
echo "variable2++ = " .$variable2++ ."<br>";
echo "++variable2 = " .++$variable2 ."<br>";
echo "<hr>";
///------------------------------------------------------
//ques6
$text1= "Hi";
$text2= "Iam boshra, I live in Gaza.";
echo "print this message if length less than from 7 ";
echo "<br>";
echo "text1 =". $text1 ."<br>";
if(strlen($text1)>=7){
    echo "accepted value";
}else{
    echo "rejected value";
}
echo "<hr>";
echo "text2 =". $text2 ."<br>";
if(strlen($text2)>=7){
    echo "accepted value";
}else{
    echo "rejected value";
}echo "<hr>";
//--------------------------------
//ques7
$names =["Ahmad","Omer","Ali","Haney","Samey"];
echo "Array items: "."<br>";
foreach($names as $item){
    echo $item."<br>";
}echo "<hr>";
////part2
sort($names);
echo "Sorted: ";
foreach($names as $item)
{ echo $item."<br>";}
echo "<hr>";
$student=["name"=>"Omer","age"=>"20","major"=>"it","gared"=>"86.55"];
echo"Student information: ";
foreach($student as $stud){
    echo $stud." ,";
echo "<br>";}
echo "Keys and Value: <br>";
foreach($student as $Key=>$value){
    echo $Key ."=> =" . $value . "<br>";}
echo "<hr>";
////-------------------------------------\\
//ques8
function IsEven($numbers)  {
    if($numbers % 2 == 0){
       return true;
    }else{
     return false;
    }
    }
echo"IsEven(4)= ";
IsEven(4); echo"<br>";
echo"IsEven(9)= ";
IsEven(9); echo"<br>";


?>