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

    <title>FHNI - Contact</title>
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
                            <div class="col" id="aboutinfo">
                                <h4>contact us!</h4>
                            </div>
                        </div> 

                        <div class="container-fluid">
                            <div class="row" id="contform">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">

                                    <h4 id="contacthead">Fill in the contact form below to send us a message</h4>

                                    <div class="row" id="contact01">

                                        <div class="col-sm-6">
                                            <label for="firstnameInput" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your first name">
                                          

                                        </div>
                                        <div class="col-sm-6">
                                            <label for="lastnameInput" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your last name">
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="firstnameInput" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your Email Address">
                                          

                                        </div>
                                        <div class="col-sm-6">
                                            <label for="lastnameInput" class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your contact number">
                                        </div>

                                        <div class="col">

                                            <label for="custommsg " class="form-label">Enter your message here</label>
                                            <textarea class="form-control" id="custommsg" rows="7"></textarea>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-sm-2"></div>
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