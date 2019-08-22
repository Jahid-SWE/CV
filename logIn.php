<?php
session_start();
$con =mysqli_connect('localhost','root',"");
mysqli_select_db($con,'resume');
$email=$_POST['email'];
$password=$_POST['password'];

$query="select * from userreg where email='$email' && password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1){
  $row= mysqli_fetch_assoc($result);
  $_SESSION['email']=$email;
  $_SESSION['user_id']=$row['user_id'];
  header('location:education.php');

}
else{
 header('location:Registration.html');
	if($rslt){
	echo"Registration is successfull";
}else{
	echo "error";
}
}




?>