<HTML>
  <HEAD>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      
      <!-- Custom styles for this template -->
      <link href="css/signin.css" rel="stylesheet">
      <link rel="stylesheet" href="style.css">

      <style>
                .user{
                    background: rgba( 0, 0, 0, 0.65 );
                    margin:2w3s0px;
                    padding:25px;
                /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
                /* backdrop-filter: blur( 4px ); */
                /* -webkit-backdrop-filter: blur( 4px ); */
                /* border-radius: 10px; */
                /* border: 1px solid rgba( 255, 255, 255, 0.18 ); */
                }

                .img
                {
                    background-image:url('images/e1.jpg');
                    /* background-repeat:no-repeat;  */
                    background-size: 2000px 950px;
                    /* background-size:1911px; */
                    /* margin-right:30px; */
                } 
            </style>


  </HEAD>

  <HEAD>
    <?php
    session_start();
    include("dataclass.php");
    ?>
	
    <?php
      $regid="";
      $username="";
      $oldpassword="";
      $newpassword="";
      $msg="";
      $dc=new DataClass();
    ?>
    
    <?php

      if(isset($_POST["btnchange"]))
      {
        $regid=$_SESSION['regid'];
        $newpassword=$_POST['txtnewpassword'];
        $oldpassword=$_POST['txtoldpassword'];
        $password=$_SESSION['password'];
            if($oldpassword==$password)
            {
              $query="update register set password='$newpassword' where regid='$regid'";
              $result= $dc->saveRecord($query);
              if($result)
              {
                  $msg="Password had been changed...";
              }				  
              else
              {
                  $msg="Password not changed... ";
              }
          }
          else
          {
              $msg="Incorrect Old Password...";
          }
      
      }
      
      if(isset($_POST["btncancel"]))
      {
        header('location:userhome.php');
      }
    ?>
    
  </HEAD>
  
  <BODY class="img">
    <form name="frmhome" action="#" method="post">
      <div id="wrapper" class="home-page">
        <?php
          $regid = $_SESSION["regid"];
          $query = "select regid,username,password from register where regid='$regid'";
          $rw = $dc->getrecord($query);
          $_SESSION['password']=$rw['password'];
        ?>
 
        <section id="content">
	        <div class="container user text-light"> 
  	        <div class="row">
	            <div class="col-md-12"></div>
	              <div class="col-md-12">
      		        <h3 style= "font-family:Comic Sans MS"><center><b><font color=white>PASSWORD CHANGE</font></center></b></h3>   
                    <div class="control-group">
                      <div class="controls" style="margin-top:10px">
			                  <label>Username</label>
			                  <input type="text" name="username" class="form-control" value='<?php echo($rw["username"]) ?>' readonly />
		                  </div>
			              </div> 			
			 
			              <div class="control-group">
                      <div class="controls">
			                  <label>Old Password</label>
			                  <input type="password" name="txtoldpassword" class="form-control" placeholder="Enter old Password" autofocus />
		                  </div>
	                  </div> 			

                    <div class="control-group">
                      <div class="controls">
			                  <label>New Password</label>
			                  <input type="password" name="txtnewpassword" class="form-control" placeholder="Enter new Password" />
		                  </div>
	                  </div> 		
			 
			              <div class="control-group" style="margin-top:15px">
                      <div class="controls">
                        <center>
			                  <input type="submit" style='padding:8px 20px;border-radius:20px!important' class="btn btn-primary" name="btnchange" value="Change"> 
				                <input type="submit" style='padding:8px 20px;border-radius:20px!important' class="btn btn-primary" name="btncancel" value="Cancel"> 
                        </center>
			                </div>
            			  </div> 
			  
                    <center>
                    <div class="control-group">
                      <div class="controls">
			                  <label><?php echo($msg) ?></label>
			                </div>
	                  </div> 
                    </center>
			            </div>
		            </div>
	            </div>	
	          </section>
	        </form>	
        </div> 
      </BODY>
</HTML>