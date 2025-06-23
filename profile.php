<?php session_start();?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANDHAN</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
            margin-top: 6%;
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
            font-size: 14px;
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php include("dataclass.php")?>
    <?php include 'include/nav.php'; ?>

    <?php
        $dc=new dataclass();
        $query="";
        $result=" ";
        $regid="";
        $regdate="";
        $username="";
        $usertype="";
        $emailadd="";
        $contactno="";
        $profileimg="";
        $tmpimg="";
  
    ?>

    <?php
        if(isset($_POST['btnprofile']))
            {
                $regid=$_SESSION['regid'];
                $regdate=$POST['regdate'];
                $username=$POST['username'];
                $usertype=$POST['usertype'];
                $emailadd=$POST['emailadd'];
                $contactno=$POST['contactno'];
                $profileimg=$_FILES['image']['name'];
                $tmpimg=$_FILES['image']['tmp_name'];

                $query="update register set username='$username',usertype='$usertype' ,emailadd='$emailadd' ,contactno='$contactno' ,profileimg='$profileimg'";
                $result=$dc->saverecord($query);
                if($result)
                    {
                        move_uploaded_file($image."image/$image");
                        header('loaction:home.php');
                    }
            }

            if(isset($_POST['btncancel']))
                {
                    header('loaction:home.php');
                }
            if(isset($_POST['btnedit']))
            {

            }
    ?>

</head>
<body>
<div class="my-5 user">
            <!-- <div class="card-body "> -->
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block" ></div> -->
                    <div class="col-md-12">
                        <div class="p-5">
                            <div class="text-center">
                                <b><h1 class="h4 text-gray-900 mb-4 text-dark">PROFILE!</h1></b>
                            </div>
                            <form class="" name="frmreg" action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" class="form-control form-control-user" id="username" placeholder="User Name" name="username" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="examplePassword" placeholder="Password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                <select class="form-select form-control-user" id="exampleusertype" name="usertype">
                                              <!-- <option value=""></option> -->
                                              <option value="user">User</option>
                                              <option value="contractor">Contractor</option>
                                            </select>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="emailadd" required>
                                </div>
                                <div class="form-group mb-3">
                                        <input type="text" class="form-control form-control-user" id="examplecontactno" placeholder="Contact Number" name="contactno" required>
                                </div>
                                
                                <div class="form-group mb-3">
                                        <input type="file" class="form-control form-control-user" id="examplephoto"  name="image" >
                                </div>
      
                               
                                <!-- <a href="#" class="btn btn-primary btnregister btn-block" name="btnregister">
                                    Register Account
                                </a>
                                -->
                                <div class="row md-12 text-center">
                                    <div class="col-md-12 p-2">
                                        <input type="submit" class="btn btn-primary" name="btnregister" value="Save">
                                        <input type="submit" class="btn btn-danger" name="btncancel" value="Cancel">
                                    </div>
                                </div>

                                <div class="row md-12 text-center">
                                    <div class="col-md-12 p-2">
                                <button class="btn btn-md ibtn text-center" type="submit" onclick="location.href='profileupdate.php'" stylesheet=margin-right:100px;>
                                <span style="">
                                    Edit profile
                                </span>
                                </button>

                                <button class="btn btn-md ibtn text-center" type="submit" onclick="location.href='profileshow.php'" stylesheet=margin-right:100px;>
                                <span style="">
                                    Show profile
                                </span>
                                </button>
                                
                            </div></div><br>
                               
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>-->
                            
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>

    
        <!-- <div class="col-md-4 text-center">
           <button class="btn btn-md ibtn text-center" type="submit" onclick="location.href='profileupdate.php'" stylesheet=margin-right:100px;>
                <span style="">
                    Edit profile
                </span>
            </button>
            <a href="profileshow.php"><button  type="submit" name="showprofile" class="btn btn-info edit">Show Profile</button></a>
        </div><br> -->


    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="validationfunction.js"></script>
  
</body>
</html>