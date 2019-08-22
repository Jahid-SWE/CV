<?php
session_start();
$con =mysqli_connect('localhost','root',"");
mysqli_select_db($con,'resume');
$fullname=$_POST['FullName'];
$email=$_POST['email'];
$password=$_POST['password'];
$age=$_POST['age'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];
$code=$_POST['code'];
$query="select * from userreg where email='$email'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num==1){
	echo "Email already exists";
}
else{
	$insert="insert into userreg(fullname,email,password,age,religion,gender,code)values('$fullname','$email','$password','$age','$religion','$gender','$code')";
	$rslt=mysqli_query($con,$insert);
	if($rslt){
	echo"Registration is successfull";
}else{
	echo "error";
}
}




?>