<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC</title>
</head>
<body>
	<form method="post">
<input type="submit" name="submit" value="php">vs
<input type="submit" name="submit" value="ASP">
</form>
<?php 
if (isset($_REQUEST["submit"]))
{
	$rate=$_REQUEST["submit"];
	if(!isset($_COOKIE["rate1"]))
	{
		echo "thanks for votting in".$rate;
		setcookie("rate1",$rate,time()+15);
	}
	else
	{
		echo "you already votted in ".$_COOKIE["rate1"];
	}
}
?>

</body>
</html>