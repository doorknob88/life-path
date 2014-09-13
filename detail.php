<?php

$ccode = $_POST["ccode"];

$where_subquery = " FROM college WHERE " + ($city)? "city = '$city' AND " + ($state)? "state = '$state' AND " + ($type1)? "type1= '$type1' AND " + ($hostel)? "hostel = '$hostel' AND " + ($name)? "name = '$name' AND " +($extracurricular)? "extracurricular = '$extracurricular' AND " + ($academicfocus)? "academicfocus = '$academicfocus' AND " + ($citytype)? "citytype = '$citytype' AND " + "ccode IN (SELECT ccode FROM branch WHERE " + ($branchname)? "branchname = '$branchname' AND " + ($programme)? "programme = '$programme' AND " + ($eligibility12)? "eligibility12 < '$eligibility12' AND " + ($eligibilityUG)? "eligibilityUG < '$eligibilityUG' AND " + ($eligibilityEntrance)? "eligibilityEntrance = '$eligibilityEntrance' AND applicationdeadline >= curdate() AND " + ($integrated)? "integrated = '$integrated' AND " + ($duration)? "duration = '$duration' AND " + ($type)? "type2 = '$type2')"; 

$list_query = "SELECT ccode, name, city, state" + $where_subquery;

$rows = array();
$list = mysql_query($list_query);
if($list){
	while($row = mysql_fetch_assoc($list)){
		array_push($rows,$row);
	}
}
$list = json_encode($rows);

echo $list;
?>
