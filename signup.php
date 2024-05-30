<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$idcard = $_POST['idcard'];
		$phonenumber = $_POST['phonenumber'];
		$email = $_POST['email'];
		$rfidtag= $_POST['rfidtag'];
		$password = $_POST['password'];

		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($rfidtag) && !empty($idcard) && !empty($password) && !is_numeric($first_name) && !is_numeric($last_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users2 (user_id,first_name,last_name,password,rfidtag,email,idcard,phonenumber) values ('$user_id','$first_name','$last_name','$password','$rfidtag','$email','$idcard','$phonenumber')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eb6969;
      margin: 0;
      padding: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column; 
      align-items: center;
      overflow: hidden;

    }
    h2 {
      text-align: center;
      padding: 10px;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="text"], input[type="email"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    .container img {
      width: 300px;
      height: 100px;
      align-content: center;
    }
    .message {
      color: #fff;
      font-size: 50px;
      font-family: 'Geneva';
      text-align: right;
      margin-right: 20px;
    }
  </style>
</head>
<body>

  <div class="message">
    Your safety is our priority!
  </div>    
  <div class="container">
    <img class="logo-narsa" src="Images/Logo_narsa.png" alt="Logo Narsa"> 
    <h2>Sign Up</h2>
    <form action="#" method="post">
      <input type="text" name="first_name" placeholder="First Name" required>
      <input type="text" name="last_name" placeholder="Last Name" required>
      <input type="text" name="idcard" placeholder="ID Card" required>
      <input type="text" name="phonenumber" placeholder="Phone Number" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="text" name="rfidtag" placeholder="RFID Tag" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <input type="password" id="confirm_password" placeholder="Confirm Password" required>
      <input type="submit" value="Sign Up">
    </form>
  </div>

  <script>
    var password = document.getElementById("password")
    var confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>

</body>
</html>
