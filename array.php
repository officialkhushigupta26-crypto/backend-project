<?php

//index array

$name = ["khushi","mohan","rahul","poonam"];

// echo $name[2];
// echo "<ol type='a'>";
// foreach ($name as $n)
// {
//     echo "<li>" $n "</li>";
// }
// echo "</ol>";

//associative array

// $student = [
//     "name" => "khushi",
//     "age" => 20,
//     "course" => "MDCE"
// ];

// echo $student;

// foreach ($student as $s)
//     {
//         echo $s."<br>";
//     }

//multidimentional array

// $student = [
//     101 =>[
//         "name" =>"rahul",
//         "age" => 20,
//         "course" => "MDCE"
//     ],
//     102 =>[
//         "name" => "mohit",
//         "age" => 30,
//         "course" => "abce"
//     ]
// ];

// echo $student[101]["name"];

// echo "<pre>";
// print_r ($student);
// echo "/pre>";

$name = ["doe","ana","luis","megan","sam",105,106,107,108];

// $rollno= array_filter($name,"is string");
// print_r($rollno);

echo array_search("ana",$name)."<br>";
echo count($name)."<br>";
echo in_array("khushi",$name)."<br>";
echo "<pre>";
print_r($name);
array_pop($name);
array_pop($name);
print_r($name);
array_push($name,"khushi");
print_r($name);
array_shift($name);
print_r($name);
array_unshift($name,"khushi");
print_r($name);

echo "</pre>";

$mess="Php is a scripted language and its also have a many frature";
echo str_replace("Php","Mysql",$mess);
echo strtoupper($mess);
echo strtolower($mess);
?>