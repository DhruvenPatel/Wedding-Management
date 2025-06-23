<?php session_start();
      include 'admin/include/init.php';
      include 'dataclass.php';
      $dc=new dataclass();
?>

       
 
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANDHAN</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .loader-container {
            width: 100vw;
            height: 110vh;
            background-color: black;
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        body {
            margin-top: 6%;
            font-family: "Open Sans", "Roboto", sans-serif !important;
            /*background-color:black;*/
            /*color:white;*/

        }

        .navbar-light .navbar-brand {
            color: #1a1a1a;
            font-weight: bold;
            line-height: 22px;
        }

        .navbar {
            font-weight: 700;
            padding: 12px;
            font-style: normal;
            font-size: 50px;
            text-transform: uppercase;
            color: black;
            border-bottom: 1px solid #ddd;
        }

        li.nav-item > a.nav-link {
            color: black !important;
            font-weight: bold !important;
        }

        #review {
            font-size: 16px;
            font-weight: bold;
            margin-right: 5px;
        }

      
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .9rem;
        }

        .navbar-brand {
            margin-left: 20px;
            width: 200px;
        }

      

        img.img-fluid.img-custom {
            width: 344px;
            height:230px;
        }
        .btn.btn-sm.btn-light.active:hover {
            background: white;
        }
        .list-group-item:first-child {
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .list-group-item.active{
            border-color: #00125100;
        }

        .box_img{
            height:600px;
            width:600px;
            padding:60px;
            border:2px solid white;
            background-color:black;
            
            
        }

        .box_head{
            margin-left:200px;
            margin-top:80px;
            font-size:50px;
            font-family:"Times New Roman", Times, serif;
        }
         .btnadd
         {
            margin-left:200px;
            margin-top:80px;
         } 
         .box_para
         {
            margin-left:200px;
            margin-top:60px;
            font-size:20px;
            font-family: "Times New Roman", Times, serif;
         }  
    </style>
</head>
<body>
<?php include 'include/nav.php'; ?>

<?php include 'include/nav.php'; ?>
    <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found   ">
    </div>
    <div class="loader">
        <a href="loader.php"></a>

<div class="container" style="width: 70%;">
    <div class="row mb-3">
        <div class="col-lg-12"><br>
            <!-- <h3 class="h5 text-uppercase text-center text-muted">Wedding</h3> -->
            <h2 class="h2 text-uppercase text-center mb-0">Select Package</h2>
        </div>
    </div>
     <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 30px;border:1px solid rgba(0,0,0,.125);"> <!-- border:1px solid rgba(0,0,0,.125) -->
        <?php
          
  
        ?>
       <?php 
            if(isset($_POST['btnbook']))
            {
               $_SESSION['packid']=$_POST['btnbook'];  
               if($_SESSION['login']==='no')
               {
                 header('location:login.php');
               }
               else
               {
                 header('location:package_detail.php');
               }    
            } 
                   
        ?>
           
            <div class="float-left" style="width: 90%;"> 
                <ul class="list-group">
                    <li class="list-group-item " style="padding-top: 12px;"><h6 class="h6 text-center">  </h6></li>
                    <!-- <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li> -->
                    <br>
                     
                    <form name="form_package" method="post" enctype="multipart/form-data">
                        <div class="package_container">
                          <div class="space_div">
                              <div class="row tr_space">
                                <?php
                                    $bookingid="";
                                    $regid="";
                                    $custid="";
                                    $contractorid="";
                                    $bookingdt="";
                                    $eventdt="";
                                    $totaldays="";
                                    $title="";
                                    $conn=mysqli_connect('localhost','root','','dbwedding');
                                ?>
                                
                                <?php 
                                    // include("connection.php");
                                    $query="select * from tblweddingcategories";
                                    // $query="select c.* , f.* from tblweddingcategories c,tbl_features f where c.packid=f.feature_id";
                                    $tb=$dc->gettable($query);
                            
                                    while($rw=mysqli_fetch_assoc($tb))
                                    {
                                        echo("<div class='row'>" );

                                        echo("<div class='col-md-5  td_space'>");
                                        echo "<img class='box_img' src='images/packages/".$rw['packimg'] ."'>";
                                        echo "</div>";

                                        echo("<div class='col-md-7  td_space'>");
                                        echo "<h3 class='box_head'>".$rw['wedtype']."</h3>";
                                        echo "<p class='box_head'><b>Price:</b>".$rw['price']."Rs</p>";
                                        echo "<p class='box_para'><b>This Package Includes:</b>".$rw['title']."</p>";
                                        echo "<button type='submit' class='btnadd btn btn-success' name='btnbook' value=".$rw['packid'].">BOOK NOW</button><br>";
                                        echo "<br>";
                                        echo "</div>";
                                        
                                        echo "</div>";

        
                                                                                                                                                                                                                                                                                                                        
        
                                    }
                                ?>

                    </form>
                </ul>
                    </div>

                </div>
            </div>        
        </div>
        
        <form>
       


                         </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
        

</div><!-- end of container -->


 
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="validationfunction.js"></script>
<script>
        $(window).on("load", function () {
            $(".loader-container").fadeOut(2000);
        });
    </script>
</body>
</html>