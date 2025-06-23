<html>
<head>
  <?php
    session_start();
    include("csslink.php");
	include("../class/dataclass.php");
  ?>
 <?php
    $cityid="";
    $cityname="";
	$shortname="";
	$stateid="";
	$statename="";
    $dc=new DataClass();
  ?>
  <?php
  
    if($_SESSION["trans"]=="update") 
	{
	  $cityid=$_SESSION['cityid'];
	  $query="select * from city where cityid='$cityid'";
	  $rw=$dc->getRecord($query);
	  $cityid=$rw['cityid'];
	  $cityname=$rw['cityname'];
	  $shortname=$rw['shortname'];
	  $stateid=$rw['stateid'];
	  }
	
    if(isset($_POST['btnsave']))
	{
	  
	   $cityname=$_POST['txtcityname'];
	   $shortname=$_POST['txtshortname'];
	   $stateid=$_POST['lststate'];
	 
	 if($_SESSION['trans']=="new")
	  {
		 $query="insert into city(cityname,shortname,stateid) values('$cityname','$shortname','$stateid')";
		 echo($query);
      }	 
	  if($_SESSION['trans']=="update")
	  {
		 $cityid=$_SESSION['cityid'];	 
	     $query="update city set cityname='$cityname',shortname='$shortname',stateid='$stateid' where cityid='$cityid'";
		 echo($query);
	  }	 
	  
	  $result=$dc->saveRecord($query);
	  if($result)
	  {
	   $_SESSION["trans"]="";
	   $_SESSION["cityid"]="";
	   header('location:cityshow.php');
	  }
	  else
	  {
	    $msg="Record not saved..";
	  }
	  
	}
	
	if(isset($_POST['btncancel']))
	{
	   $_SESSION["trans"]="";
	   $_SESSION["cityid"]="";
	   header('location:cityshow.php');
	}	
  ?>
  
  
  
</head>
<body>
<div id="wrapper">
  <form name="frmcity" action="#" method="post">
  
  <?php
    include("navbar.php");
	include("sidebar.php");
  ?>
  
  		<div id="page-wrapper">
		   <div id="page-inner">
		   
		   <div class="row" style="margin-bottom:20px" >
		      <div class="col-md-3"></div>
              <div class="col-md-6"><span class='heading1'>City Form</span></div>
		    </div>
			
		     <div class="row" >
			  <div class="col-md-3"> </div>
               <div class="col-md-6 panel1"> 
			      
				    <div class="form-group">
                    <label style= "font-family:times new roman"><font color=#2c7a59>City Name</font></label>
                      <input type="text" class="form-control" name="txtcityname" value='<?php echo($cityname) ?>' placeholder="Enter city Name" autofocus onchange='checkblank(this,lblcity)'>
					   <label class='errmsg' id="lblcity"></label>
                   </div>
				   
				   <div class="form-group">
                    <label style= "font-family:times new roman"><font color=#2c7a59>Short Name</font></label>
                      <input type="text" class="form-control" name="txtshortname" value='<?php echo($shortname) ?>' placeholder="Enter short Name" autofocus onchange='checkblank(this,lblsn)'>
                    <label class='errmsg' id="lblsn"></label>
				   </div>
				   
				     <div class="form-group">
                      <label>State Name</label>
                      <select name="lststate" class="form-control">
					    <?php 
						  $tb=$dc->getTable("select stateid,statename from state"); 
						  while($rw=mysqli_fetch_array($tb))
						  {
							if($stateid==$rw['stateid']) 
							 echo("<option selected value=".$rw['stateid'].">".$rw['statename']."</option>");
							else
						 	 echo("<option value=".$rw['stateid'].">".$rw['statename']."</option>");
						  }
					     ?>
					   </select>
                   </div>
				   
                      
				   <div class="form-group">
                       <input type="submit" class="btn btn-success" name="btnsave" value="Save">
					   <input type="submit" class="btn btn-danger" name="btncancel" value="Cancel">
                   </div>
				   
			   </div>
			 </div>
            
			<?php 
		     include("footer.php");
			?>	 		
		
            </div>
		
		</div>
  </form>
</div>
  <?php
    include("jslink.php");

  ?>
  <script type="text/javascript" src="validationfunction.js"></script>
</body>
</html>