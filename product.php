<html>
 <head>
 <?php
   session_start();
   include("css.php");
   include("../class/DataClass.php");
 ?>
 
 <?php
 $dc=new DataClass();
 ?>
 
 <?php
   if(isset($_POST['btndetails']))
   {
     $id=$_POST['btndetails'];
	 $_SESSION['prdid']=$id;
	 header("location:productdetails.php");
   }
 ?>
 
 <style type="text/css">
  td{border-top:none!important;padding:5px!important;}
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
  	  <div class="row">
	     <?php
	     $tb=$dc->getTable("select * from product");
		 while($rw=mysqli_fetch_array($tb))
		 {
			$prdid=$rw['prdid']; 
			echo( "<div class='col-md-3'>"); 
			echo( "<table class='table'>"); 
				echo("<tr><td colspan='2'><img src='../admin/productimages/".$rw['filename']."' width='100%' height='200px'></td></tr>");  
				echo("<tr><td>Name ".$rw['prdname']."</td>");
				echo("<td rowspan='2' style='text-align:right;vertical-align:middle'><button name='btndetails' value=".$prdid.">Details</button></td></tr>"); 				
				echo("<tr><td>Price ".$rw['price']."</td></tr>"); 

			echo( "</table>"); 
			echo("</div>");
		 }
	    ?>
		
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




	  
	  