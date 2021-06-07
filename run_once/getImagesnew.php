<?php

include "dbconn.php";

$sqlQuery = "SELECT * FROM FHNI_dogBreed";





$result = $dbconn->query($sqlQuery);


header('Content-Type: application/json');

if (!$result) {

    $dbconn->error;

} else {

    while ($row = $result->fetch_assoc()) {

        $search = $row ["dogBreed"];
        $rowID = $row ["breedID"];

        $urlenc = urlencode($search);

        $imgendpoint = "https://api.unsplash.com/search/photos?query=$urlenc&client_id=7gd7eU6gD9vGbrS4T6IJM58Pg-OlFaY1WZ-GB0OJAQc&per_page=1";


        $unsplashResponse = file_get_contents($imgendpoint);
        $decodedUnsplash = json_decode($unsplashResponse, true);



        $results = $decodedUnsplash['results'];
        $images = array();


        foreach($results as $imageDetails) {

             $urls = $imageDetails['urls'];
             $images = $urls['regular'];
             
        }

        //print_r($images);

        $dbq = "UPDATE FHNI_dogBreed SET breedimg = '$images' WHERE breedID = '$rowID'";
        
        echo $dbq;

        $res = $dbconn->query($dbq);

        if(!$res) {
            echo $dbconn->error;
        }

        

        


        

        
        


        

        


    
       

       

       

    }

}




?>