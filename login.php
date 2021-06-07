<?php

session_start();

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

    <title>FHNI - Login</title>
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

                            <div class="row" id="headinglogin">

                                <div class="col-" id="aboutinfo">
                                    <h4>
                                    Please log in or register below!
                                    </h4>
                                </div>

                                <div class="col-sm-6 mx-auto" id = "Login">

                                    <h2>Login</h2>
                                    <form method="POST" action ="loginscript.php">

                                        <label for="firstnameInput" class="form-label">Enter your email</label>
                                        <input type="text" class="form-control" id="loginf" placeholder="Email" name="email">

                                        <label for="firstnameInput" class="form-label">Enter your password</label>
                                        <input type="password" class="form-control" id="loginf" placeholder="Password" name="password">

                                        <input type='submit' value = 'login' class='form'>
                                    
                                    </form>
                                    

                                            

                                </div>

                                <div class="col-sm-6 mx-auto" id = "register">

                                    <h2>register</h2>
                                

                                    <form method = "POST" action = "processuser.php">
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" id="exampleInputEmail1" name ='usertype' value="1">
                                          </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"> Enter First Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name ='userfirst'aria-describedby="emailHelp">
                                          </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label"> Enter Last Name</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" name ='userlast' aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Enter Email Address</label>
                                          <input type="text" class="form-control" id="exampleInputPassword1" name ='useremail'>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword" class="form-label">Enter Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name ='userpword'>
                                          </div>
                                        <button type="submit" class="btn btn-light">Submit</button>
                                      </form>

                                

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