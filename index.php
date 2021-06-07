<?php

$postcodeendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?allpostcodes";
$eprespostcode = file_get_contents($postcodeendpoint);
$anothervarpost = json_decode($eprespostcode, true);


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

    <title>FHNI - Home</title>
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

                        <div class="container" id="searchheading">

                            <div class="row" id="heading">
                                <div class="col-" id="searchinfo">
                                    <h4>enter your postcode!</h4>
                                </div>

                                <div class="row" id="mainsvg">
                                    <div class="col-3"></div>
                                    <div class="col-6" id="bone"></div>
                                    <div class="col-3"></div>
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

                            <div class="container-fluid" id="sucess">

                                <h1>sucess stories</h1>

                                <div class="row" id="ss1">
                                    <div class="col-sm-4 mx-auto" id="filler">
                                        <div class="col-4 rounded-circle mx-auto" id="doggoimg1">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card" style="width: auto;">
                                            <div class="card-body">
                                              <h5 class="card-title">Sucess Story One</h5>
                                              <h6 class="card-subtitle mb-2 text-muted">Location 1</h6>
                                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eleifend mi in nulla posuere sollicitudin. Tellus integer feugiat scelerisque varius morbi enim. Vitae tortor condimentum lacinia quis vel eros donec ac. Mauris nunc congue nisi vitae suscipit tellus mauris. At auctor urna nunc id cursus metus aliquam eleifend. Magnis dis parturient montes nascetur ridiculus mus. Amet est placerat in egestas. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Proin nibh nisl condimentum id venenatis a. Feugiat sed lectus vestibulum mattis. Lobortis scelerisque fermentum dui faucibus in ornare. Cum sociis natoque penatibus et. Tempor nec feugiat nisl pretium fusce id velit ut.</p>
                                            </div>
                                          </div>
                                    </div>
                                </div>

                                <div class="row" id="ss1">
                                    <div class="col-sm-8">
                                        <div class="card" style="width: auto;">
                                            <div class="card-body">
                                              <h5 class="card-title">Sucess Story Two</h5>
                                              <h6 class="card-subtitle mb-2 text-muted">Location 2</h6>
                                              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eleifend mi in nulla posuere sollicitudin. Tellus integer feugiat scelerisque varius morbi enim. Vitae tortor condimentum lacinia quis vel eros donec ac. Mauris nunc congue nisi vitae suscipit tellus mauris. At auctor urna nunc id cursus metus aliquam eleifend. Magnis dis parturient montes nascetur ridiculus mus. Amet est placerat in egestas. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Proin nibh nisl condimentum id venenatis a. Feugiat sed lectus vestibulum mattis. Lobortis scelerisque fermentum dui faucibus in ornare. Cum sociis natoque penatibus et. Tempor nec feugiat nisl pretium fusce id velit ut.</p>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="col-sm-4 mx-auto"id="filler">
                                        <div class="col-4 mx-auto rounded-circle sm" id="doggoimg2"></div>
                                    </div>

                                </div>

                                
                                    

                                <div class="row" id="ss1">
                                        <div class="col-sm-4 fixed" id="filler">
                                            <div class="col-4 mx-auto rounded-circle" id="doggoimg3"></div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="card" style="width: auto;">
                                                <div class="card-body">
                                                  <h5 class="card-title">Sucess Story Three</h5>
                                                  <h6 class="card-subtitle mb-2 text-muted">Location 3</h6>
                                                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eleifend mi in nulla posuere sollicitudin. Tellus integer feugiat scelerisque varius morbi enim. Vitae tortor condimentum lacinia quis vel eros donec ac. Mauris nunc congue nisi vitae suscipit tellus mauris. At auctor urna nunc id cursus metus aliquam eleifend. Magnis dis parturient montes nascetur ridiculus mus. Amet est placerat in egestas. Vitae tortor condimentum lacinia quis vel eros donec ac odio. Proin nibh nisl condimentum id venenatis a. Feugiat sed lectus vestibulum mattis. Lobortis scelerisque fermentum dui faucibus in ornare. Cum sociis natoque penatibus et. Tempor nec feugiat nisl pretium fusce id velit ut.</p>
                                                </div>
                                              </div>
                                        </div>
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


    
</body>
</html>