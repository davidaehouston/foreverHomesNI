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

                        <div class="row" id="formpanel">

                            <div class="col-sm-3"></div>

                            <div class="col-sm-6" id = "panel">

                                <div class="p-3 mb-2 bg-dark rounded text-white mx-auto d-block m-auto">

                                    <h2>CREATE A DOG</h2>


                                    <form method = "POST" action = "processdog.php">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"> Enter Dog name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name ='name' aria-describedby="emailHelp">
                                          </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"> Enter dog age (Numeric only)</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name ='age'aria-describedby="emailHelp">
                                          </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label"> Enter gender</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" name ='gender' aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Enter breed</label>
                                          <input type="text" class="form-control" id="exampleInputPassword1" name ='breed'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Enter colour</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='colour'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Enter coat</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='coat'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Enter size</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='size'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Is neutured?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='neut'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Is housebroken?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='housebroken'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Likes People?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='likespeople'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Likes Children?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='likeschildren'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Get Along with Males?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='gam'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Get Along with Females?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='gaf'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Get Along with Cats?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='gac'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">KeepIn?</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='keepin'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Posted On</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='posted'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Adoptable From</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='adoptfrom'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Postcode</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name ='postcode'>
                                        </div>
                                        <button type="submit" class="btn btn-light">Submit</button>

                                      
                                    </form>
        
        
        
        
        
                                </div>

                                <div class="col-sm-3"></div>
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