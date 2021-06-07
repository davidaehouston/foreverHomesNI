<?php

    if(!isset($_SESSION['userloginvalid'])) {

        header("Location: index.php");

    }

    session_start();

    $captureID = $_GET['id'];

    include "run_once/dbconn.php";

    $currentuser = $_SESSION['userloginvalid'];

    $dbq = "SELECT * FROM FHNI_Users WHERE userID = $currentuser";

    $res = $dbconn->query($dbq);

        if(!$res) {

            echo $dbconn->error;
        }

    $userdetails = $res->fetch_assoc();

    $addtofav = "INSERT INTO FHNI_userFavourites (userid, dogid) VALUES ({$userdetails['userID']}, {$captureID})";


    $ressy = $dbconn->query($addtofav);

        if(!$ressy) {
            echo $dbconn->error;
            "favourite not set";
            header("Location: index.php");
                                                    
        } else 
        echo "DOG ADDED";
        header("Location: displayUser.php");



?>