<!DOCTYPE html>
<html>
<head>
	<?php 

include 'dbconnect.php';



if (isset($_POST['loginbtn'])) {
	$username=stripslashes($_POST["username"]);

    $password=stripslashes(md5($_POST["password"]));

 $stmt = $conn->prepare("SELECT * FROM users WHERE Username=?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // verifying the password
    if ($username==$user['Username'] && $password==$user['Password'] )
    {
        // starts the session created if login info is correct
        session_start();
        $_SESSION['username'] = $user['Username'];
       $_SESSION['status']="logged";
        header("Location: index.php");
        
        exit;
    } else {

        $error = "Login and password don't match";
       echo "ERROR: ".$error;
    }
	
}


	 ?>
	
   

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />    

    <link rel="stylesheet" type="text/css" href="style/fonts.css"/> 
    <link rel="stylesheet" type="text/css" href="style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="style/main.css"/>

	<title>Log In</title>
	<style type="text/css">
		#logindiv{
			width: 500px;
			height: 500px;
			text-align: center;
			margin-left: 500px;
			margin-top: 100px; 
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 20px;

		}

		.logininput{
			width: 300px;
			height: 50px;
			margin-top: 50px;
			border-radius: 20px;
			outline: none;
			border: 0.5px grey solid;
			background-color: white;
		}
		button{
			margin-top: 50px;	
			height: 50px;
			width: 200px;
			color: white;
			background-color: black;
			border-radius: 10px;
			outline: none;

		}

		#logintitle{
			font-size: 35px;
			font-weight: bold;
		}

	</style>
</head>
<body>




	



	<form action="login.php" method="post">

<div id="logindiv">
	
		<h1 id="logintitle">Log in</h1>
		
<input class="logininput" type="text" name="username" placeholder="Username ....." required style="background-color: white;"><br/>
<input class="logininput" type="password" name="password" placeholder="Password" required style="background-color: white;"><br/>

<button name="loginbtn">LogIn</button> <br/><br/>
<p>Dont have an account <a href="signup.php">Sign Up </a> here</p>
</div>

</form>



</body>
</html>
