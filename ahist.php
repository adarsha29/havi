<?php session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.php");
}
else
{
	
	$email=$_SESSION['email'];
	$password=$_SESSION['password'];
}?>
<?php

	$conn=mysqli_connect("localhost","root","","sales");
	$query = "SELECT * FROM  complaints order by time";
	$result=mysqli_query($conn,$query);
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
		margin-top:17%;
		font-family: 'Varela Round', sans-serif;
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
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-left col-lg-6">
					<li><a href="index.html">Home</a></li>
					<li class="active" ><a href="#">ADMIN</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-left">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
                    <a  class="active" href="ahist.php" ><i class="fa fa-book"></i>
                          <span>Complaint Details</span>
                    </a>
                </li>
               
				<li class="sub-menu">
                    <a href="insertcategory.php"><i class="fa fa-list"></i>
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
          	<h3><b><i>Complaints</i></b></h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr style="text-align: center">
                                  <th style="text-align: center">Complaint Number</th>
                                  <th style="text-align: center">First Name</th>
                                  <th style="text-align: center">Last Name</th>
                                  <th style="text-align: center">Email</th>
                              <th style="text-align: center">Category</th>
							   <th style="text-align: center">Class room</th>
							    <th style="text-align: center">Complaint Details</th>
                                  <th style="text-align: center">Issued Date</th>
								  <th style="text-align: center">Current Status</th>
                              </tr>
                              </thead>
                              <tbody>
									
<?php 
$i=0;
$j=1;
$k=2;
while($rows=mysqli_fetch_array($result)){?>


									
                              <tr>
                                  <td align="center"><?php echo $rows["ID"]; ?></td>
                                  <td align="center"><?php echo $rows["FNAME"];?> </td>
                                 <td align="center"><?php echo $rows["LNAME"];?></td>
								 <td align="center"><?php echo $rows["EMAIL"];?> </td>
								 <td align="center"><?php echo $rows["CAT"]; ?></td>
								 <td align="center"><?php echo $rows["CLASS"];?> </td>
								 <td align="center"><?php echo $rows["COMP"]; ?></td>
								  <td align="center"><?php echo $rows["time"]; ?></td>
                                  <td align="center">
                                      <a href="updatehist.php?fn=<?php echo $rows["FNAME"]; ?>&ln=<?php echo $rows["LNAME"]; ?>&em=<?php echo $rows["EMAIL"]; ?>&cat=<?php echo $rows["CAT"]; ?>&cl=<?php echo $rows["CLASS"]; ?>&fl=<?php echo $i; ?>"><button type="button" class="btn btn-theme04">Not Process Yet</button></a>
                              
 <a href="updatehist.php?fn=<?php echo $rows["FNAME"]; ?>&ln=<?php echo $rows["LNAME"]; ?>&em=<?php echo $rows["EMAIL"]; ?>&cat=<?php echo $rows["CAT"]; ?>&cl=<?php echo $rows["CLASS"]; ?>&fl=<?php echo $j; ?>"><button type="button" class="btn btn-warning">In Process</button></a>


 <a href="updatehist.php?fn=<?php echo $rows["FNAME"]; ?>&ln=<?php echo $rows["LNAME"]; ?>&em=<?php echo $rows["EMAIL"]; ?>&cat=<?php echo $rows["CAT"]; ?>&cl=<?php echo $rows["CLASS"]; ?>&fl=<?php echo $k; ?>"><button type="button" class="btn btn-success">Closed</button></a>

                                   
                                </tr>
                              
<?php  }?>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->	
			  
		  	</div><!-- /row -->
		  	
		  	

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

  </section>

</body>
</html>