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
		margin-top:8%;
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
                    <a href="insertcategory.php"><i class="fa fa-list"></i>
                        <span>Insert Category</span>
                    </a>
                      
                </li>
                 
				
				<li class="sub-menu">
                    <a class="active" href="block.php"><i class="fa fa-exclamation-triangle"></i>
                        <span>Delete Users</span>
                    </a>
                      
                </li> 
				 
        </ul>
    </div>
</aside>
	<section id="main-content">
          <section class="wrapper">
          	<h3><b><i>DELETE USERS</i></b></h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                          <section id="unseen">
							
							<?php
									$conn=mysqli_connect("localhost","root","","sales");
									$q="select * from user where flag=1";
									$result=mysqli_query($conn,$q);
							?>
							<table class="table">
							<tr><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL</th><th>DELETE</th></tr>
							<?php
								$k=0;
								$j=1;
								$c=mysqli_num_rows($result);
								if($c==0)
								{
							?>
								<td colspan="4">NO Active User...!</td>
							<?php	
								}
								else{
								while($row=mysqli_fetch_assoc($result))
								{
							?>
							<tr><td><?php echo $row["firstname"]; ?></td><td><?php echo $row["lastname"]; ?></td><td><?php echo $row["email"]; ?></td><td><a href="recovery.php?fn=<?php echo $row["firstname"]; ?>&ln=<?php echo $row["lastname"]; ?>&em=<?php echo $row["email"]; ?>&fl=<?php echo $k; ?>"><input type="button" name="btn" value="DELETE"/></a></td></tr>
								<?php
								}
							}
							?>
							</table><br/>
							 </section>
							
						  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->	
			  
		  	</div><!-- /row -->
		  	
		  	

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
    </section>

</body>
</html>