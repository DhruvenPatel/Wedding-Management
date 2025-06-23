<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
      session_start();
      include('dataclass.php');
   ?>
  
   <?php
     $dc=new dataclass(); 
     $cityid="";
     $cityname="";
    $pincode="";
      $msg="Message";
   ?>

   <?php

      if($_SESSION['trans']=='update')
      {
         $cityid=$_SESSION['cityid'];
         $query="select * from city where cityid='$cityid'";
         $rw=$dc->getrecord($query);
         $cityname=$rw['cityname'];
         $pincode=$rw['pincode'];

      }
     if(isset($_POST['bsave']))
     {
        
        $cityname=$_POST['cityname'];
        $query="insert into city(cityid,cityname) values('$cityid','$cityname')";
        $result=$dc->saverecord($query);
        if($result)
                {
                    header('location:cityshow1.php');
                }       
        if($_SESSION['trans']=='new')
         {
            $query="select max(cityid) from city";
            $cityid=$dc->primarykey($query);
            $query="insert into city(cityid,cityname) values('$cityid','$cityname')";
         }

        //  if($_SESSION['trans']=='update')
        //  {
        //     $cityid=$_SESSION['cityid'];
        //     $query="update city set cityname='$cityname' where cityid='$cityid'";
        //  }

         if(isset($_POST['bdelete']))
        {
          $cityid=$_POST['bdelete'];
          $query="delete from city where cityid='$cityid'";
          $result=$dc->saverecord($query);
        }

         $result=$dc->saverecord($query);
          if($result)
          {
            // if($filename!="" && $filetype=='image/jpeg')
            // { 
            //   move_uploaded_file($tmpname,'productimages/'.$filename); 
            // }
            // $_SESSION['trans']="";  
            // header('location:productshow.php');
          }
          else
          {
            $msg='Record not saved...';
          }
     }

     if(isset($_POST['bcancel']))
     {
        header('location:cityshow1.php');
     }
    
    function clearall()
     {
        $cityid="";
        $cityname="";
        $pincode="";
     }
 ?>
 
    </head>
      
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
          

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   
                <!-- Begin Page Content -->
                <body>

<form name='frmprd' action='#' method='post' enctype="multipart/form-data" >

  <table align='center' border="1px" cellpadding='5px' cellspacing='0px'>
     <tr>
        <td colspan="2" align='center'><h2>CITY FORM</h2></td>
     </tr>
    <tr>
       <td>cityname Name</td>
       <td> <input type='text' name='cityname' value='<?php echo($cityname) ?>' placeholder='Enter CityName' autofocus></td>
     </tr>
     <tr>
       <td>PinCode </td>
       <td> <input type='text' name='pincode' value='<?php echo($pincode) ?>' placeholder='Enter Pincode' autofocus></td>
     </tr>

     <tr>
      
     <tr>
        <td colspan="2">
         <input type='submit' name='bsave' value='SAVE'>
         <input type='submit' name='bcancel' value='CANCEL'>
       </td>
     </tr>
     <!-- <tr>
        <td colspan="2">  </td>
     </tr> -->
  </table>

</form>
</body>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <!-- <span>Copyright &copy; Your Website 2020</span> -->
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"> -->
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div> -->
                <!-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div> -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="../lightbox/js/lightbox-2.6.min.js"></script>

</body>

</html>