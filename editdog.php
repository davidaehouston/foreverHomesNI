<?php

$captureid = $_GET['id'];

$displaydog = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?dogID={$captureid}";
$epres = file_get_contents($displaydog);
$dogres = json_decode($epres, true);

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


    <title>FHNI - ADMIN UPDATE</title>
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

                        <div class="row" id="heading">
                             <div class="col-" id="aboutinfo">
                                     <h4>UPDATE THE DOG</h4>
                            </div>
                        </div>  

                        <form method="POST" action="editdogupdate.php">


                            <?php

                                $getname = $dogres['Name'];
                                $getdogid = $dogres['dogID'];


                                echo "<div class='mb-3'>
                                    <label for ='exampleInputEmail1' class ='form-label'>UPDATE NAME</label>
                                    <input type='text' input value = $getname class='form-control' id='exampleInputEmail1' name='newname'aria-describedby='emailHelp'>
                                    <input value='$getdogid' type='hidden' name='sendid'>
                                    <button type='submit' class='btn btn-light'>Submit</button>
                                </div>";
                            ?>



                        </form>

                        

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