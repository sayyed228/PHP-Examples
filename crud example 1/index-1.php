<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Page structure</title>
<meta content="" name="description" />
<meta content="" name="keywords" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="style.css" rel="stylesheet" />
<!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">

</style>

<script type="text/javascript">


</script>


</head>
<body>



<?php
$connect = mysql_connect('localhost','root','');

if(!$connect)
{
die('Could not connect!' . mysql_error);
}

mysql_select_db('test', $connect);
?>

<?php
$sql = ("select * from customers");

$result = mysql_query($sql);

echo('<table class="userRighrAss_ver_bor" border="1" cellpadding="3" cellspacing="3"> ');
while($row = mysql_fetch_array($result))
{
echo('<tr>');
echo('<td><span><input class="name" type="text" value="'.$row['name'].'" /></span></td>');
echo('<td><input class="Phone" type="text" value="'.$row['Phone'].'" /> </td>');
echo('<td><span class="Birthday">'.$row['Birthday'].'</span></td>');
echo('<td><input type="button" id="'.$row['id'].'" value="'.$row['id'].'"/></td>');
echo('</tr>');
}
echo('</table>');
?>



<input type="text" value="" id="id"/>
<input type="text" value="" id="name"/>
<input type="text" value="" id="Phone"/>
<input type="text" value="" id="Birthday"/>



<!-- --> 
<script type="text/javascript"  src="jquery.min.js"></script> 

<script>

$(document).ready(function(e) {
    
	
	function  example()
{
if(window.XMLHttpRequest)
{
aa = new XMLHttpRequest();
}	

aa.onreadystatechange = function()
{
if(aa.readyState==4 && aa.status==200)
{
document.getElementById('txthint').innerHTML=aa.responseText
}
}	


var id = document.getElementById('id').value
var name = document.getElementById('name').value
var Phone = document.getElementById('Phone').value
var Birthday = document.getElementById('Birthday').value


alert(id+ name + Phone + Birthday)

aa.open("GET","display.php?id="+id+"&name="+name+"&Phone="+Phone+"&Birthday="+Birthday,true)  
aa.send()
}

	
	
	
	
	$('input[type="button"]').click(function() {
    var id = $(this).attr('id')
	var name = $(this).closest('tr').find('.name').val()
	var Phone = $(this).closest('tr').find('.Phone').val()
	var Birthday = $(this).closest('tr').find('.Birthday').text()
	   $('#id').val(id)
		$('#name').val(name)
		$('#Phone').val(Phone)
		$('#Birthday').val(Birthday)
		 example()
		 //alert(id)
	});
	
});

</script>

</body>
</html>
