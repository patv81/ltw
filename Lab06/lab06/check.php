<?php 
$fname;
$lname;
$email;
$pwd;
$gender;
$country;
$about;
$year;
$month;
$day;
$fname=    trim($_POST["fname"]);
$lname=    trim($_POST["lname"]);
$email=    trim($_POST["email"]);
$pwd=    trim($_POST["pwd"]);
$gender=    trim($_POST["gender"]);
$country=    trim($_POST["country"]);
$about=    trim($_POST["about"]);
$year=    trim($_POST["yyyy"]);
$month=    trim($_POST["mm"]);
$day=    trim($_POST["dd"]);
function checkStr($str, $from, $to){
    if(strlen($str)<$from && strlen($str)>$to){
        return false;
    }
    return true;
}
function checkEmail($str){
    $pattern = "/.+?@.+?\..+/i";
    if (preg_match($pattern,$str)){
        return true;
    }
    return false;
}

$error=[];

if (!checkStr($fname,2,30)){
    $error[]="error in first name";
    
}
if (!checkStr($lname,2,30)){
    $error[]="error in last name";
}
if (!checkEmail($email)){
    $error[]="error in emil";
}
if (!checkStr($pwd, 2, 30)) {
    $error []= "error in password";
}
$imonth=intval($month);
$iday =intval($day);
$iyear=intval($year);
if(!checkdate($imonth,$iday,$iyear) && intval($year)<1900 && intval($year) > intval(date("Y"))){
    $error[] ="error in birthday";
}
if (!in_array($gender,["male", "female","unknown"])){
    $error[] = "error in gender";
}
if (!in_array($gender, ["male", "female", "unknown"])) {
    $error[] = "error in gender";
}
if (intval($country) <1 && intval($country) > 5){
    $error[] = "error in country";
}
if (!checkStr($about,1,10000)){
    $error[] ="error in about";
}