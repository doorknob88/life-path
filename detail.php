<?php
require_once("connect.php");

$ccode = $_POST["ccode"];

$branchcode = $_POST["branchcode"];

$ccode = 21;

$branchcode = 11;

$name =  mysql_fetch_row(mysql_query("SELECT name FROM college WHERE ccode = '$ccode'"))[0];

//echo $name;

$city = mysql_fetch_row(mysql_query("SELECT city FROM college WHERE ccode = '$ccode'"))[0];

//echo $city;

$state = mysql_fetch_row(mysql_query("SELECT state FROM college WHERE ccode = '$ccode'"))[0];

//echo $state;

$type1 = mysql_fetch_row(mysql_query("SELECT type1 FROM college WHERE ccode = '$ccode'"))[0];

//echo $type1;

$phone = mysql_fetch_row(mysql_query("SELECT phone FROM college WHERE ccode = '$ccode'"))[0];

//echo $phone;

$email = mysql_fetch_row(mysql_query("SELECT email FROM college WHERE ccode = '$ccode'"))[0];

//echo $email;

$url = mysql_fetch_row(mysql_query("SELECT url FROM college WHERE ccode = '$ccode'"))[0];

//echo $url;

$price = mysql_fetch_row(mysql_query("SELECT price FROM branch WHERE branchcode = '$branchcode'"))[0];

//echo $price;

$branchname = mysql_fetch_row(mysql_query("SELECT branchname FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $branchname;

$programme = mysql_fetch_row(mysql_query("SELECT programme FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $programme;

$eligibility12 = mysql_fetch_row(mysql_query("SELECT eligibility12 FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $eligibility12;

$eligibilityUG = mysql_fetch_row(mysql_query("SELECT eligibilityUG FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $eligibilityUG;

$eligibilityEntrance = mysql_fetch_row(mysql_query("SELECT eligibilityEntrance FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $eligibilityEntrance;

$applicationdeadline = mysql_fetch_row(mysql_query("SELECT applicationdeadline FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $applicationdeadline;

$averagePackage = mysql_fetch_row(mysql_query("SELECT averagePackage FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $averagePackage;

$integrated = mysql_fetch_row(mysql_query("SELECT integrated FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $integrated;

$duration = mysql_fetch_row(mysql_query("SELECT duration FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $duration;

$type2 = mysql_fetch_row(mysql_query("SELECT type2 FROM branch WHERE branchcode='$branchcode'"))[0];
//echo $type2;

$companyname = mysql_fetch_row(mysql_query("SELECT name FROM company WHERE branchcode='$branchcode'"))[0];
//echo $companyname;

$companyurl= mysql_fetch_row(mysql_query("SELECT url FROM company WHERE branchcode='$branchcode'"))[0];
//echo $companyurl;

$profile = mysql_fetch_row(mysql_query("SELECT profile FROM company WHERE branchcode='$branchcode'"))[0];
//echo $profile;

$package = mysql_fetch_row(mysql_query("SELECT package FROM company WHERE branchcode='$branchcode'"))[0];

$lastYear = mysql_fetch_row(mysql_query("SELECT lastYear FROM company WHERE branchcode='$branchcode'"))[0];

$noofstudents = mysql_fetch_row(mysql_query("SELECT noofstudents FROM company WHERE branchcode='$branchcode'"))[0];

$data = array("ccode" => "$ccode", "branchcode" => "$branchcode", "name" => "$name", "city" => "$city", "state" => "$state", "type1" => "$type1", "phone" => "$phone", "email" => "$email", "url" => "$url", "price" => "$price", "branchname" => "$branchname", "programme" => "$programme", "eligibility12" => "$eligibility12", "eligibilityUG" => "$eligibilityUG", "eligibilityEntrance" => "$eligibilityEntrance", "applicationdeadline" => "$applicationdeadline", "averagePackage" => "$averagePackage", "integrated" => "$integrated", "duration" => "$duration", "type2" => "$type2", "companyname" => "$companyname", "companyurl" => "$companyurl", "profile" => "$profile", "package" => "$package", "lastYear" => "$lastYear", "noofstudents" => "$noofstudents");

$json = json_encode((array)$data );

?>

<span id="json_data" style="display:none"><?php echo $json ?></span>