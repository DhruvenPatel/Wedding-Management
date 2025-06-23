<html>
<head>
  <?php
   session_start();
   include("csslink.php");
   include("../class/DataClass.php");
 ?>
  
  <?php
    $prdid="";
	$filename="";
   	$msg="";
	$query="";
	$showhide="none";
	$dc=new DataClass();
  ?>
  
  <?php
    if(isset($_POST['btnnew']))
	{
	  $_SESSION['trans']="new";	
	  header('location:productform.php');
	}	

    if(isset($_POST['btnupdate']))
	{
	  $_SESSION['prdid']=$_POST['btnupdate'];	
	  $_SESSION['trans']="update";	
	  header('location:productform.php');
	}

	if(isset($_POST['btndelete']))
	{
  	  $prdid=$_POST['btndelete'];
	  $query="delete from product where prdid='$prdid'";
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
  
<body>

<form name="frm" action="#" method="post" enctype="multipart/form-data">
 
<div id="wrapper">
  
  <?php
    include("navbar.php");
	include("sidebar.php");
  ?>
  		<div id="page-wrapper">
		   <div id="page-inner">
		   
		   	 <div class="row" style="margin-bottom:10px">
              <div class="col-md-10"><span class='heading1'>PRODUCT DETAILS</span></div>
			  <div class="col-md-2" ><button class="btn btn-success pull-right" type='submit' name='btnnew' value="new">NEW</button></div>
			</div>
		   
		   <div class="row" style="margin-bottom:20px" >
             <div class="col-md-12 panel1" > 
			    
	           <table class='table table-bordered' id='dataTables-example'>
			   <thead>
			    <tr><th>ID</th><th>NAME</th><th>COMPANY</th><th>CATEGORY</th><th>STOCK</th><th>PRICE</th><th>DELETE</th><th>UPDATE</th><th>IMAGE</th><th>FEATURE</th></tr>
			   </thead>
		     <?php
			     
				   $query="select prdid,prdname,cmpname,catname,stock,price,filename from product p,company c,category ct where p.cmpid=c.cmpid and p.catid=ct.catid";
				   $tb=$dc->getTable($query);   
				   echo("<tbody>");
				   while($rw=mysqli_fetch_array($tb))
				   {
				     
					  echo("<tr>");
					  echo("<td>".$rw['prdid']."</td>");
				      echo("<td>".$rw['prdname']."</td>");
					  echo("<td>".$rw['cmpname']."</td>");
					  echo("<td>".$rw['catname']."</td>");
					  echo("<td>".$rw['stock']."</td>");
				      echo("<td>".$rw['price']."</td>");
					  echo("<td><button class='btn btn-primary' type='submit' name='btndelete' value=".$rw['prdid'].">DELETE</button></td>");
					  echo("<td><button class='btn btn-primary' type='submit' name='btnupdate' value=".$rw['prdid'].">UPDATE</button></td>");
					  echo("</tr>");
				   }
				   echo("</tbody>");
				   echo("<tr>");
				   echo("<td colspan='10'>".$msg."&nbsp;</td>");
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
 <div id="imgshow" style="width:40%;height:400px;position:absolute;left:30%;top:100px;border:1px solid gray;padding:20px;z-index:1000;background-color:silver;display:<?php echo ($showhide) ?>">
  <div class="row">
    <div class='col-md-12'>
     <img src=<?php echo("productimages/$filename"); ?> style="width:100px;height:310px;">
	</div>
   </div>	
   <div class="row" style="margin:20px 0px 20px 0px">
     <div class='col-md-12'>
       <input id="btnclose" class='btn btn-primary pull-right' type="button" name="btnclose" value="close">
	  </div> 
   </div> 
 </div>
 
 <script>
 
       
    $('#btnclose').click(function(){
	    $("#imgshow").hide();
    }); 	
 	
  
 </script>
 
</body>
</html>