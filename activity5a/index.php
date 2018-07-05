<?php
$fruit1 = array("Apple","apol","10");
$fruit2 = array("Banana","banban","30");
$fruit3 = array("Citrus","citri","20");
$fruit4 = array("Grapes","grapa","40");
$fruit5 = array("Orange","orangu","50");

$arr = array($fruit1,$fruit2,$fruit3,$fruit4,$fruit5);


echo "<table>";
for($a = 0 ; $a<5 ; $a++)
{	
	echo "<tr>";
	echo "<td>" . $arr[$a][0] . "</td> <td>" . $arr[$a][1] . "</td><td> " .$arr[$a][2]. "</td>"; 
	echo "<br>";
}
echo "</table>";

?>