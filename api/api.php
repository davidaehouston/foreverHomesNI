<?php



header('Content-Type:application/json');
header('Access-Control-Allow-Methods: POST');

//include the connection object.
include "../run_once/dbconn.php";

if ($dbconn) {

    

    
    //RETURN ALL DOGS
    if (isset($_GET["allDogs"])) {

        
        $squerllquery  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name, FHNI_dogBreed.breedimg, imgpath, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
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
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID LIMIT 200";

    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                $response[$i]['dogID'] = $row ['dogID'];
                $response[$i]['Name'] = $row ['name'];
                $response[$i]['Age'] = $row ['age'];
                $response[$i]['DogGender'] = $row ['DogSexValue'];
                $response[$i]['DogBreed'] = $row ['dogBreed'];
                $response[$i]['DogColour'] = $row ['dogColorValue'];
                $response[$i]['DogCoat'] = $row ['dogCoatValue'];
                $response[$i]['DogSize'] = $row ['dogSize'];
                $response[$i]['DogNeutered'] = $row ['Neutured'];
                $response[$i]['HouseBroken'] = $row ['HouseBroken'];
                $response[$i]['LikesPeople'] = $row ['LikesPeople'];
                $response[$i]['LikesChildren'] = $row ['LikesChildren'];
                $response[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
                $response[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
                $response[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
                $response[$i]['KeepIn'] = $row ['KeepIn'];
                $response[$i]['PostedOn'] = $row ['posted'];
                $response[$i]['Adoptable From'] = $row ['adoptableFrom'];
                $response[$i]['PostCode'] = $row ['postcode'];
                $response[$i]['imgpath'] = $row ['imgpath'];
                $response[$i]['breedimg'] = $row ['breedimg'];
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        

        



    }

    //RETURN ALL POSTCODES
    if (isset($_GET["allpostcodes"])) {

        
        $squerllquery  = "SELECT DISTINCT substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog
        
        ORDER BY `FHNI_Dog`.`postcode` ASC";
    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                
                $response[$i]['PostCode'] = $row ['postcode'];
                $i++;
                
                
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
        

        



    }

    //RETURN ALL BREEDS
    if (isset($_GET["allBreeds"])) {

        
        $squerllquery  = "SELECT DISTINCT FHNI_dogBreed.dogBreed FROM FHNI_Dog 

       
        LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID";
        
    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                $response[$i]['DogBreed'] = $row ['dogBreed'];
                
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
  
    }

    //ALL SIZES
    if (isset($_GET["allSizes"])) {

        
        $squerllquery  = "SELECT DISTINCT FHNI_DogSize.dogSize FROM FHNI_Dog
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID";

        
    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                $response[$i]['DogSize'] = $row ['dogSize'];
                
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
  
    }

    //ALL COATS
    if (isset($_GET["allCoats"])) {

        
        $squerllquery  = "SELECT DISTINCT FHNI_DogCoat.dogCoatValue FROM FHNI_Dog
        LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID";

        
    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                $response[$i]['DogCoat'] = $row ['dogCoatValue'];
                
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
  
    }

    //ALL AGES
    if (isset($_GET["allAges"])) {

        
        $squerllquery  = "SELECT DISTINCT FHNI_Dog.age FROM FHNI_Dog ORDER BY `FHNI_Dog`.`age`+ 0 ASC";

        
    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                $response[$i]['Age'] = $row ['age'];
                
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
  
    }

    //ALL COLOURS
    if (isset($_GET["allColours"])) {

        
        $squerllquery  = "SELECT DISTINCT FHNI_dogColour.dogColorValue FROM FHNI_Dog
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID";

        
    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                $response[$i]['DogColour'] = $row ['dogColorValue'];
                
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
  
    }

    //ALL KEEPIN
    if (isset($_GET["allKeepIn"])) {

        
        $squerllquery  = "SELECT DISTINCT FHNI_DogKeepIn.KeepinValue AS KeepIn FROM FHNI_Dog
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID";

        
    
        $result = $dbconn->query($squerllquery);
    
        if ($result) {
            $i=0;
    
            header("Content-Type: Application/JSON");
    
            while ($row = mysqli_fetch_assoc($result)) {
                
                $response[$i]['KeepIn'] = $row ['KeepIn'];
                
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
  
    }
  
    //GET BY DOG ID
    if (isset($_GET["dogID"])) {

        $dogidparam = $_GET['dogID'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name,imgpath,FHNI_dogBreed.breedimg, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID WHERE dogID = $dogidparam";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();

        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs['dogID'] = $row ['dogID'];
            $dogs['Name'] = $row ['name'];
            $dogs['Age'] = $row ['age'];
            $dogs['DogGender'] = $row ['DogSexValue'];
            $dogs['dogBreed'] = $row ['dogBreed'];
            $dogs['DogColour'] = $row ['dogColorValue'];
            $dogs['DogCoat'] = $row ['dogCoatValue'];
            $dogs['DogSize'] = $row ['dogSize'];
            $dogs['DogNeutered'] = $row ['Neutured'];
            $dogs['HouseBroken'] = $row ['HouseBroken'];
            $dogs['LikesPeople'] = $row ['LikesPeople'];
            $dogs['LikesChildren'] = $row ['LikesChildren'];
            $dogs['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs['KeepIn'] = $row ['KeepIn'];
            $dogs['PostedOn'] = $row ['posted'];
            $dogs['Adoptable From'] = $row ['adoptableFrom'];
            $dogs['PostCode'] = $row ['postcode'];
            $dogs['imgpath'] = $row ['imgpath'];
            $dogs['breedimg'] = $row ['breedimg'];



            $response = $dogs;

            
        
            echo json_encode($response);
        }

        

        



    }

    //GET BY AGE
    if (isset($_GET["Age"])) {

        $dogidparam = $_GET['Age'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name, FHNI_Dog.age, FHNI_dogBreed.breedimg, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
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
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID WHERE Age = $dogidparam";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();


        $i=0;

        while($row = mysqli_fetch_assoc($res)) {

            
        
            $dogs[$i]['dogID'] = $row ['dogID'];
            $dogs[$i]['name'] = $row ['name'];
            $dogs[$i]['Age'] = $row ['age'];
            $dogs[$i]['DogGender'] = $row ['DogSexValue'];
            $dogs[$i]['dogBreed'] = $row ['dogBreed'];
            $dogs[$i]['DogColour'] = $row ['dogColorValue'];
            $dogs[$i]['DogCoat'] = $row ['dogCoatValue'];
            $dogs[$i]['DogSize'] = $row ['dogSize'];
            $dogs[$i]['DogNeutered'] = $row ['Neutured'];
            $dogs[$i]['HouseBroken'] = $row ['HouseBroken'];
            $dogs[$i]['LikesPeople'] = $row ['LikesPeople'];
            $dogs[$i]['LikesChildren'] = $row ['LikesChildren'];
            $dogs[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs[$i]['KeepIn'] = $row ['KeepIn'];
            $dogs[$i]['PostedOn'] = $row ['posted'];
            $dogs[$i]['Adoptable From'] = $row ['adoptableFrom'];
            $dogs[$i]['PostCode'] = $row ['postcode'];
            $dogs[$i]['breedimg'] = $row ['breedimg'];
            $i++;

            $response = $dogs;

            
        
            
        }

        echo json_encode($response);

        



    }

    //GET BY BREED
    if (isset($_GET['dogBreed'])) {

        $dogidparam = $_GET['dogBreed'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name,FHNI_dogBreed.breedimg, imgpath, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID WHERE dogBreed = '$dogidparam'";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();
        $i=0;

        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs[$i]['dogID'] = $row ['dogID'];
            $dogs[$i]['name'] = $row ['name'];
            $dogs[$i]['Age'] = $row ['age'];
            $dogs[$i]['DogGender'] = $row ['DogSexValue'];
            $dogs[$i]['dogBreed'] = $row ['dogBreed'];
            $dogs[$i]['DogColour'] = $row ['dogColorValue'];
            $dogs[$i]['DogCoat'] = $row ['dogCoatValue'];
            $dogs[$i]['DogSize'] = $row ['dogSize'];
            $dogs[$i]['DogNeutered'] = $row ['Neutured'];
            $dogs[$i]['HouseBroken'] = $row ['HouseBroken'];
            $dogs[$i]['LikesPeople'] = $row ['LikesPeople'];
            $dogs[$i]['LikesChildren'] = $row ['LikesChildren'];
            $dogs[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs[$i]['KeepIn'] = $row ['KeepIn'];
            $dogs[$i]['PostedOn'] = $row ['posted'];
            $dogs[$i]['Adoptable From'] = $row ['adoptableFrom'];
            $dogs[$i]['PostCode'] = $row ['postcode'];
            $dogs[$i]['imgpath'] = $row ['imgpath'];
            $dogs[$i]['breedimg'] = $row ['breedimg'];
            
            $i++;

            $response = $dogs;

            
        
            
        }

        echo json_encode($response);

    }

    //GET BY NAME
    if (isset($_GET['Name'])) {

        $dogidparam = $_GET['Name'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name,FHNI_dogBreed.breedimg, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID WHERE 'name' = '$dogidparam'";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();

        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs['dogID'] = $row ['dogID'];
            $dogs['dogName'] = $row ['name'];
            $dogs['Age'] = $row ['age'];
            $dogs['DogGender'] = $row ['DogSexValue'];
            $dogs['dogBreed'] = $row ['dogBreed'];
            $dogs['DogColour'] = $row ['dogColorValue'];
            $dogs['DogCoat'] = $row ['dogCoatValue'];
            $dogs['DogSize'] = $row ['dogSize'];
            $dogs['DogNeutered'] = $row ['Neutured'];
            $dogs['HouseBroken'] = $row ['HouseBroken'];
            $dogs['LikesPeople'] = $row ['LikesPeople'];
            $dogs['LikesChildren'] = $row ['LikesChildren'];
            $dogs['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs['KeepIn'] = $row ['KeepIn'];
            $dogs['PostedOn'] = $row ['posted'];
            $dogs['Adoptable From'] = $row ['adoptableFrom'];
            $dogs['PostCode'] = $row ['postcode'];
            $dogs['breedimg'] = $row ['breedimg'];

            $response = $dogs;

            
        
            echo json_encode($response);
        }

        

        



    }

    //GET BY COAT
    if (isset($_GET['DogCoat'])) {

        $dogidparam = $_GET['DogCoat'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name, FHNI_dogBreed.breedimg, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID WHERE dogCoatValue = '$dogidparam'";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();

        $i=0;

        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs[$i]['dogID'] = $row ['dogID'];
            $dogs[$i]['name'] = $row ['name'];
            $dogs[$i]['Age'] = $row ['age'];
            $dogs[$i]['DogGender'] = $row ['DogSexValue'];
            $dogs[$i]['dogBreed'] = $row ['dogBreed'];
            $dogs[$i]['DogColour'] = $row ['dogColorValue'];
            $dogs[$i]['DogCoat'] = $row ['dogCoatValue'];
            $dogs[$i]['DogSize'] = $row ['dogSize'];
            $dogs[$i]['DogNeutered'] = $row ['Neutured'];
            $dogs[$i]['HouseBroken'] = $row ['HouseBroken'];
            $dogs[$i]['LikesPeople'] = $row ['LikesPeople'];
            $dogs[$i]['LikesChildren'] = $row ['LikesChildren'];
            $dogs[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs[$i]['KeepIn'] = $row ['KeepIn'];
            $dogs[$i]['PostedOn'] = $row ['posted'];
            $dogs[$i]['Adoptable From'] = $row ['adoptableFrom'];
            $dogs[$i]['PostCode'] = $row ['postcode'];
            $dogs[$i]['breedimg'] = $row ['breedimg'];
            
            $i++;

            $response = $dogs;

            
        
            
        }

        echo json_encode($response);

        



    }

    //GET BY SIZE
    if (isset($_GET['DogSize'])) {

        $dogidparam = $_GET['DogSize'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name, FHNI_dogBreed.breedimg, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID WHERE dogSize = '$dogidparam'";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();

        $i=0;

        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs[$i]['dogID'] = $row ['dogID'];
            $dogs[$i]['name'] = $row ['name'];
            $dogs[$i]['Age'] = $row ['age'];
            $dogs[$i]['DogGender'] = $row ['DogSexValue'];
            $dogs[$i]['dogBreed'] = $row ['dogBreed'];
            $dogs[$i]['DogColour'] = $row ['dogColorValue'];
            $dogs[$i]['DogCoat'] = $row ['dogCoatValue'];
            $dogs[$i]['DogSize'] = $row ['dogSize'];
            $dogs[$i]['DogNeutered'] = $row ['Neutured'];
            $dogs[$i]['HouseBroken'] = $row ['HouseBroken'];
            $dogs[$i]['LikesPeople'] = $row ['LikesPeople'];
            $dogs[$i]['LikesChildren'] = $row ['LikesChildren'];
            $dogs[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs[$i]['KeepIn'] = $row ['KeepIn'];
            $dogs[$i]['PostedOn'] = $row ['posted'];
            $dogs[$i]['Adoptable From'] = $row ['adoptableFrom'];
            $dogs[$i]['PostCode'] = $row ['postcode'];
            $dogs[$i]['breedimg'] = $row ['breedimg'];
            $i++;

            $response = $dogs;

            
        
            
        }

        echo json_encode($response);

        



    }

    //GET BY COLOUR
    if (isset($_GET['DogColour'])) {

        $dogidparam = $_GET['DogColour'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name, FHNI_dogBreed.breedimg, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID WHERE dogColorValue = '$dogidparam'";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();

        $i=0;

        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs[$i]['dogID'] = $row ['dogID'];
            $dogs[$i]['name'] = $row ['name'];
            $dogs[$i]['Age'] = $row ['age'];
            $dogs[$i]['DogGender'] = $row ['DogSexValue'];
            $dogs[$i]['dogBreed'] = $row ['dogBreed'];
            $dogs[$i]['DogColour'] = $row ['dogColorValue'];
            $dogs[$i]['DogCoat'] = $row ['dogCoatValue'];
            $dogs[$i]['DogSize'] = $row ['dogSize'];
            $dogs[$i]['DogNeutered'] = $row ['Neutured'];
            $dogs[$i]['HouseBroken'] = $row ['HouseBroken'];
            $dogs[$i]['LikesPeople'] = $row ['LikesPeople'];
            $dogs[$i]['LikesChildren'] = $row ['LikesChildren'];
            $dogs[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs[$i]['KeepIn'] = $row ['KeepIn'];
            $dogs[$i]['PostedOn'] = $row ['posted'];
            $dogs[$i]['Adoptable From'] = $row ['adoptableFrom'];
            $dogs[$i]['PostCode'] = $row ['postcode'];
            $dogs[$i]['breedimg'] = $row ['breedimg'];
            $i++;

            $response = $dogs;

            
        
            
        }

        echo json_encode($response);

        



    }

    //GET BY KEEPIN
    if (isset($_GET['KeepIn'])) {

        $dogidparam = $_GET['KeepIn'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name, FHNI_dogBreed.breedimg, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) as postcode

        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID HAVING KeepIn = '$dogidparam'";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();

        $i=0;

        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs[$i]['dogID'] = $row ['dogID'];
            $dogs[$i]['name'] = $row ['name'];
            $dogs[$i]['Age'] = $row ['age'];
            $dogs[$i]['DogGender'] = $row ['DogSexValue'];
            $dogs[$i]['dogBreed'] = $row ['dogBreed'];
            $dogs[$i]['DogColour'] = $row ['dogColorValue'];
            $dogs[$i]['DogCoat'] = $row ['dogCoatValue'];
            $dogs[$i]['DogSize'] = $row ['dogSize'];
            $dogs[$i]['DogNeutered'] = $row ['Neutured'];
            $dogs[$i]['HouseBroken'] = $row ['HouseBroken'];
            $dogs[$i]['LikesPeople'] = $row ['LikesPeople'];
            $dogs[$i]['LikesChildren'] = $row ['LikesChildren'];
            $dogs[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs[$i]['KeepIn'] = $row ['KeepIn'];
            $dogs[$i]['PostedOn'] = $row ['posted'];
            $dogs[$i]['Adoptable From'] = $row ['adoptableFrom'];
            $dogs[$i]['PostCode'] = $row ['postcode'];
            $dogs[$i]['breedimg'] = $row ['breedimg'];

            $i++;

            $response = $dogs;

            
        
            
        }

        echo json_encode($response);

        



    }

    //GET BY POSTCODE
    if (isset($_GET['PostCode'])) {

        $dogidparam = $_GET['PostCode'];
       

        $dbq  = "SELECT FHNI_Dog.dogID,FHNI_Dog.name,FHNI_dogBreed.breedimg, FHNI_Dog.age, FHNI_DogSex.DogSexValue, FHNI_dogBreed.dogBreed, FHNI_dogColour.dogColorValue, FHNI_DogCoat.dogCoatValue, FHNI_DogSize.dogSize, NE.isTrueValue AS 'Neutured', HB.isTrueValue AS 'HouseBroken', LP.isTrueValue AS 'LikesPeople', LC.isTrueValue AS 'LikesChildren', GAM.isTrueValue AS 'GetAlongMales', GAF.isTrueValue AS 'GetAlongFemales', GAC.isTrueValue AS 'GetAlongCats', FHNI_DogKeepIn.KeepinValue AS 'KeepIn',`posted`,`adoptableFrom`,substring_index(`postcode`,' ',1) AS 'postcode' 
        FROM FHNI_Dog 
        LEFT JOIN FHNI_DogSex ON FHNI_Dog.DogSexID = FHNI_DogSex.DogSexID LEFT JOIN FHNI_dogBreed ON FHNI_Dog.dogBreedID = FHNI_dogBreed.breedID 
        LEFT JOIN FHNI_dogColour ON FHNI_Dog.dogColorID = FHNI_dogColour.ColorID LEFT JOIN FHNI_DogCoat ON FHNI_Dog.dogCoatID = FHNI_DogCoat.DogCoatID 
        LEFT JOIN FHNI_DogSize ON FHNI_Dog.DogSizeID = FHNI_DogSize.dogsizeID LEFT JOIN FHNI_Bool NE ON FHNI_Dog.neuturedID = NE.isTrueID 
        LEFT JOIN FHNI_Bool HB ON FHNI_Dog.housebrokenID = HB.isTrueID LEFT JOIN FHNI_Bool LP ON FHNI_Dog.likesPeopleID = LP.isTrueID
        LEFT JOIN FHNI_Bool LC ON FHNI_Dog.likesChildrenID = LC.isTrueID LEFT JOIN FHNI_Bool GAM ON FHNI_Dog.getAlongMalesID = GAM.isTrueID
        LEFT JOIN FHNI_Bool GAF ON FHNI_Dog.getAlongFemalesID = GAF.isTrueID LEFT JOIN FHNI_Bool GAC ON FHNI_Dog.getAlongCatsID = GAC.isTrueID
        LEFT JOIN FHNI_DogKeepIn ON FHNI_Dog.keepInID = FHNI_DogKeepIn.KeepinID HAVING postcode = '$dogidparam'";

        $res = $dbconn->query($dbq);

        $dogs = array();
        $response = array();

        $i=0;


        while($row = mysqli_fetch_assoc($res)) {

        
            $dogs[$i]['dogID'] = $row ['dogID'];
            $dogs[$i]['name'] = $row ['name'];
            $dogs[$i]['Age'] = $row ['age'];
            $dogs[$i]['DogGender'] = $row ['DogSexValue'];
            $dogs[$i]['dogBreed'] = $row ['dogBreed'];
            $dogs[$i]['DogColour'] = $row ['dogColorValue'];
            $dogs[$i]['DogCoat'] = $row ['dogCoatValue'];
            $dogs[$i]['DogSize'] = $row ['dogSize'];
            $dogs[$i]['DogNeutered'] = $row ['Neutured'];
            $dogs[$i]['HouseBroken'] = $row ['HouseBroken'];
            $dogs[$i]['LikesPeople'] = $row ['LikesPeople'];
            $dogs[$i]['LikesChildren'] = $row ['LikesChildren'];
            $dogs[$i]['getAlongWithMales'] = $row ['GetAlongMales'];
            $dogs[$i]['getAlongWithFemales'] = $row ['GetAlongFemales'];
            $dogs[$i]['getAlongWithCats'] = $row ['GetAlongCats'];
            $dogs[$i]['KeepIn'] = $row ['KeepIn'];
            $dogs[$i]['PostedOn'] = $row ['posted'];
            $dogs[$i]['Adoptable From'] = $row ['adoptableFrom'];
            $dogs[$i]['PostCode'] = $row ['postcode'];
            $dogs[$i]['breedimg'] = $row ['breedimg'];

            $i++;

            $response = $dogs;

            
        
            
        }

        echo json_encode($response);

        



    }

    //CREATE A USER
    if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_GET['createuser'])){

        $usertypeid = $_POST['usertype'];
        $userfirstname = $_POST['userfirst'];
        $userlastname = $_POST['userlast'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpword'];
        
        $dbq = "INSERT INTO `FHNI_Users` (`UserTypeID`, `firstName`, `lastName`, `Email`, `Password`)
        VALUES ('$usertypeid', '$userfirstname', '$userlastname','$useremail', '$userpassword')";


        $res = $dbconn->query($dbq);

        

        if ($res) {

            

            echo json_encode(
                array('message' => 'User added to the database')
            );
           
        } else {

            $dbconn->error;

            echo json_encode(
                array('message' => 'User not created, check code.')
            );
        }
    }

    //CREATE A DOG
    if($_SERVER["REQUEST_METHOD"]==="POST" && isset($_GET['createdog'])){

        $dogname = $_POST['name'];
        $dogage = $_POST['age'];
        $dogsex = $_POST['gender'];
        $dogbreed = $_POST['breed'];
        $dogcolour = $_POST['colour'];
        $dogcoat = $_POST['coat'];
        $dogsize = $_POST['size'];
        $dogneut = $_POST['neut'];
        $doghouse = $_POST['housebroken'];
        $doglikespeople = $_POST['likespeople'];
        $doglikeschildren = $_POST['likeschildren'];
        $doggam = $_POST['gam'];
        $doggaf = $_POST['gaf'];
        $doggac = $_POST['gac'];
        $dogkeepin = $_POST['keepin'];
        $dogposted = $_POST['posted'];
        $dogadoptfrom = $_POST['adoptfrom'];
        $dogpostcode = $_POST['postcode'];

        
        $dbq = "INSERT INTO `FHNI_Dog` (`name`, `age`, `DogSexID`, `dogBreedID`, `dogColorID`, `dogCoatID`, `dogSizeID`, `neuturedID`, `housebrokenID`, `likesPeopleID`,
         `likesChildrenID`, `getAlongMalesID`, `getAlongFemalesID`, `getAlongCatsID`, `keepInID`, `posted`, `adoptableFrom`, `postcode`, `imgpath`) 
        VALUES ($dogname, $dogage, $dogsex ,$dogbreed, '$dogcolour', '$dogcoat', '$dogsize', '$dogneut', '$doghouse', '$doglikespeople', '$doglikeschildren', '$doggam', '$doggaf',
         '$doggac', '$dogkeepin', '$dogposted', '$dogadoptfrom', '$dogpostcode')";

         


        $res = $dbconn->query($dbq);


        if ($res) {

            echo json_encode(
                array('message' => 'New Dog added to the database')
              );
           
        } else {

            echo json_encode(
                array('message' => 'Dog not created, check code.')
                
              );
              

        }
    }

   

    

    

}




?>