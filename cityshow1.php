<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
    session_start();
    include('dataclass.php');
  ?>

  <?php
    $cityid="";
    $query="";
    $dc=new dataclass();
  ?>

   <?php

  if(isset($_POST['bnew']))
  {
    $_SESSION['trans']='new';
    header('location:cityform1.php');
  }

  if(isset($_POST['bupdate']))
  {
    $_SESSION['trans']='update';
    $_SESSION['cityid']=$_POST['bupdate'];
    header('location:cityform1.php');
  }

   if(isset($_POST['bdelete']))
   {
     $regid=$_POST['bdelete'];
     $query="delete from city where cityid='$cityid'";
     $result=$dc->saverecord($query);
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
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button> -->

             
                <!-- Begin Page Content -->
                <body>
   <form name='frmprd' action="#" method="post">
   <table border='1px' cellpadding='5px' cellspacing='0px' width='50%' align='center'>
   <tr>
   <td colspan='6' align='center'><h2>CITY DETAILS</h2></td>
   <td><input type='submit' name='bnew' value='New'><a href="cityform1.php"></a></td>
   </tr>
   <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>Pincode</th>
    <!-- <th>IMAGE</th> -->
    <th>State</th>
   </tr>

  <?php
      $query="select * from city";
      $tb=$dc->gettable($query);
      $cityid=0;
      $cityname=0;
      $pincode=0;
      $stateid=0;

      while($rw=mysqli_fetch_array($tb))
      {
        echo("<tr>");  
        // echo("<td>".$rw['regid']."</td>");
        echo("<td>".$rw['cityid']."</td>");
        echo("<td>".$rw['cityname']."</td>");
        echo("<td>".$rw['pincode']."</td>");
        // echo("<td>".$rw['sateid']."</td>");
        // echo("<td align='right'>".$rw['amount']."</td>");
        // echo("<td><img class='clsimg' src='productimages/".$rw['filename']."'></td>");
        // $disc=$rw['amount']*0.20;
        // $netamt=$rw['amount']-$disc;
        // echo("<td align='right'>$disc</td>");
        // echo("<td align='right'>$netamt</td>");
        echo("<td><button type='submit' name='bdelete' class='btn-danger' value=".$rw['cityid'].">Delete</button></td>");
        echo("<td><button type='submit' name='bupdate' class='btn-info' value=".$rw['cityid'].">Update</button></td>");
        // echo("</tr>");  
        // $tamt=$tamt+$rw['amount'];
        // $tdisc=$tdisc+$disc;
        // $tnetamt=$tnetamt+$netamt;
      }
      // echo("<tr><td colspan='2'>Total Amount</td><td align='right'>$tamt</td><td>$tdisc</td><td>$tnetamt</td></tr>");  
           
    ?>
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
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>