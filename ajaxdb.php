<?php 
include 'dbconnect.php';

/*session_start();
if (!$_SESSION['username']&& !isset($_COOKIE["status"])) {
    header("Location: login.php");
}*/

if (isset($_POST["name"])) {
	$name=$_POST["name"];
    $stmt = $conn->prepare("SELECT * FROM users WHERE Username= ?");
    $stmt->execute([$name]);
    $user = $stmt->fetch();

    $data["email"]=$user['Email'];
    
    echo json_encode($data);

}

    


 



 ?>