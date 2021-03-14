<html>
<head>
<title>Admin</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<style>
body
{
    font-family: Tahoma, Geneva, sans-serif;
    color: #fff;
    background:url("abcd.jpg");
    background-size: cover;
}
.signin
{
    background: rgba(44,62,80,0.7);
    padding: 40px;
    width: 250px;
    margin: auto;
    margin-top: 90px;
    height: 400px;
    margin-left: 180x;
    
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
    color: white; 
}
a
{
    color: yellow;
    text-decoration: blink;
}
a:hover
{
    color: skyblue;
}
.container
{
    display: flex;
    flex-direction: row;
    width: 100%;
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
        <button class="btn btn1">Home</button>
    </a>
   <div class="signin">

<form method="POST" action="admin.php">
<h2 style="color:#fff;">Admin Login</h2>
<input type="text" name="email" placeholder="Email" required /><br /><br />
<input type="password" name="password" placeholder="Password" required/><br /><br />
<a><button type="submit" name="submit">Log In</button></a><br /><br />
<div id="container">
<?php 
$conn = mysqli_connect("localhost","root","","sales");

if(!$conn)
{
	echo "Database connection faild...";
}session_start();
if(isset($_POST['submit']))
{
$email = $password ='';
$email = $_POST['email'];
$password = $_POST['password'];
if($email=="admin" &&  $password="1234")
{
	$sql = "SELECT * FROM adminlog WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
        echo "in";
		session_start();
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
		header("Location:ahist.php");
	}
	else
	{
		echo "Invalid password";
		exit;
	}
}

}
?>
    <a href="for.html" style=" margin-left:10px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;"></a>
    </div><br /><br /><br /><br /><br /><br />

</form>
       
</div>
</body>

</html>
