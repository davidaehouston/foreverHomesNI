<?php


session_start();

if(!isset($_SESSION['userloginvalid'])) {

    header("Location: index.php");

}


include "run_once/dbconn.php";

$currentuser = $_SESSION['userloginvalid'];

$dbq = "SELECT * FROM FHNI_Users WHERE userID = $currentuser";

$res = $dbconn->query($dbq);

if(!$res) {

    echo $dbconn->error;
}

$userdetails = $res->fetch_assoc();


$getfavs = "SELECT FHNI_Users.userID, imgpath, FHNI_Dog.dogID,FHNI_Dog.name, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

FROM FHNI_Dog 

LEFT JOIN FHNI_userFavourites on FHNI_userFavourites.dogid=FHNI_Dog.dogID
LEFT JOIN FHNI_Users ON FHNI_Users.userID = FHNI_userFavourites.userid
LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID 
LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID 
LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID 
LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID 
LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID 
LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID 
LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID

HAVING FHNI_Users.userID = {$userdetails['userID']}";

$favresults = $dbconn->query($getfavs);



if(!$favresults) {

    echo $dbconn->error;
}

$favdetails = $favresults->fetch_assoc();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">

    <title>FHNI - Display User</title>
</head>

<body>

    <div class="container-fluid" id="maincont">


        <div class="row" id="bkimg">

            
            

        <div class="container-fluid" id="maincontent">

            <?php

            include ('nav.php');

            ?>


            <div class="row" id="title">

                <div class="col"></div>
                <div class="col-8" id="landingtitle">
                    <h1>
                        Forever homes ni
                    </h1>
                    <h4>
                        search for dogs that need a new home in your area!
                    </h4>
                    
                </div>
                <div class="col">
                </div>
                
                <div class="row" id="bonelogo">

                    
                    
                </div>

            </div>

            <div class="container-fluid" id="Search">

                <div class="row" id="searchnav">

                    
                    <div class="col-12 rounded" id="centerfield">

                        <div class="container" id="heading">

                            <div class="row" id="heading">
                                <div class="col-" id="aboutinfo">

                                    <?php
                                        echo"
                                        <h4>
                                        WELCOME {$userdetails['firstName']}!</h4>
                                        <h2>{$userdetails['Email']}</h2>"
                                    ?>
                                    <a href="logout.php" role="button" class="btn btn-dark btn-lg">logout</a>

                                    <div class="col-" id="aboutinfo">

                                        <h4>FAVOURITES</h4>
                                        <h2>click on a dog below to find out more about them!</h2>
                                    </div>

                                </div>

                                

                        </div>


                    </div>    

                    <div class="row" id="resultsrow">

                            
                            

                            <?php
                                
                                foreach($favresults as $favdetails) {

                                    

                                    echo "<div class='col-sm-3'>
                                    
                                    <div class='card mx-auto' style='width: 20rem;'>
                                    <img src='{$favdetails['imgpath']}' class='card-img-top' alt='...'>
                                    <div class='card-body'>
                                                    <h5 class='card-title'>{$favdetails['name']}</h5>
                                                    <p class='card-text'>Postcode : {$favdetails['postcode']}</p>
                                                    <a href='displayDog.php?keyid={$favdetails['dogID']}' class='stretched-link'></a>
                                                    </div>
                                                    <ul class='list-group list-group-flush'>
                                                        <li class='list-group-item'>Breed : {$favdetails['dogBreed']}</li>
                                                        <li class='list-group-item'>Age : {$favdetails['age']}</li>
                                                        <li class='list-group-item'>Dog Size : {$favdetails['dogSize']}</li>
                                                    </ul>
                                                </div>
                                
                                            </div>";

                                }
                                

                                    

                                
                            
                                    

                            ?>


                        </div>
                        

                </div>

            </div>

        </div>
        
    </div>

     <div class="container-fluid" id="footercont">


         <div class="row" id="footersection">
                
             <div class="col-sm-2"></div>
             <div class="col-sm-8">
                 <h4>© David houston 2021</h4>
            </div>
            <div class="col-sm-2"></div>

        </div>



    </div>

    
</body>
</html>