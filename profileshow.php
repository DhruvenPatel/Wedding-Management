<html>
	<HEAD>
		  <!-- Required meta tags -->
		  <meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    		<title>BANDHAN</title>
    		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    		<link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    		<link rel="stylesheet" href="css/bootstrap.min.css">
    		<link rel="stylesheet" href="css/style.css">
			<style>
				body {
					margin-top: 6%;
					/*background-color:black;*/
					/*color:white;*/

				}

				.navbar-light .navbar-brand {
					color: #1a1a1a;
					font-weight: bold;
					line-height: 22px;
				}

				.navbar {
					font-weight: 700;
					padding: 12px;
					font-style: normal;
					font-size: 14px;
					text-transform: uppercase;
					color: black;
					border-bottom: 1px solid #ddd;
				}

				li.nav-item > a.nav-link {
					color: black !important;
					font-weight: bold !important;
				}

				#review {
					font-size: 16px;
					font-weight: bold;
					margin-right: 5px;
				}

			
				.navbar-expand-lg .navbar-nav .nav-link {
					padding-right: .9rem;
				}

				.navbar-brand {
					margin-left: 20px;
					width: 200px;
				}

			

				img.img-fluid.img-custom {
					width: 344px;
					height:230px;
				}
				.btn.btn-sm.btn-light.active:hover {
					background: white;
				}
				.list-group-item:first-child {
					border-top-left-radius: 0rem;
					border-top-right-radius: 0rem;
				}
				.list-group-item:last-child {
					border-bottom-right-radius: 0;
					border-bottom-left-radius: 0;
				}

				.list-group-item.active{
					border-color: #00125100;
				}

				.box_img{
					height:600px;
					width:600px;
					padding:60px;
					border:2px solid white;
					background-color:black;
					
					
				}

				.box_head{
					margin-left:200px;
					margin-top:80px;
					font-size:50px;
					font-family:"Times New Roman", Times, serif;
				}
				.btnadd
				{
					margin-left:200px;
					margin-top:80px;
				} 
				.box_para
				{
					margin-left:200px;
					margin-top:60px;
					font-size:20px;
					font-family: "Times New Roman", Times, serif;
				}  
			</style>
	</HEAD>

	<?php
	session_start();
	//    include("css.php");
	include("dataclass.php");
	?>
 
	<?php
		$regid="";
		$username="";
		$usertype="";
		$emailadd="";
		$cityid="";
		$contactno="";
		$profileimg="";
		// $filename="";
		$tmpname="";
		$msg="";
		$query="";
		$dc=new dataclass();
	?>
  
	<?php
	
	if(($_SESSION['regid'] == '') || (!isset($_SESSION['regid']))) 
	{
		$_SESSION['regid']=2;
		$regid=2;
	}
		

	?> 

	<body>
 		<form name="frm" action="#" method="post" enctype="multipart/form-data">
 			<div id="wrapper" class="home-page">
				<?php
					$regid=$_SESSION['regid'];
					$query="select regid,username,usertype,emailadd,contactno,profileimg from register  where regid='$regid'";
					$rw=$dc->getRecord($query);
					if($rw)
						{
	  						$username=$rw["username"];
	  						$usertype=$rw["usertype"];
	  						$emailadd=$rw["emailadd"];
	  						$contactno=$rw["contactno"];
							//   $cityname=$rw["cityname"];
	  						$profileimg=$rw["profileimg"];
						}
				?>
  				<?php
					include('include/nav.php');
  				?>
				<section id="content">
					<div class="container"> 
						<div class="row">
							<div class="col-md-12"></div>
               				<div class="col-md-6 text-center"> 
			       				<h3> PROFILE </h3>
			   				</div>
						</div>   
	
  	  					<div class="row">
 	       					<div class="col-md-12"></div>
		     				<center><div class="col-md-6"></center> 			   
			     				<img src='<?php echo("images/".$profileimg) ?>' style="width:auto;height:400px;padding:15px;border:2px solid navy"> 
			  				</div><br>
		   
            				<div class="col-md-12">          
								<table class="table table-bordered" style="height:200px!important">			  
			  						<tr>	
			    						<td>Username</td>
										<td><?php echo($username) ?></td> 
			 						</tr>	   
			 						<tr>
			    						<td>Usertype</td>
										<td><?php echo($usertype) ?></td> 
			 						</tr>
			 						<tr>
			    						<td>email address</td>
										<td><?php echo($emailadd) ?></td> 
			 						</tr>	   
			 					 <!--<tr>
				    					<td>City Name</td>
										<td><?php echo($cityname) ?></td> 
			 						</tr>	    -->
									<tr>
			    						<td>Contact Number</td>
										<td><?php echo($contactno) ?></td> 
			 						</tr>	   
		   						</table>	   
            				</div>		
	 					</div>
				</section>
			</div>
		</form>

 		<script type="text/javascript" src="validationfunction.js"></script>
	</body>
</html>