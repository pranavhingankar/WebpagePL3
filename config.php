<?php
$con = mysqli_connect('us-cdbr-east-05.cleardb.net','b14bb23ea90f46', 'b220e940', 'heroku_5512b933403394e');

// mysqli_select_db($con,'heroku_5512b933403394e');

if($con==false)
{
    dir('Error: Not Connected');
}



?>
