<html>
 <head>
 <?php
   session_start();
   include("css.php");
   include("../class/DataClass.php");
 ?>
 
 <?php
   $prdid="";
   $prdname="";
   $cmpname="";
   $stock="";
   $price="";
   $filename="";
   $dc=new DataClass();
  ?>
  
   <?php
	 if(isset($_POST['btnbook']))
	 {
	    $bookid=$dc->primary("select max(bookid) from booking");
		$bookdate=date('y-m-d');

		if(($_SESSION['regid']== '') || (!isset($_SESSION['regid']))) 
		{
		  $_SESSION['regid']=2;	
	    }  
	    $regid=$_SESSION['regid'];
	  
		$query="insert into booking(bookid,boodate,prdid,regid) values('$bookid','$bookdate','$prdid','$regid')";
		$result=$dc->saveRecord($query);
	 }
	 
	 if(isset($_POST['btnproduct']))
	 {
	   header('location:product.php');
	 }
		 
   ?>

 <style type="text/css">
   td{border-top:none!important;}
 </style>
 
 </head>
 <body>

 <form name="frm" action="#" method="post">
 <div id="wrapper" class="home-page">
 <?php
   include("topbar.php");
   include("header.php");
 ?>
 
 
 
<section id="content">
	<div class="container"> 
	  
	  <?php
		 if(($_SESSION['prdid'] != '') || (isset($_SESSION['prdid']))) 
		 {
		   $prdid=$_SESSION['prdid'];
		   $query="select prdid,prdname,stock,price,cmpname,filename from product p,company c where p.cmpid=c.cmpid and prdid='$prdid'";
		   $rw=$dc->getRecord($query); 					 
		   $prdname=$rw['prdname'];
		   $cmpname=$rw['cmpname'];
		   $price=$rw['price'];
		   $stock=$rw['stock'];
		   $filename=$rw['filename'];
		  }
	   ?>	

	  <div class="row">
       <div class="col-md-2"></div>
	   <div class="col-md-8">  
	   <div class="row panel1" >
	  	<div class="col-md-6">
		 <?php
		   echo("<img src='../admin/productimages/".$filename."' width='100%' height='300px'>");  
		 ?>
		</div>

		<div class="col-md-6">
		
		<table class='table'>
		  <tr><td colspan='2'><span class='heading1'>PRODUCT DETAILS</span></td></tr>		  
		  <tr>
		    <td style='width:40%'>Product Name</td> <td> :&nbsp;&nbsp; <?php echo($prdname) ?></td>
		  </tr>
		  <tr>
		    <td style='width:40%'>Company</td><td>:&nbsp;&nbsp;<?php echo($cmpname) ?></td>
		 </tr>
		 <tr>
		    <td style='width:40%'>Stock</td><td>:&nbsp;&nbsp;<?php echo($stock) ?></td>
		 </tr>
	     <tr>
		    <td style='width:40%'>Price</td><td>:&nbsp;&nbsp;<?php echo($price) ?></td>
		 </tr> 
		 <tr>
		   <td colspan='2'> 
			   <input type="submit" class="btn btn-success" name="btnorder" value="Order">
			   <input type="submit" class="btn btn-primary" name="btnproduct" value="Product">
			</td>   
		 </tr>
		 </table>  

		</div>
	  </div>
	 </div>
	</div> 
	
	<div class="row">
      <div class="col-md-2"></div>
	   <div class="col-md-8">  
	     <h4> Product Features </h4>
	     <table class='table table-bordered'>
		  <tr class='tbhead'><th>Name</th><th>Value</th></tr>
	    <?php
	       $prdid=$_SESSION['prdid'];
		   $query="select featurename,featurevalue from productfeatures where prdid='$prdid'";
		   $tb=$dc->getTable($query); 	
		   while($rw=mysqli_fetch_array($tb))
		   {
		     echo("<tr>");
			   echo("<td width='30%'>".$rw['featurename']."</td>");
			   echo("<td>".$rw['featurevalue']."</td>");
			 echo("</tr>");
		   }
		   
        ?>
        </table>		
	   </div>
	</div>
	
   </div>	
</section>
	  
 <?php
   include("footer.php");	  
 ?>
</div>
</form>
<?php
   include("js.php");	  
 ?>
</body>
</html>




	  
	  