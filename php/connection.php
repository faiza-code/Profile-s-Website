<?php

$servername="localhost";
$username="id17292672_faiza";
$password="BY6afq6l|!yrU]TD";
$dbname="id17292672_form";
// Create the connection
$conn= new mysqli($servername,$username,$password,$dbname);


//Check Connection
if($conn->connect_error)
    {
     die("Connection failed: " . $conn->connect_error);
    }  
    
?>