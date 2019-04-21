<?php
$username="root";
$password="";
$hostname="localhost";
$databasename="user_connect";
// mysql_select_db("$database") or die("Database error");
$conn = new mysqli($hostname,$username,$password,$databasename); 
if($conn==true)
{
    echo "";
}
else
{
    
    die("Database error");
}
?>