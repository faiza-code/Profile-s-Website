<?php
session_start();
include("php/connection2.php");   
$result= mysqli_query($conn , "SELECT * FROM login");
?>
<!DOCTYPE html>
<html>
<head><title>GET DATA</title>
    
<style>
    
    table,th,td{
        border: 1px solid black;
       
    }
    
    th{
        background-color: darkgray;
         color: black;
    }
    
    table{
        border-collapse: collapse;
        width: 100%;
       
    }
    th{
        height: 50px;
    }
    
   
    
    
    
</style></head>
    <body>
        <?php
        if(mysqli_num_rows($result)>0){
        ?>
    <table>
    <tr>
     <th>Name</th>
     <th>Email</th> 
     <th>Message</th>
        
    </tr>
        <?php
            $i=0;
            while($row=mysqli_fetch_array($result)){
                ?>
        <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["message"]; ?></td> 
        </tr>
        
        <?php
          $i++;
            }
        ?>
        
        </table>
        <?php
        }
        else{
            echo "No result found"; 
        }
    
    ?>
    
    
</body>
</html>