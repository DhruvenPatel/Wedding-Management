<html>
<head>
  <?php
   session_start();
//    include("csslink.php");
   include("dataclass.php");
  ?>
  
  <?php
    // $prdid="";
    // $prdname="";
	// $cmpid="";
	// $catid="";
	// $stock="";
	// $price="";
	$filename="";
	$tmpname="";
	$msg="";
	$query="";
	$dc=new dataclass();
  ?>
  
   <?php
  
    // if($_SESSION["trans"]=="update") 
	// {
	//   $prdid=$_SESSION["prdid"];
	//   $query="select * from product where prdid='$prdid'";
	//   $rw=$dc->getRecord($query);
	//   $prdid=$rw['prdid'];
	//   $prdname=$rw['prdname'];
	//   $cmpid=$rw['cmpid'];
	//   $catid=$rw['catid'];
	//   $stock=$rw['stock'];
	//   $price=$rw['price'];
	//   $filename=$rw['filename'];
	// }
	
    if(isset($_POST['btnsave']))
	{
	  
	//   $prdname=$_POST['txtprdname'];
	//   $cmpid=$_POST['lstcmp'];
	//   $catid=$_POST['lstcat'];
	//   $stock=$_POST['txtstock'];
	//   $price=$_POST['txtprice'];
		$filename=$_FILES['fupload']['name'];
	  $tmpname=$_FILES['fupload']['tmp_name'];
	  	  
	//   if($_SESSION['trans']=="new")
	//   {
	//      $prdid=$dc->primary("select max(prdid) from product");
		 
	// 	 $ext=pathinfo($filename,PATHINFO_EXTENSION);
	//      $filename="product".$prdid.".".$ext;	
		 
	// 	 $query="insert into product(prdid,prdname,cmpid,catid,stock,price,filename) values('$prdid','$prdname','$cmpid','$catid','$stock','$price','$filename')";
	// 	 echo($query); 
    //   }	 
	  
	//   if($_SESSION['trans']=="update")
	//   {
	// 	//  $prdid=$_SESSION['prdid'];	
		 
		 if(isset($_FILES['fupload'])|| $filename!='')
		 {
		    // $ext=patinfo($filename,PATHINFO_EXTENSION);
	        // $filename="product".$prdid.".".$ext;	
			$packid='5';
		    $query="update tblweddingcategories set packimg='$filename'  where packid='$packid'";
			echo($query);
		 }
		 else
		 {
		    // $query="update product set prdname='$prdname',cmpid='$cmpid',catid='$catid',stock='$stock',price='$price' where prdid='$prdid'";
		 }
		 
    //   }	 
	  $result=$dc->saveRecord($query);
	  if($result)
	  {
	   if(isset($_FILES['fupload']))
	   {
	     move_uploaded_file($tmpname,"images/packages/".$filename);
	   }
	   
	//    $_SESSION["trans"]="";
	//    $_SESSION["prdid"]="";
	//    header('location:productshow.php');
	  }
	  else
	  {
	    $msg="Record not saved..";
	  }
	}
	
	// if(isset($_POST['btncancel']))
	// {
	//    $_SESSION["trans"]="";
	//    $_SESSION["prdid"]="";
	//    header('location:productshow.php');
	// }	
  ?>
  
</head>
<body>

<div id="wrapper">

  <form name="frm" action="#" method="post" enctype="multipart/form-data" >
  
  <?php
    // include("navbar.php");
	// include("sidebar.php");
  ?>
  		<div id="page-wrapper">
		   <div id="page-inner">
		     
			   
           <div class="row" style="margin-bottom:10px" >
		      <div class="col-md-12"><span class='heading1'>PRODUCT FORM</span></div>
		    </div>
			
		     <div class="row" >
			     <div class="col-md-6 panel1" > 
			      <!-- <div class="form-group">
                    <label>Product Name</label>
                      <input type="text" class="form-control" name="txtprdname" value='<?php echo($prdname) ?>' placeholder="Enter Product Name" autofocus>
                   </div> -->
				   
				   <!-- <div class="form-group">
                     <label>Company</label>
					  <select name="lstcmp" class="form-control">
					    <?php
						//   $query="select cmpid,cmpname from company";
						//   $tb=$dc->getTable($query);
						//   while($rw=mysqli_fetch_array($tb))
						//   {
						//      if($cmpid==$rw['cmpid']) 
						// 	   echo("<option selected value=".$rw['cmpid'].">".$rw['cmpname']."</option>");
						// 	 else
						// 	   echo("<option value=".$rw['cmpid'].">".$rw['cmpname']."</option>");
						//   }
						?>
					  </select>
                   </div>
				   
				    <div class="form-group">
                      <label>Category</label>
                      <select name="lstcat" class="form-control">
					    <?php 
						//   $tb=$dc->getTable("select catid,catname from category"); 
						//   while($rw=mysqli_fetch_array($tb))
						//   {
						// 	if($catid==$rw['catid']) 
						// 	 echo("<option selected value=".$rw['catid'].">".$rw['catname']."</option>");
						// 	else
						//  	 echo("<option value=".$rw['catid'].">".$rw['catname']."</option>");
						//   }
					     ?>
					   </select>
                   </div>
				   
				   <div class="form-group col-md-6" style="padding-left:0px!important">
                      <label>Stock</label>
                      <input type="text" class="form-control" name="txtstock" value='<?php echo($stock) ?>' placeholder="Enter Stock">
                   </div>
				   
				   <div class="col-md-6 form-group" style="padding-right:0px!important">
                      <label>Price</label>
                      <input type="text" class="form-control" name="txtprice" value='<?php echo($price) ?>' placeholder="Enter Price">
                   </div>
				   	    -->
				   <div class="form-group">
                      <label>Product image</label>
                      <input type="file" class="form-control" name="fupload">
                   </div>
				   									   
				   <div class="form-group">
                       <input type="submit" class="btn btn-success" name="btnsave" value="Save">
					   <input type="submit" class="btn btn-danger" name="btncancel" value="Cancel">
                   </div>
				  
				  
			   </div>
			   
			   <div class="col-md-5 panel1" style='margin-left:30px' > 
			   	   <img src=<?php echo("productimages/".$filename); ?> style="width:90%;height:400px;border:1px solid gray;padding:10px;margin:20px">
			   </div> 
				
			   </div>
			   
			    <div class="form-group">
                     <label> <?php echo($msg) ?></label>
                </div>
			 </div>
            
			<?php 
		    //  include("footer.php");
			?>	 		
		
            </div>
		
		</div>
  </form>
</div>
  <?php
    // include("jslink.php");
  ?>
</body>
</html>