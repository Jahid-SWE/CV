<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:Registration.html');
}
$con=mysqli_connect('localhost','root',"");
mysqli_select_db($con,'resume');

?>


<?php 

	if(isset($_POST['save'])){
		$date= $_POST['date'];
		$institution_name= $_POST['institution_name'];
		$degree= $_POST['degree'];
		$group= $_POST['group'];
		$user_id=$_SESSION['user_id'];
		$sql = "insert into education(user_id,date,institution_name,degree,egroup)values($user_id,'$date',
		'$institution_name','$degree','$group')";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "Successfully inserted";
		}else{
			echo"error";
		}
	}

 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Education</title>
</head>
<body>
	<div > 
		<form action="" method="post">
		<input type="text" name="date" required=""><br><br>
		<select name="degree">
		     <option >Secondary School certificate</option>
		     <option >Higher Secondary School Certificate</option>
		     <option >Bachelor of Science</option>
		    </select><br><br>
		    <input type="text" name=" institution_name" required><br><br>
		    <select name="group"><br><br>
		    	<option>Science</option>
		    	<option>Commerce</option>
		    	<option>Software Engineering</option>
		    	<option>Computer Science & Engineering</option>

		    </select> <br><br>&emsp;&emsp;&emsp;&emsp;
		   
		    <input type="submit" name="save" value="Save">
       </form>
	</div>

</body>
</html>