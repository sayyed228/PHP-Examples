<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
$id = $_GET['id'];
$name = $_GET['name'];
$Phone = $_GET['Phone'];
$Birthday = $_GET['Birthday'];

$connect = mysql_connect('localhost','root','');

if(!$connect)
{
die('Could not connect' . mysql_error);	
}

mysql_select_db('test',$connect);

/*$sql = "INSERT INTO 'test'.'P_details' ('FirstName', 'LastName', 'DatenTime') VALUES ('".$fname."', '".$lname."', '".$datentime."');";*/

//$sql = "INSERT INTO 'test'.'customers' ('id', 'name', 'Phone', 'Birthday') VALUES (NULL, '".$name."', '".$Phone."', '".$Birthday."')";

$sql = "UPDATE `test`.`customers` SET `name` = '".$name."', `Phone` = '".$Phone."', `Birthday` = 'October 03, 1987' WHERE `customers`.`id` = '".$id."';";
mysql_query($sql) or die('Error updating database');



//echo($fname.'&nbsp;');
//echo($lname.'&nbsp;');


?>






</body>
</html>
