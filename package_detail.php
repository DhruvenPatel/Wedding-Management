<?php session_start();
    //   if(!defined('MYSITE')){
    //     die('Access Denied');
    //   }
    
?>
<?php include 'admin/include/init.php'; ?>
<?php include ("dataclass.php")?>

<?php 
            $dc=new dataclass();
            $query="";
            $result="";
            $regid="";
            $booking_id="";
            $bookingdt="";
            $user_id="";
            $bride="";
            $groom="";
            $wedding_type="";
            $user_email="";
            $wedding_date="";
            $packid="";
            // $totaldays="";     
        ?>

<?php 
            if(isset($_POST['btnbook']))
            {
                $booking_id=$dc->primarykey("select max(booking_id) from book");
                $bookingdt=date('y-m-d');
                $bride=$_POST['bride'];
                $groom=$_POST['groom'];
                $user_email=$_POST['user_email'];
                $wedding_date=date('y-m-d');
                $packid=$_SESSION['packid'];
            
                $query="insert into book(booking_id,bookingdt,bride,groom,user_email,wedding_date,packid) values('$booking_id','$bookingdt','$bride','$groom','$user_email','$wedding_date','$packid')";
                // echo ($query);
                $result=$dc->saverecord($query);
                if($result){

                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='dp3857772@gmail.com';
                    $mail->Password='enei liud voln bnpd';
    
                    $mail->setFrom('dp3857772@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["user_email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Confirmation Message";
                    $mail->Body="<h3>Booking  Confirmation</h3>";
                    
    
                    if(!$mail->send()){
                        ?>
                        <script>
                        alert("Confirmation Fail");
                        // window.location="package_detail.php";
                        </script>
                        <?php
                        }else{
                            ?>
                            <script>
                            alert("Kindly Check Your Mail");
                            window.location="package.php";
                            </script>
                            <?php
                            }                        
                        }
                    }
                    if(isset($_POST['btncancel'])){
                        header('location:homepage.php');
                    }
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
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
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
        }

        .navbar-light .navbar-brand {
            color: #b30000;
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

        li.nav-item>a.nav-link {
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
            height: 230px;
        }

        .btn.btn-sm.btn-light.active:hover {
            background: white;
        }

        .list-group-item:first-child {
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }

        .list-group-item.active {
            border-color: #b30000;
        }
    </style>
    <script>
        function validation() {
            var result = true;
            if (lblusername.innerHTML != "" || lblpassword.innerHTML != "" || lblemailadd.innerHTML != "" || lblcontactno.innerHTML != "") {
                result = false;
            }
            return result;
        }
    </script>
</head>

<body>

    <?php include 'include/nav.php'; ?>
    <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found   ">
    </div>


    <div class="loader">
        <a href="loader.php"></a>

        <div class="container">

            <div class="row">
                <div class="col-md-8 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->
                    <?php 
                $packid=$_SESSION['packid'];
                $query="select * from tblweddingcategories where packid='$packid'";
                // $query="select * from tbl_features where feature_id='$feature_id'";
                // $query="select c.* , f.* from tblweddingcategories c,tbl_features f where c.packid=f.feature_id";
                $rw=$dc->getrecord($query);
           ?>
                    <div class="float-left bg-white">
                        <h5 class="h5 text-uppercase mb-5 pt-3 pl-3 pr-3">
                            <span class="float-left text-capitalize"> Package Wedding</span>
                            <span class="float-right text-capitalize">Price:
                                <?php echo ($rw['price']); ?>
                            </span>
                        </h5>
                        <img src=<?php echo("images/packages/".$rw['packimg']);?> style='width: 700px;' alt=''>

                        <ul class="list-group">
                            <li
                                class="list-group-item list-group-item-action bg-danger flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 pt-2 pb-2">FUNCTIONS AND SERVICES</h5>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><i class="mdi mdi-check mr-3"></i></h5>
                                </div>
                                <p class="mb-1 ml-3 text-capitalize"></p>
                                <?php
                                        echo "<h6><p class='box_lbl'><b>Function and Services :</b><br>".$rw['title']."</p></h6>";
                                    ?>
                            </li>

                        </ul>
                    </div>
                </div><!-- end of col-md-8 p-0 pl-3 -->

                <div class="col-md-4" style="margin-bottom: 20px;">


                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                        style="background: white;padding: 20px;" onsubmit="return validation()" required>
                        <?php
                            if ($session->message()) {
                                echo $session->message();
                            }
                        ?>
                        <h5 class="h5 text-center mb-3 m-0">Wedding Planning Starts Here</h5>
                        <div class="form-group">
                            <label><b>Bride's Name </b></label>
                            <input type="text" class="form-control" name="bride" maxlength="20" placeholder="Enter Bride's name"
                                onchange='onlyalpha(this,lblbride)' required>
                            <label id="lblbride"></label>
                        </div>

                        <div class="form-group">
                            <label><b>Groom's Name</b></label>
                            <input type="text" class="form-control" name="groom" maxlength="20" placeholder="Enter Groom's name"
                                onchange='onlyalpha(this,lblgroom)' required>
                            <label id="lblgroom"></label>
                        </div>

                        <!-- <div class="form-group">
                        <label><b>Wedding Type</b></label>
                            <input type="text" class="form-control" name="totaldays" placeholder="Enter TotalDays">
                        </div> -->

                        <div class="form-group">
                            <label><b>Email </b></label>
                            <input type="email" class="form-control" name="user_email" placeholder="Enter email" onchange='checkemail(this,lblemail)' required>
                            <label id="lblemail"></label>
                        </div>

                        <div class="form-group">
                            <label><b>Wedding Date</b></label>
                            <input type="date" class="form-control" name="wedding_date"  onchange='checkdate(this,lbldate)' required>
                            <label id="lbldate"></label>
                        </div>

                        <!-- <div class="form-row">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" name="wedding_date" data-provide="datepicker" id="wedding_date"
                                       placeholder="Wedding Date">

                                <div class="input-group-append">
                                    <span class="input-group-text" style="background: white;"><i
                                                style="font-size: 20px;color:#19b5bc;" class="mdi mdi-calendar-check"
                                                id="wedding_date" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div> -->

                        <div class="text-center mt-3">
                            <!-- <input type="hidden" name="booking_id" value=""> -->
                            <button type="submit" name="btnbook"
                                class="btn btn-success btn-sm text-uppercase font-weight-bold"
                                style="margin-top: -5px;">Book Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div><!-- end of container -->



    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script>
        $(window).on("load", function () {
            $(".loader-container").fadeOut(2000);
        });
    </script>
    <script>

        $(document).ready(function () {
            $('#wedding_date').datepicker();
        });
    </script>
    <script type="text/javascript" src="validationfunction.js"></script>
</body>

</html>