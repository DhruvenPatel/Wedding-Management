<!DOCTYPE html>
<html lang="en">
<?php include("dataclass.php");
        // $_SESSION['log']="NO";
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
         .user{
            background: rgba( 0, 0, 0, 0.50 );
                /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
                /* backdrop-filter: blur( 4px ); */
                /* -webkit-backdrop-filter: blur( 4px ); */
                /* border-radius: 10px; */
                /* border: 1px solid rgba( 255, 255, 255, 0.18 ); */
                }
        .img{
            background-image:url('images/e1.jpg');
                    /* background-repeat:no-repeat;  */
                    background-size: 2000px 950px;
                    /* background-size:1911px; */
                    /* margin-right:30px; */
                } 
    </style>
    
   <script>
        function validation()
        {
            var result=true;
            if(lblusername.innerHTML!="" || lblpassword.innerHTML!="" || lblemailadd.innerHTML!="" || lblcontactno.innerHTML!="" )
            {
                result=false;
            }
            return result;
        }
        </script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">

    
   
        <?php 
            $dc=new dataclass();
            $query="";
            $result="";
            $regid="";
            $regdate="";
            $username="";
            $password="";
            $usertype="";
            $emailadd="";
            $contactno="";
            // $photo="";
            $profileimg="";
            $tmpimg="";
            $msg="Message";
            
        ?>

        <?php 
            if(isset($_POST['btnregister']))
            {
                $regid=$dc->primarykey("select max(regid) from register");
                $regdate=date('y-m-d');
                $username=$_POST['username'];
                $password=$_POST['password'];
                $usertype=$_POST['usertype'];
                $emailadd=$_POST['emailadd'];
                $contactno=$_POST['contactno'];
                $profileimg=$_FILES['image']['name'];
                $tmpimg=$_FILES['image']['tmp_name'];
                
                
                $query="insert into register(regid,regdate,username,password,usertype,emailadd,contactno,profileimg) values('$regid','$regdate','$username','$password','$usertype','$emailadd','$contactno','$profileimg')";
                // echo ($query);
                $result=$dc->saverecord($query);
                if($result)
                {
                    header('location:login.php');
                }
            }

            if(isset($_POST['btncancel']))
            {
                header('location:mainhome.php');
            }
        ?>

</head>

<body class="bg-gradient-primary img">

    <div class="container">
 
        <div class="my-5 user">
            <!-- <div class="card-body "> -->
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block" ></div> -->
                    <div class="col-md-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 text-light">CREATE AN ACCOUNT!</h1>
                            </div>
                            <form class="text-light" name="frmreg" action="#" method="post" enctype="multipart/form-data" onsubmit="return validation()">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" class="form-control form-control-user"  placeholder="User Name" name="username"  onchange='onlyalpha(this,lblusername)' required>
                                        <label id="lblusername"></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"  placeholder="Password" name="password"  onchange='checklength(this,lblpassword,6,8)' required>
                                        <label id="lblpassword"></label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                <select class="form-select form-control-user" name="usertype" required>
                                              <!-- <option value=""></option> -->
                                              <option value="user">User</option>
                                              <!-- <option value="contractor">Contractor</option> -->
                                            </select>
                                            <label for=""></label>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control form-control-user" placeholder="Email Address" name="emailadd"  onchange='checkemail(this,lblemail)'required>
                                    <label id="lblemail"></label>
                                </div>
                                <div class="form-group mb-3">
                                        <input type="text" class="form-control form-control-user"  placeholder="Contact Number" name="contactno"  onchange='checkmobileno(this,lblcontactno)' required>
                                        <label id="lblcontactno"></label>
                                </div>
                                
                                <div class="form-group mb-3">
                                        <input type="file" class="form-control form-control-user" id="lblprofileimg"  name="image" >
                                </div>
      
                               
                                <!-- <a href="#" class="btn btn-primary btnregister btn-block" name="btnregister">
                                    Register Account
                                </a>
                                -->
                                <div class="row md-12 text-center">
                                    <div class="col-md-12 p-2">
                                        <input type="submit" class="btn btn-primary" name="btnregister" value="Register">
                                        <input type="submit" class="btn btn-danger" name="btncancel" value="Cancel">
                                    </div>
                                </div>
                               
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>-->
                            <div class="text-center">
                               <h4><a class="small text-light" href="login.php">Already have an account? Login!</a></sh4> 
                            </div> 
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="validationfunction.js"></script>
   

</body>

</html>