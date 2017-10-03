<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$Type = $_POST['Type'];

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

