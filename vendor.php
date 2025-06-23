<?php 
    include 'admin/include/init.php';
    include("dataclass.php"); 
 
?>
<!doctype html>
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
        <link rel="stylesheet" href="lightbox/css/lightbox.css">
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
                font-family: 'Open Sans', 'Roboto', sans-serif;
                line-height: 1.5em;
                margin-bottom: 2%;
                margin-top: 2%;
                width: 100%;
                overflow-x: hidden;
                background: #f1f1f1;
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

            .form-inline > a.mr-2, .btn.btn-sm.my-2.my-sm-0 {
                color: black;
                font-size: 14px;
                font-weight: 700;
                margin-left: 10px;
            }

            .form-inline > a.mr-2:hover, .btn.btn-sm.my-2.my-sm-0:hover {
                color: #17b4bc;
                text-decoration: none;
            }

            a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn {
                background: #dc3545;
                font-size: 14px;
                color: white;
                padding: 5px;
                border: 2px solid transparent;
                width: 85px;
            }

            a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn:hover {
                background: white;
                border: 2px solid #dc3545;
                color: #dc3545;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .9rem;
            }

            .navbar-brand {
                margin-left: 20px;
                width: 200px;
            }
            .card {
                -webkit-border-radius:0;
                -moz-border-radius:0;
                border-radius:0;
            }
            .card img {
                -webkit-border-radius:0;
                -moz-border-radius:0;
                border-radius:0;
            }

            p.groove {border-style: groove;}

        
            .img {
                width: 100%;
                height: auto;
                }

                .ibtn {
                font-family: 'Open Sans', 'Roboto', sans-serif;
                /* position: absolute; */
                /* top: 50%; */
                /* left: 50%; */
                /* transform: translate(-50%, -50%); */
                /* -ms-transform: translate(-50%, -50%); */
                background-color: #b30000;
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
                text-align: center;
                font-size: 14px;
                }

                .ibtn:hover {
                background-color: grey;
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
                        background-image:url('images/1315500.jpg');
                        /* background-repeat:no-repeat;  */
                        background-size: 2000px 950px;
                        /* background-size:1911px; */
                        /* margin-right:30px; */
                        /* filter: blur(8px); */
                        /* -webkit-filter: blur(8px); */

                    }
                    
                    .bg-text {
                        /* background-color: rgb(0,0,0); Fallback color */
                        /* background-color: rgba(0,0,0, 0.4); Black w/opacity/see-through */
                        /* background-image:url('images/1315500.jpg'); */
                        color: white;
                        font-weight: bold;
                        /* border: 3px solid #f1f1f1; */
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        z-index: 2;
                        width: 100%;
                        padding: 20px;
                        text-align: center;
                        }

        </style> <script>
        function validation()
        {
            var result=true;
            if(lblusername.innerHTML!="" || lbldecors.innerHTML!="" || lblvenues.innerHTML!="" || lblcatering.innerHTML!=""  || lblphotographer.innerHTML!="" )
            {
                result=false;
            }
            return result;
        }
        </script>


    </head>



    <?php 
            $dc=new dataclass();
            $query="";
            $result="";
            $vendorid="";
            $username="";
            $decors="";
            $venues="";
            $catering="";
            $photography="";
            $regid="";
            $msg="Message";
            
        ?>

        <?php 
            if(isset($_POST['btnsubmit']))
            {
                $vendorid=$dc->primarykey("select max(vendorid) from vendor");
                $username=$_SESSION['username'];
                $decor=$_POST['decors'];
                $venues=$_POST['venues'];
                $catering=$_POST['catering'];
                $photography=$_POST['photography'];
                $regid=$_SESSION['regid'];

                
                $query="insert into vendor(vendorid,username,decors,venues,catering,photography,regid) values('$vendorid','$username','$decors','$venues','$catering','$photography','$regid')";
                echo ($query);
                $result=$dc->saverecord($query);
                if($result)
                {
                    header('location:vthank.php');
                }
            }

            if(isset($_POST['btncancel']))
            {
                header('location:mainhome.php');
            }
        ?>




    <?php
        $regid="";
		$username="";
        $msg="";
		$query="";
		$dc=new dataclass();


		$regid=$_SESSION['regid'];
		$query="select regid,username from register  where regid='$regid'";
		$rw=$dc->getRecord($query);
		if($rw)
		    {
	  			$username=$rw["username"];
            }
         ?>

    <body class="text-dark">
        <?php include 'include/nav.php'; ?>
        <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found">
    </div>
            <br><br><br>

            <div>
                <div class="container"  style="margin-top:50px;">
                    <div class="row text-center">
                    <div class="col-sm-3 text-center">
                                <!-- <h1 class="h4 text-gray-900 mb-4">CREATE AN ACCOUNT!</h1> -->
                            </div><br>
                            <form class="text-DARK" name="vendorfrm" action="#" method="post" onsubmit="return validation()">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3">
                                        <B><Label>USERNAME</Label></B>
                                        
                                        <input type="text" value="<?php echo($username) ?>" class="form-control form-control-user"  placeholder="User Name" name="username"  onchange='onlyalpha(this,lblusername)' readonly required>
                                        <!-- <label id="lblusername"></label> -->
                                    </div>
                                    <div class="col-sm-6">
                                    <b><label for="">DECORS</label required></b>
                                        <select class="form-select form-control-user form-control" name="decors" required>
                                            <!-- <option value=""></option> -->
                                            <option value="SELECT DECORS" selected disabled></option>
                                            <option value="banquethalls">AJS FLORALS </option>
                                            <option value="resorts">VINTAGE NUTTERS </option>
                                            <option value="partyhalls">BLINK & BLOOM </option>
                                            <option value="partyhalls">VIVHAA DECORS </option>
                                            <option value="partyhalls">BHAGYASHREE DECORATIONS </option>
                                            <option value="partyhalls">OM FLORALS </option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-3 text-dark">
                                    <b><label for="">VENUES</label></b>
                                        <select class="form-select form-control-user form-control" name="venues" required>
                                            <option value="SELECT VENUES" selected disabled></option>
                                            <option value="lawnsandfarm">LAWNS AND FARMHOUSES</option>
                                            <option value="banquethalls">BANQUET HALLS </option>
                                            <option value="resorts">RESORTS </option>
                                            <option value="partyhalls">PARTY HALLS</option>
                                        </select>
                                </div>

                                <div class="form-group mb-3 text-dark">
                                    <b><label for="">CATERING</label></b>
                                        <select class="form-select form-control-user form-control" name="catering" required>
                                            <option value="SELECT CATERING" selected disabled></option>
                                            <option value="sri sai poultry">SRI SAI POULTRY</option>
                                            <option value="jawahar restaurant">JAWAHAR RESTAURANT </option>
                                            <option value="ishwaramma catering">ISHWARAMMA CATERING </option>
                                            <option value="gala caters">GALA CATERS</option>
                                            <option value="bansuri vatering">BANSURI CATERING</option>
                                        </select>
                                </div>

                                <div class="form-group mb-3 text-dark">
                                    <b><label for="">PHOTOGRAPHER</label></b>
                                        <select class="form-select form-control-user form-control" name="photography" required>
                                            <option value="SELECT PHOTOGRAPHER" selected disabled></option>
                                            <option value="sai photography">SAI PHOTOGRAPHY</option>
                                            <option value="ieye photography">IEYE PHOTOGRAPHY </option>
                                            <option value="kshan photography">KSHAN PHOTOGRAPHY </option>
                                            <option value="pawar filmers">PAWAR FILMERS </option>
                                            <option value="pictures q">PICTURES Q </option>
                                            <option value="wdlife story">WDLIFE STORY</option>
                                        </select>
                                </div>
                    
                                </div>
                                
                                <div class="row md-12 text-center">
                                    <div class="col-md-12 p-2">
                                        <input type="submit" class="btn btn-primary" name="btnsubmit" value="SUBMIT" >
                                        <input type="submit" class="btn btn-danger" name="btncancel" value="CANCEL">
                                    </div>
                                </div>
                               
                            </form>
                            <hr>
                    </div>
                </div>
            </div><br><br><br>
           
        <div class="img">
            <div class="container-fluid text-dark bg-text" style="margin-top:800px;">
                <!-- <center><b><h5>VENUES</h5></b></center> -->
                    <div class="row" style="padding:10px; spacing:10px;">
                        <div class="col-md-4" style="padding:10px;">
                            <center><img src="images/classic.jpeg" width="400px" height="400px" /><p></p> <h5>VENUES</h5> <hr>
                                    <!-- <a href="venue.php"><button class="btn btn-md ibtn" type="submit" onclick="location.href='lawnsfarm.php'">
                                        <span style="margin-left: 10px;">
                                            More Info
                                        </span>
                                    </button></center></a> -->
                        </div>
                        <div class="col-md-4" style="padding:20px;">
                            <center><img src="images/catering.jpg" width="400px" height="400px" /><p></p> <h5>CATERING</h5><hr>
                                <!-- <a href="banquethall.php"> <button class="btn btn-md ibtn">
                                    <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button></center></a> -->
                        </div>
                        <div class="col-md-4" style="padding:20px;">
                            <center><img src="images/photography.jpg" width="400px" height="400px" /><p></p> <h5>PHOTOGRAPHY</h5> <hr>
                                <!-- <a href="resort.php"><button class="btn btn-md ibtn">
                                    <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button></center></a> -->
                        </div>
                        <div class="col-md-6" style="padding:20px;">
                            <center><img src="images/car.jpg" width="400px" height="400px" /><p></p> <h5> WEDDING CAR</h5> <hr>
                                <!-- <a href="destinationwed.php"><button class="btn btn-md ibtn">
                                    <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button></center></a> -->
                        </div>
                        <div class="col-md-6" style="padding:20px;">
                            <center><img src="images/dis-3.jpg" width="400px" height="400px" /><p></p> <h5> DECORATIONS</h5> <hr>
                                <!-- <a href="destinationwed.php"><button class="btn btn-md ibtn">
                                    <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button></center></a> -->
                        </div>
                    </div>
                </div>
        </div>
        
                <script>
                    
                </script>            
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="lightbox/js/lightbox-2.6.min.js"></script>
        <script type="text/javascript" src="validationfunction.js"></script>
        <script>
        $(window).on("load", function () {
            $(".loader-container").fadeOut(4000);
        });
    </script>
    </body>
</html>

