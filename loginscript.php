<?php

session_start();

include "run_once/dbconn.php";

//pull from login form.
$loginuseremail = $_POST['email'];
$loginpassword = $_POST['password'];



//check the database 
$dbq = "SELECT * FROM FHNI_Users WHERE Email = '$loginuseremail' AND Password = '$loginpassword'";

echo $dbq;

$res = $dbconn->query($dbq);

if(!$res) {
    echo $dbconn->error;
} 



$check = $res->num_rows;

if($check>0) {

    $single =$res->fetch_assoc();

    $_SESSION['userloginvalid']=$single['userID'];

    //echo $_SESSION['userloginvalid'];

    header("Location: displayUser.php");

} else {

    header("Location: login.php");

}

$admin = "SELECT * FROM FHNI_Users WHERE Email = '$loginuseremail' AND Password = '$loginpassword' AND userTypeID = '2'";


$res = $dbconn->query($admin);

if(!$res) {
    echo $dbconn->error;
}

$check = $res->num_rows;

if($check>0) {

    $single =$res->fetch_assoc();

    $_SESSION['admin']=$single['userID'];

    //echo $_SESSION['userloginvalid'];

    header("Location: dashboard.php");

} else {

    header("Location: displayUser.php");

}

?>

