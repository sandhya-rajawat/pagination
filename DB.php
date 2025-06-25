<?php
$conn=new mysqli('localhost','root','s@ndhya1133','student','33066');
if($conn->connect_errno){
  die("connection failed:".$conn->connect_errno);
}
else{
  // echo "connection successful::";
}


?>