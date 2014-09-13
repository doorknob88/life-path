<?php
require_once("connect.php");

//Get values by POST method
$profile = $_POST["profile"];
$city = $_POST["city"];
$state = $_POST["state"];
$type1 = $_POST["type1"];
$hostel = $_POST["hostel"];
$name = $_POST["name"];
$extracurricular = $_POST["extracurricular"];
$academicfocus = $_POST["academicfocus"];
$citytype = $_POST["citytype"];
$branchname = $_POST["branchname"];
$programme = $_POST["programme"];
$eligibility12 = $_POST["eligibility12"];
$eligibilityUG = $_POST["eligibilityUG"];
$eligibilityEntrance = $_POST["eligibilityEntrance"];
$integrated = $_POST["integrated"];
$duration = $_POST["duration"];
$type2 = $_POST["type2"];

$where_subquery = " FROM college WHERE " + ($city)? "city = '$city' AND " + ($state)? "state = '$state' AND " + ($type1)? "type1= '$type1' AND " + ($hostel)? "hostel = '$hostel' AND " + ($name)? "name = '$name' AND " +($extracurricular)? "extracurricular = '$extracurricular' AND " + ($academicfocus)? "academicfocus = '$academicfocus' AND " + ($citytype)? "citytype = '$citytype' AND " + "ccode IN (SELECT ccode FROM branch WHERE " + ($branchname)? "branchname = '$branchname' AND " + ($programme)? "programme = '$programme' AND " + ($eligibility12)? "eligibility12 < '$eligibility12' AND " + ($eligibilityUG)? "eligibilityUG < '$eligibilityUG' AND " + ($eligibilityEntrance)? "eligibilityEntrance = '$eligibilityEntrance' AND applicationdeadline >= curdate() AND " + ($integrated)? "integrated = '$integrated' AND " + ($duration)? "duration = '$duration' AND " + ($type)? "type2 = '$type2')"; 

$count_query = "SELECT count(*)" + $where_subquery;

$list_query = "SELECT ccode, name, city, state" + $where_subquery;

$college_query = "SELECT * FROM college WHERE ccode = '$ccode'";
$branch_query = "SELECT * FROM branch WHERE ccode = '$ccode'";


?>