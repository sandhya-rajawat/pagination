<?php
include './DB.php';
include './insertview.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $city=$_POST['city'];
  $error=[];
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $error='email is invaild';
}
$sql="INSERT INTO info(name,email,phone,city)VALUES('$name','$email','$phone','$city')";
$result=$conn->query($sql);
if($result){
  echo"<script>alert('Data insert!!')</script>";
}else{
  echo"fasiled".$conn->errno;
}

}
?>