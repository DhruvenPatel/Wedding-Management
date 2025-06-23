<html>
  <head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
      
    <style>
      .user{
        background: rgba( 0, 0, 0, 0.65 );
        margin:30px;
        padding:30px;
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
  </head>
  
  <head>
    <?php
      session_start();
      include('dataclass.php');
    ?>
 
    <?php
      $username="";
      $emailadd="";
      $password="";
      $msg="";
      $dc=new DataClass();
    ?>
 
    <?php
      if(isset($_POST['btnsubmit']))
      {
        $username=$_POST['username'];
        $emailadd=$_POST['emailadd'];
        $query="select password from register where username='$username' and emailadd='$emailadd'";
        $rw= $dc->getrecord($query);
        if($rw)
          {
            $emaildate=date('y-m-d');  
            $password=$rw['password'];
            $subject="password for ".$username; 
            $description="Hi ".$username. " your password is ".$password;
            $msg=$description;
            //mail($email,$subject,$description);
            $query="insert into email(emaildate,subject,description) values('$emaildate','$subject','$description')";
            $result=$dc->saverecord($query);
            if($result)
              {
                $msg="Password send successfully...";
              }
            else
              {
                $msg="Password not sent";
              }

          }
          else
            {
              $msg="User name or emailid Invalid";
            }
      }

      if(isset($_POST["btncancel"]))
        {
          header('location:mainhome.php');
        }
    ?>
 
    <script>
	    function validation()
	      {
		      var result=true;
		      if(clicked==="submit")
		        {
			        if(lblusername.innerHTML!="" || lblemailadd.innerHTML!="")
			          {
				          result=false;
			          }
	          }
		      return result;
	      } 
    </script>
 
  </head>
  
  <body class="img">
    <div id="wrapper" class="home-page ">
      <form name="frm" action="#" method="post" onsubmit="return validation()"> 
        <section id="content">
	        <div class="container user text-light"> 
  	        <div class="row">
	            <div class="col-md-12"></div>
		          <div class="col-md-12">
		            <div class="control-group">
                  <h3 style="text-align:center">Forgot Password</h3>
                </div>

                <div class="control-group">
                  <label>User Name </label> 
	                <input type="text" name="username" class="form-control" placeholder="User Name" onchange="onlyalpha(this,lbluname)" /> 
                  <label class='errmsg' id="lblusername"></label>
                </div>

                <div class="control-group">
                  <label>Email Address </label> 
	                <input type="text" name="emailadd" class="form-control" placeholder="Enter Email Address" onchange="checkemail(this,lblemail)" /> 
                  <label class='errmsg' id="lblemailadd"></label>
                </div>
  
               <center> <div class="control-group" style="margin-top:10px">
                  <input type="submit" class="btn btn-primary" style='padding:8px 20px;border-radius:20px!important' name="btnsubmit" value="submit" onclick="clicked='submit'"   />
	                <input type="submit" class="btn btn-primary" style='padding:8px 20px;border-radius:20px!important' name="btncancel" value="cancel" onclick="clicked='cancel'"  />
                </div></center>
   
                <div class="control-group">
                  <label name="lblmsg"><?php echo($msg) ?> </label> 
                </div>
              </div>
            </div>
          </div>
        </section>
      </form>
	  

</div>

</body>
</html>




	  
	  