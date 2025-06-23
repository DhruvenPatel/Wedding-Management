<?php include_once 'admin/include/init.php';
    // session_start();
?>

    <html>
        <head>
            <!-- Bootstrap core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="css/signin.css" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
        
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
                .user{
                    background: rgba( 0, 0, 0, 0.65 );
                /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
                /* backdrop-filter: blur( 4px ); */
                /* -webkit-backdrop-filter: blur( 4px ); */
                /* border-radius: 10px; */
                /* border: 1px solid rgba( 255, 255, 255, 0.18 ); */
                }

                .img
                {
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

            <?php include("dataclass.php");?>
            <?php 
                $dc=new dataclass();
                $query="";
                $result="";
                $regid="";
                $username="";
                $password="";
                $msg="";
           ?>
                     
            <?php 
                if(isset($_POST['btnlogin']))
                    {
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $query="select regid,username,password,usertype from register where username='$username'";
                        $rw=$dc->getrecord($query);
                        if($rw)
                            {
                                if($password==$rw['password'])
                                    {
                                        $_SESSION['login']='yes';
                                        $_SESSION['regid']=$rw['regid'];
                                        $_SESSION['username']=$rw['username'];
                                        header("location:index.php");
                                    }
                                else
                                    {
                                        $msg="Invalid Password";
                                    }
                            }
                        else
                            {
                                $msg="Invalid Username";
                            }
                    }

                if(isset($_POST['btncancel']))
                    {
                        header('location:mainhome.php');
                    }
            ?>
            <?php

            ?>

        </head>

        <body class="text-light img" stylesheet="height:60;">
        <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found   ">
    </div>
            <form name="frmlogin" action="" method="post" class="user" onsubmit="return validation()">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"></div>
                        <!-- <div class="col-md-12 p-3" > -->
                        <div class="col-sm-12 mb-4 p-4">
                            <div class="row">
                                <div class="col">
                                    <h2 class="text-cente text-light">USER LOGIN</h2>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <label>USERNAME</label>
                                    <!-- <input type="text" class="form-control" name="username" placeholder="Enter Username" value=""> -->
                                    <input type="text" value="<?php echo $username; ?>" name="username" class="form-control" placeholder="Enter Username" onchange='onlyalpha(this,lblusername)' required>
                                    <label id="lblusername"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" value="" onchange='checklength(this,lblpassword,3,8)' required>
                                    <label id="lblpassword"></label>
                                </div>
                            </div>
                            
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" name="btnlogin" value="Login">
                                    <input type="submit" class="btn btn-danger" name="btncancel" value="Cancel">
                                </div>
                            </div>

<!-- ==================================== -->







<!-- ======================================== -->



                            <div class="row mt-3 text-light">
                                <?php echo $msg?>
                            </div>
                        </div>
                    </div>
                 <br>

                    <div class="text-center">
                        <!-- <h4><a class="small  text-light" href="forgotpassword.php">Forgot Password?</a></h4> -->
                        <h4><a class="small  text-light" href="reg.php">Don't have an account? Sign up.</a></h4>
                        <h5><a class="small  text-light" href="passwordchange.php">Change Password</a></h5>
                    </div> 
                </div>
            </form>
        </body>


                    



         <script src="js/jquery-3.2.1.slim.min.js"></script> 
        <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script>
                $('.your-checkbox').prop('indeterminate', true); 
        </script>
        <script  src="validationfunction.js"></script>
        <script>
        $(window).on("load", function () {
            $(".loader-container").fadeOut(2000);
        });
    </script>

    </html>
