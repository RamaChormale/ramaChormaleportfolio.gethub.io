<?php

$conn=mysqli_connect('localhost','root','','contact');
if($conn)
{
	echo "connect";
}
else
{
	echo "not contact";
}

?>