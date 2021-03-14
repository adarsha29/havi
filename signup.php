<html>
<head>
<title>Sign Up</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
	body
{
    font-family: Tahoma, Geneva, sans-serif;
    color: #fff;
    background:url("abcd.jpg");
    background-size: cover;
}
.signup
{
    background:rgba(44, 62, 80, 0.7);
	padding:40px;
	width:250px;
	margin:auto;
	margin-top:80px;
	height:550px;
	margin-left:180px;
	margin:0 auto;
	margin-top:0px;  
}
form
{
    width: 240px;
    text-align: center;
}
input
{  
    width: 240px;
    text-align: center;
    background: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    font-family: 'Play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
}
button[type=submit]
{
    border: none;
    width: 190px;
    background: white;
    color: #000;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 15px;
    cursor: pointer;
}
button[type=submit]:hover
{
    color: #fff;
    background-color: black;
}
h2
{
    color: #000; 
}
::placeholder {
    color:aliceblue;
    opacity: 0.8;
}
        .contain{
         text-align: center;
    margin-top: 360px;
}
    .btn{
        border: 1px solid #3498db;
        background: none;
        padding: 10px 20px;
        font-size: 20px;
        font-family: "montserrat";
        cursor: pointer;
        margin: 10px;
        transition: 0.8s;
        position: relative;
        overflow: hidden;
    }
    .btn1{
        color: #3498db;
    }
    .btn1:hover{
        color: #fff;
    }
    .btn:before{
        content: "";
        position: absolute;
        left: 0;
        width: 100p%;
        height: 100%;
        background: #3498db;
        z-index:-1;
        transition: 0.8s;
    }
    .btn1::before{
        top:0;
        border-radius: 50% 50% 0 0;
    }
    .btn1:hover:before{
        height: 180%;
    }

    </style>
</head>

<body>
    <a  href="index.html" class="contain">
        <button class="btn btn1">Home</button></a>
<div class="signup">
    <form action="signup.php" method="POST">
    <h2 style="color: #fff;">Sign Up</h2>
    <input type="text" name="fname" placeholder="First Name" required><br><br>
	<input type="text" name="lname" placeholder="Last Name"><br><br>
	<input type="text" name="email" placeholder="Email address" required><br><br>
    <input type="password" name="pass" placeholder="Password" required><br><br>
    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
    <input type="date" name="date" required><br><br>
    <button type="submit" name="submit">Sign Up</button><br><br>
        Already have account?<a href="login.php" style="font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
    </form> 
</div>	
</body>
<?php
$conn = mysqli_connect("localhost","root","","sales");
if(!$conn)
{
	echo "Database connection faild...";
}
if(isset($_POST['submit']))
{
	$fname = $lname = $email = $password = '';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    $date = $_POST['date'];

	$sql = "INSERT INTO user(firstname,lastname,email,password,flag,cpassword,DOJ) VALUES ('$fname','$lname','$email','$password',1,'$cpassword','$date')";
    
     if($password == $cpassword)
    {
	   $result = mysqli_query($conn, $sql);
	   if($result)
	   {
	       header("Location:login.php");}
	   else
	   {
		  echo "Error";
	   }
    }
    else{
         ?><script>alert("Password does not match");</script><?php
    }
}
?>
</html>
