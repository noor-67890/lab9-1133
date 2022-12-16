<?php
$email = $_GET["email"];
$Password = $_GET["password"];
if ($email=="" || $Password==""){
    echo "Email and password are not left blank";
    echo "<br>";
}
if(!empty($_GET["checkbox"])){
    echo "True";
    echo "<br>";
}
if(empty($_GET["checkbox"])){
    echo "False";
    echo "<br>";
}
if(isset($_GET["radio"])){
    echo"Selected Radio Buttons is :".$_GET["radio"];
    echo "<br>";
} 
function sortArray($array,$sortType){
    if($sortType=="ASC"){
        sort($array);}
    if($sortType=="DESC"){
        rsort($array);}
    foreach($array as $a){
        echo "$a <br>";
    }
    }
$a=array(1,2,3,4,5,6,7,8,9,10,11);
sortArray($a,"DESC");
if ($_GET['radio'] == "option1") {
    echo "Q5";
    echo "<br>";
    $random_number_array = range(0, 100);
    shuffle($random_number_array);
    foreach ($random_number_array as $a) {
        echo "$a,";
    }
    echo "</br>";
    sortArray($random_number_array, "DES");
}
if ($_GET['radio'] == "option2") {
    echo "<br>Q6</br>";
    $limit_random_array_values = range(0, 100);
    shuffle($limit_random_array_values);
    $random_array_value = array_slice($limit_random_array_values, 0, 100);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
    reset($random_array_value);
    echo "<pre>";
    print_r($random_array_value);
    echo "</pre>";
}

















?>

