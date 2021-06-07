<?php

//include the connection object.
include ("dbconn.php");

$file = "shelterdogscleandata.csv";

if (file_exists($file)) {

    $filepath = fopen($file, "r");
    
    while( ($line = fgetcsv($filepath)) !==FALSE) {

       

        $insert = "INSERT INTO FHNI_Dog (name, age, sex, breed, adoptableFrom, posted, color, coat, size, neutered, housebroken, likesPeople, likesChildren, 
                        getAlongMales, getAlongFemales, getAlongCats, keepin, postcode) 
                            VALUES ( '{$line[0]}','{$line[1]}','{$line[2]}','{$line[3]}','{$line[4]}','{$line[5]}','{$line[6]}','{$line[7]}','{$line[8]}'
                            ,'{$line[9]}','{$line[10]}','{$line[11]}','{$line[12]}','{$line[13]}','{$line[14]}','{$line[15]}','{$line[16]}','{$line[17]}')";

        $result = $dbconn->query($insert);

       if (!$result) {
           echo $dbconn->error;
            die();

       }
       

    }

} else echo "file not found";



?>