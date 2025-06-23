<?php 
session_start();
if(!isset($_SESSION['login']))
{
    $_SESSION['login']='no';
}
include 'admin/include/init.php';
    
?>
<?php
    $count = 0;
    $error = '';
    $user_firstname = $user_lastname = $user_password = $user_email = $wedding_date = '';

    $account_details = new Account_Details();
    $accounts = new Accounts();
    $booking = new Booking();
    // $category = Category::find_all();
    // $blogEvent = EventWedding::getEventBlogs();

    if (isset($_POST['register'])) {

        $user_firstname = clean($_POST['user_firstname']);
        $user_lastname = clean($_POST['user_lastname']);
        $user_email = clean($_POST['user_email']);
        $user_phone = clean($_POST['user_phone']);
        $wedding_date = clean($_POST['wedding_date']);

        $checkdate = $booking->check_wedding_date($wedding_date);

        if ($checkdate) {
            redirect_to("index.php");
            $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  The wedding you enter is already booked. Please Try another set of date!
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
            die();
        }

        if (empty($user_firstname) ||
            empty($user_phone) ||
            empty($user_email) ||
            empty($user_lastname) ||
            empty($wedding_date)) {
            redirect_to("index.php");
            $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Please Fill up all the fields.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
            die();
        }

        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            redirect_to("index.php");
            $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Incorrect email format.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
            die();

        }

        $check_email = $accounts->email_exists($user_email);

        if ($check_email) {
            redirect_to("index.php");
            $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Email is already Exists.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
            die();
        } else {
            if ($error == '') {
                $count = $count + 1;
                $account_details->firstname = $user_firstname;
                $account_details->lastname = $user_lastname;
                $account_details->status = 'pending';
                $account_details->datetime_created  = date("y-m-d h:m:i");
                $account_details->phone= $user_phone;
                if ($account_details->save()) {
                    $account_details->user_id = mysqli_insert_id($db->connection);

                    if($account_details->update()) {
                        $accounts->user_id = $account_details->user_id;
                        $accounts->user_email= $user_email;


                         if($accounts->save()) {
                             $booking->user_id = $accounts->user_id;
                             $booking->user_email = $user_email;
                             $booking->wedding_date =  $wedding_date;
                             $booking->save();
                             redirect_to("thank_you.php");
                         }
                    }
                }
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANDHAN</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
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

        .alert {
            font-size: 12px;
        }
        .error {
            background-color: #F2DEDE;
        }
        .alert.alert-danger.text-center {
            font-size: 16px;
        }
        .mdi.mdi-alert-circle.mr-3 {
            font-size: 16px;
        }

         .bgact{
                 background: rgba(255, 255,255, 0.4); 
                background: rgb(14 14 14 / 49%);
                padding: 15px;
                width:100%;
                
        }
        
        * {box-sizing: border-box;}
            body {
                /* font-family: Verdana, sans-serif; */
                font-family: "Open Sans", "Roboto", sans-serif !important;}
            .mySlides {display: none;}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
            /* max-width: 1000px; */
            height:800px;
            position: relative;
            margin: auto;
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 7s;
            }

            @keyframes fade {
            from {opacity: .9} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
            }

            .card-columns {
                column-count: 4;
                padding-right:20px;
            }

                    
    </style>
</head>
<body>

<?php include 'include/nav.php'; ?>
    <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found   ">
    </div>


    <div class="loader">
        <a href="loader.php"></a>


<div class="container-fluid">
    <div class="row justify-content-md-center">
        <!-- <div class="hero" style="padding-left:600px;"> -->
            <!-- <div class="row justify-content-md-center"> -->
                <div class="col col-lg-12" style="margin-top:10px;margin-left:10px;">
                    
                    <?php
                        if ($session->message()) {
                            echo $session->message();
                        }
                    ?>
               
               <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 4</div>
                            <img src="images/kia&sid.jpg" style="width:100%;height:850px;">
                        </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 4</div>
                            <img src="images/pic7.jpg" style="width:100%;height:850px;">
                        
                        </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 4</div>
                            <img src="images/img1.jpg" style="width:100%;height:850px;">
                            
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                            <img src="images/c5.jpg" style="width:100%;height:850px;">
                          
                        </div>
              </div>
            <br>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>


            <!-- <div class="col col-lg-3">
                </div> -->
            </div>
        </div><!-- end of hero -->
    </div> <!-- end of row justify-content-md-center -->
</div><!-- end of container-fluid  -->

<div class="container-fluid custom-container">
    <div class="row">
        <div class="col-lg-12">
            <!-- <h3 class="h5 text-uppercase text-center text-muted mt-4">Wedding</h3> -->
            <hr>
            <h2 class="h2 text-uppercase text-center mb-4">Our Wedding Packages</h2>

            <div class="container-fluid">
    <div class="row" style="padding:10px; spacing:10px;">
        <div class="col-md-4" style="padding:10px;">
            <center><img src="images/classic.jpg" width="400px" height="400px" /><p></p> <h5>CLASSIC</h5> <hr>
            <?php
                if(isset($_SESSION['username']))
                    {
                        echo"<button class='btn btn-md ibtn' type='submit' onclick='location.href='package.php''> <span style='margin-left: 10px;'> More Info </span></button></center>";
                    }
                    else
                    {
                        echo"<button class='btn btn-md ibtn' type='submit' onclick='location.href='login.php'> <span style='margin-left: 10px;'> More Info </span></button></center>";
                    }
                    ?>

        </div>
        <div class="col-md-4" style="padding:20px;">
            <center><img src="images/ele.jpg" width="400px" height="400px" /><p></p> <h5>ELEGANT</h5><hr>
                <button class="btn btn-md ibtn" onclick="location.href='package.php'">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center>
        </div>
        <div class="col-md-4" style="padding:20px;">
        <center><img src="images/premier.jpeg" width="400px" height="400px" /><p></p> <h5>PREMIER</h5> <hr>
                <button class="btn btn-md ibtn" onclick="location.href='package.php'">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center>
        </div>
        <div class="col-md-6" style="padding:20px;">
        <center><img src="images/timeless.jpg" width="400px" height="400px" /><p></p> <h5>TIMELESS-GOLD</h5> <hr>
                <button class="btn btn-md ibtn" onclick="location.href='package.php'">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center>
        </div>
        <div class="col-md-6" style="padding:20px;">
        <center><img src="images/elite.jpg" width="400px" height="400px" /><p></p> <h5>ELITE</h5> <hr>
                <button class="btn btn-md ibtn" onclick="location.href='package.php'">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center>
        </div>
    </div>


        </div><!-- end of col-lg-12 -->
    </div><!-- end of row -->
</div><!-- end of container-fluid -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="h2 text-uppercase text-center mb-3">THE LATEST INSPIRATION</h2>
            <h6 class="h6 text-uppercase text-center text-muted mb-3">Discover the best ideas, tips and articles to inspire your wedding.</h6>
            <br><br><br>
            <div class="container">
               <div class="row" style="padding:0px;">
               <div class="col-md-4" style="padding:0px;">
                        <!-- <p hight=15px;><h5>CLASSIC</h5></p> -->
                            <img src="admin/upload/events/kv1.jpg" width="400px" height="400px" onclick="location.href='real-weddings.php'"> <hr><br>
                                <!-- <button class="btn btn-md ibtn" type="submit" > -->
                                    <!-- <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button> -->
                    </div>

                    <div class="col-md-4" style="padding:0px;">
                        <!-- <p hight=15px;><h5>CLASSIC</h5></p> -->
                            <img src="admin/upload/events/sk1.jpg" width="400px" height="400px" onclick="location.href='real-weddings.php'"> <hr><br>
                                <!-- <button class="btn btn-md ibtn" type="submit" > -->
                                    <!-- <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button> -->
                    </div>

                    <div class="col-md-4" style="padding:0px;">
                        <!-- <p hight=15px;><h5>CLASSIC</h5></p> -->
                            <img src="images/cou.jpg" width="400px" height="400px" onclick="location.href='real-weddings.php'"> <hr><br>
                                <!-- <button class="btn btn-md ibtn" type="submit" > -->
                                    <!-- <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button> -->
                    </div>

                    <div class="col-md-4" style="padding:0px;">
                        <!-- <p hight=15px;><h5>CLASSIC</h5></p> -->
                            <img src="admin/upload/events/ab1.jpg" width="400px" height="400px" onclick="location.href='real-weddings.php'"> <hr><br>
                                <!-- <button class="btn btn-md ibtn" type="submit" > -->
                                    <!-- <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button> -->
                    </div>

                    <div class="col-md-4" style="padding:0px;">
                        <!-- <p hight=15px;><h5>CLASSIC</h5></p> -->
                            <img src="admin/upload/events/wdbnt.jpg" width="400px" height="400px" onclick="location.href='real-weddings.php'"> <hr><br>
                                <!-- <button class="btn btn-md ibtn" type="submit" > -->
                                    <!-- <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button> -->
                    </div>

                    <div class="col-md-4" style="padding:0px;">
                        <!-- <p hight=15px;><h5>CLASSIC</h5></p> -->
                            <img src="admin/upload/events/c3.jpg" width="400px" height="400px" onclick="location.href='real-weddings.php'"> <hr><br>
                                <!-- <button class="btn btn-md ibtn" type="submit" > -->
                                    <!-- <span style="margin-left: 10px;">
                                        More Info
                                    </span>
                                </button> -->
                    </div>
                    
                    
                    
                </div>
            </div>
            <a href="real-weddings.php" class="btn btn-lg btn-block btn-explore">EXPLORE MORE INSPIRATION</a>
            </div>
        </div><!-- end of col-lg-12 -->
    </div><!-- end of row -->
</div><!-- end of container -->


<!-- <div class="container-fluid" style="width: 100%;background: white;margin-top: 50px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-lg-6">
            <div class="row img-control">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <img src="DESIGN/checklist-ea253352239433deb24f2ed8ae110aac1840ff8fa5df43967027e880b5f5385b.svg"
                         alt="">
                    <div class="font-custom">CheckList</div>
                </div>
                <div class="col-md-2">
                    <img src="DESIGN/seating-chart-084bbdaabe84a638edf344224d7a92b1bc792db53c5fcf7ab16fcd5a6109ff79.svg"
                         alt="">
                    <div class="font-custom">Seating Chart</div>
                </div>
                <div class="col-md-2">
                    <img src="DESIGN/guest-list-eaaf9277c60be7449e41e2f72f358ae3c94c1b31726b894e064498a9536cac9a.svg"
                         alt="">
                    <div class="font-custom">Guess List</div>
                </div>
                <div class="col-md-2">
                    <img src="DESIGN/budget-6eca6d3898f15dd5682ce3664d8d9ff9bdd271db03857ba8a99e90b9181db46c.svg"
                         alt="">
                    <div class="font-custom">Budget</div>
                </div>
                <div class="col-md-2">
                    <img src="DESIGN/vendor-manager-102fbe8fdbab3e176a6d29bd05c6f26dcd35cfa0f55ff50b1bfd9e70c8fdcdda.svg"
                         alt="">
                    <div class="font-custom">Vendor Manager</div>
                </div>

            </div>
                <h1 class="h1 text-center mt-4">Take the Stress Out of Planning</h1>
                <p class="lead text-muted text-center ml-5" style="font-size: 14px;">Check things off your personalized to-do list all the way to your big day!</p>
        </div>
        <div class="col-lg-6">
            <div class="feature">
                <ul class="list-group rounded-0">
                    <li class="list-group-item rounded-0 d-flex justify-content-between align-items-center ">Announcement your engagement
                        <span class="badge badge-pill" style="font-size: 12px;font-weight: bold;color:#888;">OverDue <i class="mdi mdi-checkbox-blank-outline ml-3" ></i></span>
                    </li>
                    <li class="list-group-item rounded-0 d-flex justify-content-between align-items-center">Plan your engagement party
                        <span class="badge badge-pill" style="font-size: 12px;color:#888">Today <i class="mdi mdi-checkbox-blank-outline ml-3"></i></span>
                    </li>
                    <li class="list-group-item rounded-0 d-flex justify-content-between align-items-center">Schedule an engagement photo shoot
                        <span class="badge badge-pill" style="font-size: 12px;color:#888">Tomorrow <i class="mdi mdi-checkbox-blank-outline ml-3"></i></span>
                    </li>
                    <li class="list-group-item rounded-0 d-flex justify-content-between align-items-center">Set up your registry
                        <span class="badge badge-pill" style="font-size: 12px;color:#888">May 15 <i class="mdi mdi-checkbox-blank-outline ml-3"></i></span>
                    </li>
                    <li class="list-group-item rounded-0 d-flex justify-content-between align-items-center">Start your guest list
                        <span class="badge badge-pill" style="font-size: 12px;color:#888">Today <i class="mdi mdi-checkbox-blank-outline ml-3"></i></span>
                    </li>
                    <li class="list-group-item rounded-0 d-flex justify-content-between align-items-center">Decide on your wedding
                        <span class="badge badge-pill" style="font-size: 12px;color:#888">June 10 <i class="mdi mdi-checkbox-blank-outline ml-3"></i></span>
                    </li>
                    <li class="list-group-item rounded-0 d-flex justify-content-between align-items-center">Select your wedding date
                        <span class="badge badge-pill" style="font-size: 12px;color:#888">June 20 <i class="mdi mdi-checkbox-blank-outline ml-3"></i></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->


<footer class="pt-3">
    <div class="row">
        <div class="col-12 col-md">
            <div class="text-center">
                <small class="d-block mb-3 text-muted">&copy; <?php echo date('D-M-Y')?> </small>
            </div>
        </div>
    </div>
</footer>
 
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/savy.js"></script>
<script>
        $(window).on("load", function () {
            $(".loader-container").fadeOut(2000);
        });
    </script>
<script>

    $(document).ready(function () {
        $('#wedding_date').datepicker();
    <?php
        if($count == 0) {
    ?>
        $('#user_firstname').savy('load');
        $('#user_lastname').savy('load');
        $('#user_email').savy('load');
        $('#user_phone').savy('load');
        $('#wedding_date').savy('load');
    <?php } else { ?>
        $('#user_firstname').savy('destroy');
        $('#user_email').savy('destroy');
        $('#user_lastname').savy('destroy');
        $('#user_phone').savy('destroy');
        $('#wedding_date').savy('destroy');
    <?php } ?>
    });
</script>
<script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script type="text/javascript" src="validationfunction.js"></script>



</body>
</html>