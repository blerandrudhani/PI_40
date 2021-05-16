<!DOCTYPE html>
<html>
<head>
	 <?php

include 'dbconnect.php';

$domains=["hotmail.com","gmail.com","outlook.com"];


if(isset($_POST["signupbtn"])){


	$username=stripslashes($_POST["username"]);
	$email=stripslashes($_POST['email']);
	$password=stripslashes(md5($_POST["password"]));
	$cpassword=stripslashes(md5($_POST["comfpassword"]));


$regex ="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/" ;
$res=preg_match($regex, $_POST['password']);
if(!$res){

header("Location: signup.php);


exit;}

	
if($password==$cpassword){

$email_chunks=explode("@", $email);
if ($email_chunks[1]==$domains[0] || $email_chunks[0]==$domains[1] || $email_chunks[0]==$domains[2]) 
{
	$query="INSERT INTO users(Username,Email,Password) VALUES ('$username','$email','$password')";
	$conn->exec($query);
 echo "<script>alert('New record created succesfully ')</script>";

	}
else{ 

echo "<script> alert('hotmail , gmail , outlook  are allowed only ')</script>"; }


	
	

}
else{

	echo "<script>alert('Passwords dont match !!!' )</script>";
}
}

	 ?>
	<title>Sign Up</title>
	<style type="text/css">
		div{
			width: 500px;
			height: 600px;
			text-align: center;
			margin-left: 500px;
			margin-top: 100px; 
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 20px;


		}

		input{
			width: 300px;
			height: 50px;
			margin-top: 50px;
			border-radius: 20px;
			outline: none;
			border: 0.5px grey solid;
		}
		button{
			margin-top: 35px;	
			height: 50px;
			width: 200px;
			color: white;
			background-color: black;
			border-radius: 10px;
			outline: none;

		}
	legend{
		font-size: 30px;
	}
	h1{
		margin-top: 20px;
	}

	</style>
</head>
<body>




	



	<form action="signup.php" method="post">


	<div>
		<h1>Sign Up</h1>
		
<input type="text" name="username" placeholder="Username ....." required><br/>
<input type="email" name="email" placeholder="Email" required><br/>
<input type="password" name="password" placeholder="Password" id="pas" required title="Password must contain: 8 characters , an uppercase , a digit"><br/>
<input type="password" name="comfpassword" placeholder="Comfirm Password" required><br/>



<button name="signupbtn">Sign Up</button>
<p>Have an account <a href="login.php">Log in </a> here</p>
</div>
</form>
<script type="text/javascript">


	
</script>


</body>
</html>
