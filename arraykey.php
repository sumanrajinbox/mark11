<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$a=array("a"=>"red","b"=>"green","c"=>"blue");
if(isset($_POST["submit"] )&& !empty($_POST['color']))
{
	$value=$_POST["color"];
	echo $a[$value];
	}


?>
<form method="post" action="">
<select name="color">
<?php 

foreach($a as $myarray=>$key)
{
	echo '<option value="'.$myarray.'">'.$myarray.'</option>';
	}
	
	 ?></select>
<input type="submit" name="submit"/>


</form>
</body>
</html>