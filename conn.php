<?php
$host='localhost';
$username='root';
$Password="";
$db='grade_report';




$con=mysqli_connect($host , $username, $Password, $db);
//print_r($con);

// Check connection
if ($con) {


}
else
{
    echo "Not Connected";
}
?>