<?php

// $age = 18;

// if($age>=18){
//     echo "You are eligible to vote";
// }
// else{
//     echo "You are not eligible to vote";
// }

$name = ["doe","ana","luis","megan","sam"];
$rollno = [105,106,107,108];

$newarray = array_merge($name,$rollno);
echo "<pre>";
print_r($newarray);
echo "</pre>";

// for($i=1; $i<=5; $i++)
//     {
//         for($j=1;$j<=$i; $j++){
//             echo "* ";
//         }
//         echo "<br>";
//     }
// for($i=5; $i>=1; $i--)
//     {
//         for($j=1; $j<=$i; $j++){
//             echo "* ";
//         }
//         echo "<br>";
//     }

// for($i=1; $i<=5; $i++)
//     {
//         for($j=1; $j<=$i; $j++){
//             echo "@ ";
//         }
//         echo "<br>";
//     }

// for($i=4; $i>=1; $i--)
//     {
//         for($j=1; $j<=$i; $j++){
//             echo "@ ";

//         }
//         echo"<br>";
//     }

$score=50;

if($score>=90){
    echo "Grade A";
}
elseif($score>=80){
    echo "Grade B";
}    
elseif($score>=70){
    echo "Grade C";
}
elseif($score>=60){
    echo "Grade D";
}
elseif($score>=40){
    echo "Grade E";
}
else{
    echo "Grade F";
}

$dayofweek="Monday";

switch($dayofweek){
    case "Monday":
        echo "Today is monday.<br>";
        break;
    case "Tuesday":
        echo "Today is tuesday.<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday.<br>";
        break;
    case "Thursday":
        echo "Today is Thursday.<br>";
        break;
    case "Friday":
        echo "Today is friday.<br>";
        break;
    case "Saturday":
        echo "Today is Saturday.<br>";
        break;
    case "Sunday":
        echo "Today is Sunday.<br>";
        break;
    default:
    echo "Envalid week";
}

echo "<br>";

function getuser($name){
    echo "Welcome ".$name;
}
getuser("khushi");

function sum($num1,$num2){
    $s=$num1*$num2;
    echo $s;
}
sum(2,5);
echo "<br>";

function sayhello($name="Guest",$message="Hello"){
    echo $message. " ".$name."<br>";
}
sayhello("khushi","goodmorning");
sayhello();

// $number=2;
function iseven($number){
    if($number % 2 == 0){
        return true;
    }
    else{
        return false;
    }
}
// echo iseven(2);

function divide(int $numerator , int $denominator) : float{
    if($denominator===0){
        return 0.0;
    }
    return $numerator/$denominator;
}
echo divide(10,3);
echo "<br>";
echo divide(10,2);

?>