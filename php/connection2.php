<?php

$servername="srv1741.hstgr.io";
$username="u128686732_f2izawebsite";
$password="F2iza@mu2024";
$dbname="u128686732_f2iza";
// Create the connection
$conn= new mysqli($servername,$username,$password,$dbname);


//Check Connection
if($conn->connect_error)
    {
     die("Connection failed: " . $conn->connect_error);
    }  
    
?>