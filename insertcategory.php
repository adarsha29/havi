<?php 
	$conn=mysqli_connect("localhost","root","","sales");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Project</title>
  <style>
	#brand{
		font-family: "Times New Roman", Times, serif;
		font-style: italic;
		margin-top:-2%;
		color:#ffffff;
	}
	body {
		font-family: 'Varela Round', sans-serif;
	}
	#navbar-footer{
		margin-top:1%;
		color:#ffffff;
		text-align:center;
		font-size:20px;
		font-family: "Times New Roman", Times, serif;
		font-style: italic;
	}
	#myCarousel{
		margin-top:-2%;
	}
	#hnav{
		margin-bottom:1%;
		font-family: 'Varela Round', sans-serif;
	}
	#fnav{
		margin-top:12.5%;
		font-family: 'Varela Round', sans-serif;
	}
	#insert{
		width:30%;
		text-align:center;
	}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
	
</head>
<body>
	<nav class="navbar navbar-inverse" id="hnav">
		<div class="container-fluid" >
			<div class="navbar-header col-lg-3">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="index.html"><h2 id="brand">Technical Complaints</h2></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-left col-lg-6">
					<li><a href="index.html">Home</a></li>
					<li class="active" ><a href="#">ADMIN</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<section id="container" >
	
	<aside>
    <div id="sidebar"  class="nav-collapse " style="height:93%;margin-top:-1%;position:absolute;">
        <ul class="sidebar-menu" id="nav-accordion">
              
                           
            <p class="centered">

				<img src="noimage.png"  class="img-circle" width="70" height="70" >
				</p>
                <li class="sub-menu">
                    <a href="ahist.php" ><i class="fa fa-book"></i>
                          <span>Register Complaint</span>
                    </a>
                </li>
               
				<li class="sub-menu">
                    <a class="active" href="insertcategory.php"><i class="fa fa-list"></i>
                        <span>Insert Category</span>
                    </a>
                      
                </li>
                 
				
				<li class="sub-menu">
                    <a href="block.php"><i class="fa fa-exclamation-triangle"></i>
                        <span>Delete Users</span>
                    </a>
                      
                </li> 
				 
        </ul>
    </div>
    </aside>

	<section id="main-content">
          <section class="wrapper">
          	<h3><b><i>INSERT CATEGORY</i></b></h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                          <section id="unseen">
							
							<center><h2> ADD CATEGORY</h2></center>
							<br/>
							<table class="table">
							<td>
                                <center>
                                    <form method="post" action=""> <input type="text" class="form-control form-control-lg" placeholder="CATEGORY" name="insert1" id="insert"/>
							<td><input type="submit" name="sub1" value="INSERT" class="btn btn-info"/></td>
							</form>
                                    </center>
                            </td>
							<?php
								if(isset($_POST['sub1']))
								{
									$txt=$_POST['insert1']; 
									$quer="INSERT INTO `categorytable`(`cat`) VALUES ('$txt')";
									$result = mysqli_query($conn, $quer);
									if($result)
									{
										echo "<script type='text/javascript'> alert('Added'); </script>";
									}
								}?>
							</table>
							<center><h2> ADD PINCODE</h2></center>
							<br/>
							<table class="table">
							<td><center><form method="post" action=""> <input type="text" class="form-control form-control-lg" placeholder="CLASS" name="insert2" id="insert"/>
							<td><input type="submit" name="sub2" value="INSERT" class="btn btn-info"/></td></form>
                                </center></td>
							<?php 
								if(isset($_POST['sub2']))
								{
									$txt1=$_POST['insert2']; 
									$quer="INSERT INTO `class`(`cl`) VALUES ('$txt1')";
									$result = mysqli_query($conn, $quer);
									if($result)
									{
										echo "<script type='text/javascript'> alert('Added'); </script>";
									}
								 }
                            ?>
                              </table>
                              </section>
							
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->	
			  
		  	</div><!-- /row -->
		  	
		  	

		<! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

  </section>
</section>

</body>
</html>