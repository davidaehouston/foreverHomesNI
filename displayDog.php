<?php

session_start();




$captureDogid = $_GET['keyid'];


$displaydog = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?dogID={$captureDogid}";
$displaydog_string = file_get_contents($displaydog);
$dogres = json_decode($displaydog_string,true);

/*
$displaydog = "http://localhost/WD7062/api/api.php?dogID={$captureDogid}";
$displaydog_string = file_get_contents($displaydog);
$dogres = json_decode($displaydog_string,true);
*/

include "run_once/dbconn.php";

if(isset($_SESSION['userloginvalid'])) {

    $currentuser = $_SESSION['userloginvalid'];

    $dbq = "SELECT * FROM FHNI_Users WHERE userID = $currentuser";

    $res = $dbconn->query($dbq);

    if(!$res) {

        echo $dbconn->error;
    }

    $userdetails = $res->fetch_assoc();

}

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

    <title>FHNI - Dog Info</title>
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

                                        echo "<h4>LEARN ABOUT : <span class='badge rounded-pill bg-dark'>{$dogres['Name']}!</span></p></h4>";

                                    ?>

                                

                                    <form method ='POST' action = "">
                                        <?php

                                        $id = $dogres['dogID'];

                                        echo "<a href='favourites.php?id=$id' role='button' class='btn btn-dark btn-lg' id ='sbutton'>add to favourites</a>";
                                        /*"<input type='submit'role='button' class='btn btn-dark btn-lg' id ='sbutton' name = '$id'>";*/

                                        ?>

                                        

                                    </form>

                                    

                                    

                                </div>
                            </div>    

                        </div>

                        <div class="container-fluid" id="aboutdog">

                            <div class="row" id="aboutdog2">

                            

                            <div class="col-sm-4 rounded-circle mx-auto" id = "doggoprofileimg"> 

                                
                                <div class="doggoprofileimg2" id = "doggoprofileimg">
                                    <?php
                                        echo "<img src='{$dogres['breedimg']}'class='rounded-circle mx-auto d-block m-auto' alt='dogprofilephoto'>"
                                    ?>
                                </div>


                                <?php

                                echo "<p>Postcode : <span class='badge rounded-pill bg-dark'>{$dogres['PostCode']}</span></p>";
                                

                                ?>



                            </div>

                            <div class="col-sm-4 " id = "doginfo">

                                <?php 

                                    echo "<p>Age : <span class='badge rounded-pill bg-dark'>{$dogres['Age']}</span></p>
                                    <p>Gender : <span class='badge rounded-pill bg-dark'>{$dogres['DogGender']}</span></p>
                                    <p>Breed : <span class='badge rounded-pill bg-dark'>{$dogres['dogBreed']}</span></p>
                                    <p>Colour : <span class='badge rounded-pill bg-dark'>{$dogres['DogColour']}</span></p>
                                    <p>Coat : <span class='badge rounded-pill bg-dark'>{$dogres['DogCoat']}</span></p>
                                    <p>Size : <span class='badge rounded-pill bg-dark'>{$dogres['DogSize']}</span></p>
                                    <p>Is Neutuered? : <span class='badge rounded-pill bg-dark'>{$dogres['DogNeutered']}</span></p>
                                    <p>Is House-Broken? : <span class='badge rounded-pill bg-dark'>{$dogres['HouseBroken']}</span></p>";
                                

                                ?>

                            
                            </div>

                            <div class="col-sm-4" id = "doginfo2">

                                <?php 

                                    echo "<p>Likes People? : <span class='badge rounded-pill bg-dark'>{$dogres['LikesPeople']}</span></p>
                                    <p>Likes Children? : <span class='badge rounded-pill bg-dark'>{$dogres['LikesChildren']}</span></p>
                                    <p>Gets Along with Males? : <span class='badge rounded-pill bg-dark'>{$dogres['getAlongWithMales']}</span></p>
                                    <p>Gets Along with Females? : <span class='badge rounded-pill bg-dark'>{$dogres['getAlongWithFemales']}</span></p>
                                    <p>Gets Along with Cats? : <span class='badge rounded-pill bg-dark'>{$dogres['getAlongWithCats']}</span></p>
                                    <p>Keep Me in : <span class='badge rounded-pill bg-dark'>{$dogres['KeepIn']}</span></p>
                                    <p>Posted On : <span class='badge rounded-pill bg-dark'>{$dogres['PostedOn']}</span></p>
                                    <p>Adopt Me From : <span class='badge rounded-pill bg-dark'>{$dogres['Adoptable From']}</span></p>";

                                ?>

                            
                            </div>

                               

                            
                             




                        </div>


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