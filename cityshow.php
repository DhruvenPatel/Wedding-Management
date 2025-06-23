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
	$msg="";
    $dc=new DataClass();
  ?>
  
  <?php
    if(isset($_POST['btnnew']))
	{
	  $_SESSION['trans']="new";	
	  header('location:cityform.php');
	}	

    if(isset($_POST['btnupdate']))
	{
	  $_SESSION['cityid']=$_POST['btnupdate'];	
	  $_SESSION['trans']="update";	
	  header('location:cityform.php');
	}

	if(isset($_POST['btndelete']))
	{
  	  $cityid=$_POST['btndelete'];
	  $query="delete from city where cityid='$cityid'";
	  $result=$dc->saveRecord($query);   
	  if($result)
	  {
		$msg="Record Delete Successfully...";  
	  }
	  else
	  {
	    $msg="Record can not Delete...";  
	  }
	  
	}
  ?>
</head>
<body>
<div id="wrapper">
  <form name="frm" action="#" method="post">
  
  <?php
    include("navbar.php");
	include("sidebar.php");
  ?>
  
  		<div id="page-wrapper">
		   <div id="page-inner">
		   <div class="row" style="margin-bottom:10px">
              <div class="col-md-10"><span class='heading1'>City Details</span></div>
			  <div class="col-md-2"><button class="btn btn-success pull-right" type='submit' name='btnnew' value="new">NEW</button></div>
			</div>
			
		     <div class="row panel1" >
               <div > 
			     <?php
				  
				   echo("<table class='table table-bordered' id='dataTables-example'>");
				    echo("<thead><tr>");
				    echo("<th>City Id</th><th>City Name</th><th>Short Name</th><th>State</th><th>Delete</th><th>Update</th>");
					echo("</tr></thead>");
				   $query="select cityid,cityname,c.shortname,statename from city c,state s  where c.stateid=s.stateid";
				   $tb=$dc->getTable($query);   				  
				   echo("<tbody>");
				  while($rw=mysqli_fetch_array($tb))
				   {
					  echo("<tr>");
					  echo("<td>".$rw['cityid']."</td>");
				      echo("<td>".$rw['cityname']."</td>");
					  echo("<td>".$rw['shortname']."</td>");
					  echo("<td>".$rw['statename']."</td>");
					  echo("<td><button class='btn btn-danger' type='submit' name='btndelete' value=".$rw['cityid'].">DELETE</button></td>");
					  echo("<td><button class='btn btn-primary' type='submit' name='btnupdate' value=".$rw['cityid'].">UPDATE</button></td>");
					  echo("</tr>");
				   }
				   echo("</tbody>");
				   echo("<tr>");
				   echo("<td colspan='6'>&nbsp;".$msg."</td>");
				   echo("</tr>");
				   echo("</table>");
				 ?>
			   
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
</body>
</html>