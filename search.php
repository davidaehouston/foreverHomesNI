<?php

//DISPLAY ALL DOGS
$endpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allDogs";
$epres = file_get_contents($endpoint);
$anothervar = json_decode($epres, true);





$breedendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allBreeds";
$sizeendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allSizes";
$colourendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allColours";
$coatendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allCoats";
$keepinendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allKeepIn";
$ageendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allAges";
$postcodeendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allpostcodes";



$epresbreed = file_get_contents($breedendpoint);
$epresize = file_get_contents($sizeendpoint);
$eprescolour = file_get_contents($colourendpoint);
$eprescoat = file_get_contents($coatendpoint);
$epreskeepin = file_get_contents($keepinendpoint);
$epresage = file_get_contents($ageendpoint);
$eprespostcode = file_get_contents($postcodeendpoint);


$anothervarbreed = json_decode($epresbreed, true);
$anothervarsize = json_decode($epresize, true);
$anothervarcolour = json_decode($eprescolour, true);
$anothervarcoat2 = json_decode($eprescoat, true);
$anothervarkeepin = json_decode($epreskeepin, true);
$anothervarage = json_decode($epresage, true);
$anothervarpost = json_decode($eprespostcode, true);

/*
$age = $_GET['Age'];
$testend = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php/?Age=$age";
$ressy = file_get_contents($testend);
$agedata = json_decode($ressy, true);


/*
$endpoint = "http://localhost/WD7062/api/api.php?allDogs";
$epres = file_get_contents($endpoint);
$anothervar = json_decode($epres, true);





$breedendpoint = "http://localhost/WD7062/api/api.php?allBreeds";
$sizeendpoint = "http://localhost/WD7062/api/api.php?allSizes";
$colourendpoint = "http://localhost/WD7062/api/api.php?allColours";
$coatendpoint = "http://localhost/WD7062/api/api.php?allCoats";
$keepinendpoint = "http://localhost/WD7062/api/api.php?allKeepIn";
$ageendpoint = "http://localhost/WD7062/api/api.php?allAges";



$epresbreed = file_get_contents($breedendpoint);
$epresize = file_get_contents($sizeendpoint);
$eprescolour = file_get_contents($colourendpoint);
$eprescoat = file_get_contents($coatendpoint);
$epreskeepin = file_get_contents($keepinendpoint);
$epresage = file_get_contents($ageendpoint);


$anothervarbreed = json_decode($epresbreed, true);
$anothervarsize = json_decode($epresize, true);
$anothervarcolour = json_decode($eprescolour, true);
$anothervarcoat2 = json_decode($eprescoat, true);
$anothervarkeepin = json_decode($epreskeepin, true);
$anothervarage = json_decode($epresage, true);
*/



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

    <!--Custom JS-->


    <title>FHNI - Search</title>
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
                                    <h4>search</h4>
                                </div>
                            </div>    
                        
                        </div>

                        <div class="container" id="searchbar">
                            <div class="row" id="sbcontainer">

                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" id="breeddd" data-bs-toggle="dropdown" aria-expanded="false">
                                        SELECT YOUR POSTCODE!
                                        </button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>

                                            <?php
                                            foreach ($anothervarpost as $row) {

                                                echo "<li><a class='dropdown-item' href='results.php?askpostcode={$row['PostCode']}'>{$row['PostCode']}</a></li>";

                                                
                                                
                                            }

                                            ?>

                                        </ul>       
                                    </div>

                                </div>
                                <div class="col-sm-4"></div>

                                   

                            </div>
                            



                            <div class="row" id="searchcrit">

                                <div class="col-sm-2">

                                <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" id="breeddd" data-bs-toggle="dropdown" aria-expanded="false">
                                        Age
                                        </button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>

                                            <?php
                                            foreach ($anothervarage as $row) {

                                                echo "<li><a class='dropdown-item' href='results.php?askage={$row['Age']}'>{$row['Age']}</a></li>";

                                                
                                                
                                            }

                                            ?>

                                        </ul>       
                                    </div>

                                </div>

                                <div class="col-sm-2">

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="breeddd" data-bs-toggle="dropdown" aria-expanded="false">
                                        Size
                                        </button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                                        
                                            <?php

                                                foreach ($anothervarsize as $row) {

                                                    echo "<li><a class='dropdown-item' href='results.php?asksize={$row['DogSize']}'>{$row['DogSize']}</a></li>";
                                                    
                                                }

                                            ?>


                                        </ul>
                                    </div>

                                </div>

                                <div class="col-sm-2">

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="breeddd" data-bs-toggle="dropdown" aria-expanded="false">
                                        Breed
                                        </button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>

                                            <?php
                                            foreach ($anothervarbreed as $row) {

                                                echo "<li><a class='dropdown-item' href='results.php?askbreed={$row['DogBreed']}'>{$row['DogBreed']}</a></li>";
                                                                            
                                            }

                                            ?>

                                        </ul>       
                                    </div>

                                </div>
                                <div class="col-sm-2">

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="breeddd" data-bs-toggle="dropdown" aria-expanded="false">
                                        Coat
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        
                                            <?php
                                            
                                            foreach ($anothervarcoat2 as $row) {

                                                echo "<li><a class='dropdown-item' href='results.php?askcoat={$row['DogCoat']}'>{$row['DogCoat']}</a></li>";
                                                
                                            }

                                            ?>

                                        </ul>
                                    </div>

                                </div>
                                <div class="col-sm-2">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="breeddd" data-bs-toggle="dropdown" aria-expanded="false">
                                        Colour
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                        <?php

                                            foreach ($anothervarcolour as $row) {

                                                echo "<li><a class='dropdown-item' href='results.php?askcolour={$row['DogColour']}'>{$row['DogColour']}</a></li>";
                                                
                                            }

                                        ?>
                                        
                                        </ul>
                                    </div>

                                </div>

                                <div class="col-sm-2">

                                <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="breeddd" data-bs-toggle="dropdown" aria-expanded="false">
                                        KeepIn
                                        </button>
                                        <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>

                                            <?php
                                            foreach ($anothervarkeepin as $row) {

                                                echo "<li><a class='dropdown-item' href='results.php?askkeepin={$row['KeepIn']}'>{$row['KeepIn']}</a></li>";
                                                
                                            }

                                            ?>

                                        </ul>       
                                    </div>

                                </div>
                            
                            </div>




                            <div class="container-fluid">

                                <div class="row mx-auto" id="searchtogg">

                                    <div class="col-sm-2">
    
                                        <div class="form-check" id="selbox">
                                            
                                            <label class="form-check-label" for="flexCheckDefault">
                                            neutured
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
    
                                    </div>
    
                                    <div class="col-sm-2">
    
                                        <div class="form-check" id="selbox">
                                            
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Cat friendly
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
    
                                    </div>
    
                                    <div class="col-sm-2">
    
                                        <div class="form-check" id="selbox">
                                            
                                            <label class="form-check-label" for="flexCheckDefault">
                                            housebroken
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
    
                                    </div>
    
                                    <div class="col-sm-2">
    
                                        <div class="form-check" id="selbox">
                                            
                                            <label class="form-check-label" for="flexCheckDefault">
                                            kid friendly
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
    
                                    </div>

                                    <div class="col-sm-2">
    
                                        <div class="form-check" id="selbox">
                                            
                                            <label class="form-check-label" for="flexCheckDefault">
                                            get along with males
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
    
                                    </div>

                                    <div class="col-sm-2">
    
                                        <div class="form-check" id="selbox">
                                            
                                            <label class="form-check-label" for="flexCheckDefault">
                                            get along with females
                                            </label>
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
    
                                    </div>
                                    

                            </div>


                                <div class="row" id="heading">
                                    <div class="col-" id="aboutinfo">
                                        <h4>Results</h4>
                                    </div>
                                </div>  
                              
                            </div>  
                            
                            <div class="container-fluid" id="resultscont">

                                <div class="row" id="resultsrow">

                                <?php

                                    foreach ($anothervar as $row) {



                                        echo "<div class='col-sm-3'>

                                        

                                        <div class='card mx-auto' style='width: 20rem;'>
                                            <img src='{$row['breedimg']}' class='card-img-top' alt='...'>
                                            <div class='card-body'>
                                              <h5 class='card-title'>{$row['Name']}</h5>
                                              <p class='card-text'>Postcode : {$row['PostCode']}</p>
                                              <a href='displayDog.php?keyid={$row['dogID']}' class='stretched-link'></a>
                                            </div>
                                            <ul class='list-group list-group-flush'>
                                                <li class='list-group-item'>Breed : {$row['DogBreed']}</li>
                                                <li class='list-group-item'>Age : {$row['Age']}</li>
                                                <li class='list-group-item'>Dog Size : {$row['DogSize']}</li>
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

    <script src="/custom.js"></script>
    
</body>
</html>