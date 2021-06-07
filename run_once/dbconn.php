
<?php
 
 
 //Connect to the database.
 $host = "dhouston13.lampt.eeecs.qub.ac.uk";
 $user = "dhouston13";
 $pw = "Ndmk0Rt0xwKJnXFs";
 $db = "dhouston13";
 
/*
 //Connect to MAME
 $host = "localhost";
 $user = "root";
 $pw = "root";
 $db = "FHNI";
 */
 
 //create a connection object.
 $dbconn = new mysqli($host, $user, $pw, $db);
 
 if ($dbconn->connect_error) {
 
      $check = "not connected ".$dbconn->connect_error;
        die();
 
        }else{
 
     $check="Connected to your mysql DB.";
     
 
 }
 
?>

