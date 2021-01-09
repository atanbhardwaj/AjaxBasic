<?php
$state = $_GET['state'];
$c1 = array('Lucknow','Kanpur','Agra');
$c2 = array('Dehradun');
$c3 = array('Ludhiyana');
$c4 = array('Jaipur');
$c5 = array('Arnia');

if($state=="Uttar Pradesh")
{
	foreach($c1 as $c)
		echo "<option>$c</option>";
}
else if($state=="Uttrakhand")
{
	foreach($c2 as $c)
		echo "<option>$c</option>";
}
else if($state=="Punjab")
{
	foreach($c3 as $c)
		echo "<option>$c</option>";
}
else if($state=="Jammu Kashmir")
{
	foreach($c5 as $c)
		echo "<option>$c</option>";
}
else if($state=="Rajasthan")
{
	foreach($c4 as $c)
		echo "<option>$c</option>";
}
else
{
	echo "<option>First Select State</option>";
}
?>
