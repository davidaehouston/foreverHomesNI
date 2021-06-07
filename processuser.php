<?php

/*
$usertype = $_POST['usertype'];
$userfirstname = $_POST['userfirst'];
$userlastname = $_POST['userlast'];
$useremail = $_POST['useremail'];
$userpassword = $_POST['usertype'];

echo " USER TYPE : $usertype, USER FIRST NAME : $userfirstname, USER LAST NAME : $userlastname, USER EMAIL : $useremail, USER PASSWORD : $userpassword";

$newuser = array();
*/



$usertype = $_POST['usertype'];
$userfirstname = $_POST['userfirst'];
$userlastname = $_POST['userlast'];
$useremail = $_POST['useremail'];
$userpassword = $_POST['userpword'];


$userendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?createuser";


$userdata = http_build_query(

    array(
        'usertype'=>$usertype,
        'userfirst'=>$userfirstname,
        'userlast'=>$userlastname,
        'useremail'=>$useremail, 
        'userpword'=>$userpassword)

);


$opts= array(
    'http' => array(
        'method'=>'POST',
        'header'=>'Content-Type: application/x-www-form-urlencoded',
        'content'=>$userdata
    )
);


$context = stream_context_create($opts);

$result = file_get_contents($userendpoint, false, $context);

$response = json_decode($result,true);

echo "<h3>{$response['message']}</h3>";


?>

