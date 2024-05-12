<?php

$servername='localhost';
$username='root';
$password='';
$database='web_khatabook';

$conn=mysqli_connect($servername,$username,$password,$database);
  
if($conn){
   // echo "connected succesfully";
     
}else{
    echo " sorry cannot connect";
}

?>