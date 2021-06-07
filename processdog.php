<?php


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



$userendpoint = "http://dhouston13.lampt.eeecs.qub.ac.uk/7062wdfinal/api/api.php?createdog";

/*
$userendpoint = "http://localhost/WD7062/api/api.php?createdog";
*/



$dogdata = http_build_query(

    array(
        'name'=>$dogname,
        'age'=>$dogage,
        'gender'=>$dogsex,
        'breed'=>$dogbreed, 
        'colour'=>$dogcolour,
        'coat'=>$dogcoat,
        'size'=>$dogsize,
        'neut'=>$dogneut,
        'housebroken'=>$doghouse,
        'likespeople'=>$doglikespeople,
        'likeschildren'=>$doglikeschildren,
        'gam'=>$doggam,
        'gaf'=>$doggaf,
        'gac'=>$doggac,
        'keepin'=>$dogkeepin,
        'posted'=>$dogposted,
        'adoptfrom'=>$dogadoptfrom,
        'postcode'=>$dogpostcode)

        

        

);


$opts= array(
    'http' => array(
        'method'=>'POST',
        'header'=>'Content-Type: application/x-www-form-urlencoded',
        'content'=>$dogdata
    )
);


$context = stream_context_create($opts);

$result = file_get_contents($userendpoint, false, $context);

$response = json_decode($result,true);

echo "<h3>{$response['message']}</h3>";


?>

