<?php

include "dbconn.php";

$sqlQuery = "SELECT `dogID`, FHNI_dogBreed.dogBreed 
FROM FHNI_Dog 
INNER JOIN FHNI_dogBreed 
ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
ORDER BY `FHNI_Dog`.`dogID` ASC
LIMIT 2";





$result = $dbconn->query($sqlQuery);


header('Content-Type: application/json');

if (!$result) {

    $dbconn->error;

} else {

    while ($row = $result->fetch_assoc()) {

        $search = $row ["dogBreed"];

        $urlenc = urlencode($search);

        //$endpoint = "https://source.unsplash.com/1000x1000/?{$search}";
        //$imgendpoint = "https://api.unsplash.com/photos/search?client_id=7gd7eU6gD9vGbrS4T6IJM58Pg-OlFaY1WZ-GB0OJAQc&?query={$urlenc}";
        $imgendpoint = "https://api.unsplash.com/search/photos?query=$urlenc&client_id=7gd7eU6gD9vGbrS4T6IJM58Pg-OlFaY1WZ-GB0OJAQc&per_page=1";

        //echo $imgendpoint;

        $unsplashResponse = file_get_contents($imgendpoint);
        $decodedUnsplash = json_decode($unsplashResponse, true);

        //echo $unsplashResponse;


        $results = $decodedUnsplash['results'];
        $images = array();


        foreach($results as $imageDetails) {

             $urls = $imageDetails['urls'];
             $images = $urls['regular'];
             
        }

        print_r($images);



        //$encode = json_encode($imgendpoint,true);

        //echo $encode;



        //echo json_decode($endpoint,JSON_PRETTY_PRINT);

        

        


        

        
        


        

        


    
       

       

       

    }

}




?>