<?php
if(!isset($_COOKIE["name"]))
{
	echo "your COOKIE is not set.";
	setcookie("name","sudip");
} 
else
{
	echo "my name is ".$_COOKIE["name"];
}
?>