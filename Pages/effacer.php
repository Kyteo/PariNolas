<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$Type = $_POST['Type'];
$ID = $_POST['ID'];

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

while($row = mysqli_fetch_array($result)):    
    if ($Type == "t-shirts"):
       $query = "SELECT * FROM `t-shirts`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "chemises"):
       $query = "SELECT * FROM `chemises`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pantalons"):
       $query = "SELECT * FROM `pantalons`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pull-over"):
       $query = "SELECT * FROM `pull-over`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
endwhile;

while($row1 = mysqli_fetch_array($result1)):  
     echo $row1[0];
     echo $ID;
     
     
    if ($row1[0] == $ID):
        if ($Type == "t-shirts"):
            $sql = "DELETE FROM `t-shirts` WHERE ID LIKE '%$ID%'";
   
        endif;
        if ($Type == "chemises"):
            $sql = "DELETE FROM `chemises` WHERE ID LIKE '%$ID%'";
        
        endif;
        if ($Type == "pantalons"):
            $sql = "DELETE FROM `pantalons` WHERE ID LIKE '%$ID%'";
        
        endif;
        if ($Type == "pull-over"):
            $sql = "DELETE FROM `pull-over` WHERE ID LIKE '%$ID%'";
        
        endif;
    endif;              
endwhile;

if(!mysqli_query($connect, $sql)){
    echo 'Not Deleted';
}else{
    echo 'Deleted';
}

header("refresh:10; url= index.php");        
?> 