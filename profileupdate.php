<?php
	include 'admin/include/init.php';
	include 'dataclass.php';
	$dc=new dataclass();
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANDHAN</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
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
 
    <?php
        $regid="";
      $ownername="";
      $address="";
      $cityid="";
      $mobileno="";
      $filename="";
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
     
	      if(isset($_POST['btnupdate']))
	        {
	          $regid=$_SESSION['regid'];
		        $ownername=$_POST['txtownername'];
		        $address=$_POST['txtaddress'];
		        // $cityid=$_POST['lstcity'];
		        $mobileno=$_POST['txtmobileno'];	
		        $filename=$_FILES['fupload']['name'];
		        $tmpname=$_FILES['fupload']['tmp_name'];
		  
		        $query="update register set ownername='$ownername',address='$address',cityid='$cityid',mobileno='$mobileno',photo='$filename' where regid='$regid'";
		        echo($query); 
      	    $result=$dc->saveRecord($query);
	          if($result)
	            {
		            if(isset($_FILES['fupload']))
	                {
	                  move_uploaded_file($tmpname,"images/".$filename);
	                }
		            $msg="Profile update successfully";
		          }
	        }	 
	        if(isset($_POST['btncancel']))
	          {
	            header('location:ownerhome.php');
	          }	
    ?> 
  </head>
  <?php include("include/nav.php")?>
  <body> 
    <form name="frm" action="#" method="post" enctype="multipart/form-data"> 
      <div id="wrapper" class="home-page">
        <section id="content">
	        <div class="container"> 	
	          <div class="row">		
 	            <div class="col-md-1"></div>
              <div class="col-md-5"> 
			          <h3>UPDATE PROFILE </h3>
			        </div>
			      </div>   
  	        <div class="row">
 	            <div class="col-md-1"></div>
              <div class="col-md-5"> 			   		      
		            <?php		  
				          $regid=$_SESSION['regid'];
				          $query="select * from register where regid='$regid'";
				          $rw=$dc->getRecord($query);
				          if($rw)
				            {
				              $username=$rw["username"];
				              $usertype=$rw["usertype"];
				              $emailadd=$rw["emailadd"];
				              //   $cityid=$rw["cityid"];
				              $contactno=$rw["contactno"];
				              $profileimg=$rw["profileimg"];
	                  }
			          ?> 
                          
				        <div class="form-group">
                  <label>NAME</label><span style="color:red;font-size:25px">*</span>
                    <input type="text" class="form-control" name="txtownername" value='<?php echo($username) ?>' placeholder="Enter name" onchange='onlyalpha(this,lblname)'/>
 					          <label class='errmsg' id="lblname"></label>
                </div>

				        <div class="form-group">
                  <label>USERTYPE</label><span style="color:red;font-size:25px">*</span>
                    <input type="text" class="form-control" name="txtownername" value='<?php echo($usertype) ?>' placeholder="Enter name" onchange='onlyalpha(this,lblname)'/>
 					          <label class='errmsg' id="lblname"></label>
                </div>
				   
				        <div class="form-group">
                  <label>EMAIL ADDRESS</label><span style="color:red;font-size:25px">*</span>
                    <input type="text" class="form-control" name="txtaddress" value='<?php echo($emailadd) ?>' placeholder="Enter address" onchange='checkblank(this,lbladd)' />
					          <label class='errmsg' id="lbladd"></label>
                </div>
				   
				        <!--<div class="form-group">
                    <label>city Name</label><span style="color:red;font-size:25px">*</span>
                       <select name="lstcity" class="form-control">
					      <?php 
						      $tb=$dc->getTable("select cityid,cityname from city"); 
						      while($rw=mysqli_fetch_array($tb))
						        {
							        if($cityid==$rw['cityid']) 
							          echo("<option selected value=".$rw['cityid'].">".$rw['cityname']."</option>");
							        else
						 	          echo("<option value=".$rw['cityid'].">".$rw['cityname']."</option>");
						        }
					     ?>
					      </select>
					  
                   </div> -->
				   
				        <div class="form-group">
                  <label>CONTACT NUMBER</label><span style="color:red;font-size:25px">*</span>
                    <input type="text" class="form-control" name="txtmobileno" value='<?php echo($contactno) ?>' placeholder="Enter mobileno" onchange='checklength(this,lblno,1,10)' />
					          <label class='errmsg' id="lblno"></label>
                </div>
				  				   				 
				        <div class="form-group">
                  <label>PROFILE PHOTO</label>
                    <input type="file" class="form-control" name="fupload">
                </div>
				   				
				        <div class="form-group">
                  <input type="submit" class="btn btn-success" name="btnupdate" value="Update">
					        <input type="submit" class="btn btn-danger" name="btncancel" value="Cancel">
                  
                </div>
				   
				        <div class="form-group">
                  <label name="lblmsg"> <?php echo($msg) ?></label>
                </div>
			        </div>
			   
              <div class="col-md-5"> 			   
			          <img src='<?php echo("images/".$profileimg) ?>' style="width:100%;height:390px;padding:15px;border:2px solid navy"> 
			        </div>
			   
            </div>		
	        </div>
			  </section>
	      
        <script src="js/jquery-3.2.1.slim.min.js"></script>
	      <script src="js/jquery.min.js"></script>
	      <script src="js/popper.min.js"></script>
	      <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="validationfunction.js"></script>
	
      </div>
    </form>
    <div class="col-md-6">
    <center><input type="submit" class="btn btn-primary" name="btn" value="Show Profile" onclick="location.href='profileshow.php'" style="margin-bottom:0px;"></center>
    </div>
  </body>
</html>

