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
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carousel.css">
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
            margin-top: 3%;
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
            color: #b30000;
            text-decoration: none;
        }

        a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn {
            background: #b30000;
            font-size: 14px;
            color: white;
            padding: 5px;
            border: 2px solid transparent;
            width: 85px;
        }

        a.btn.btn-sm.my-2.my-sm-0.mr-2.loginbtn:hover {
            background: white;
            border: 2px solid #b30000;
            color: #b30000;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .9rem;
        }

        .navbar-brand {
            margin-left: 20px;
            width: 200px;
        }

        .form-control {
            font-size: 12px;
            border-radius: 0;
            margin-top: 0;
        }



    </style>

       
<?php 
            $dc=new dataclass();
            $query="";
            $result="";
            $regid="";
            $cnoid="";
            $cname="";
            $cemail="";
            $contactno="";
            $message="";
            // $photo="";
            // $profileimg="";
            // $tmpimg="";
            
        ?>

        <?php 
            if(isset($_POST['btncontact']))
            {
                $cnoid=$dc->primarykey("select max(cnoid) from contacttbl");
                // $regdate=date('y-m-d');
                $cname=$_POST['cname'];
                $cemail=$_POST['cemail'];
                $contactno=$_POST['contactno'];
                $message=$_POST['message'];
                $regid=$_SESSION['regid'];
                // $profileimg=$_FILES['image']['name'];
                // $tmpimg=$_FILES['image']['tmp_name'];
                
                
                $query="insert into contacttbl(cnoid,cname,cemail,contactno,message,regid) values('$cnoid','$cname','$cemail','$contactno','$message','$regid')";
                echo ($query);
                $result=$dc->saverecord($query);
                if($result)
                {
                    header('location:thank_you.php');
                }
            }

            if(isset($_POST['btncancel']))
            {
                header('location:mainhome.php');
            }
        ?>


</head>
    <body>
        <?php include "include/nav.php"; ?>
        <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found   ">
    </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center mb-3">CONTACT US</h3>
                            <div class="bg-white p-4">
                                <div class="contact-information">
                                    <h5>LANDMARKET</h5>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <table class="table table-sm" style="font-size: 12px;">
                                                    <tr>
                                                        <td>BANDHAN</td>
                                                        <td><i class="mdi mdi-deskphone mr-3"></i> 999 (999) 999</td>
                                                    </tr>
                                                    <tr>
                                                        <td>106th, viraval,Navsari</td>
                                                        <td><i class="mdi mdi-phone mr-3"></i> +91 9510421980</td>
                                                    </tr>
                                                    <tr>
                                                        <td>wedding buldding,opp Bus Station,Navsari</td>
                                                        <td><i class="mdi mdi-email mr-3"></i>bandhanweddingplanner21@gmail.com</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-center mt-3">
                                                    <i class="mdi mdi-map-marker" style="font-size: 110px;color: #b30000;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white mt-3 pt-1 pl-4 pb-3">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <form action="#" method="post" style="font-size: 12px;">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12 mb-1">
                                                                <label for="contact_person">Name</label>
                                                                    <input type="text" class="form-control" id="contact_person" placeholder="Enter Name" name="cname">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-1">
                                                                <label for="contact_email">Email</label>
                                                                <input type="text" class="form-control" id="contact_email" placeholder="Enter email" name="cemail">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-1">
                                                                <label for="contact_phone">Phone</label>
                                                                <input type="text" class="form-control" id="contact_phone" placeholder="Enter mobile phone" name="contactno">
                                                            </div>
                                                            <div class="form-group col-md-12 mb-1">
                                                                <label for="contact_message">Message</label>
                                                                <textarea type="text" class="form-control" style="resize: none;" rows="8" id="contact_message" placeholder="Enter message" name="message"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pr-2">
                                                        <!-- <iframe src="https://www.googlecom/maps/embed?pb=!1m18!1m12!1m3!1d3951.804581750715!2d125.08993251421961!3d7.915471407613357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ff1a2d27bfc2c5%3A0x49f6694edf036a5a!2sAMA+Computer+Learning+Center!5e0!3m2!1sen!2sph!4v1518944564341" width="95%" height="395" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1863.0683161031009!2d72.93858899132056!3d20.94702749431652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0f7b1c01c75bf%3A0x9f1697618293bee4!2z4Kq44Kq14Kq-4KqwIOCqquCri-CqsuCrgOCquCDgqrLgqr7gqojgqqg!5e0!3m2!1sen!2sin!4v1709988276174!5m2!1sen!2sin" width="95%" height="395" style="border:0;" allowfullscreen frameborder="0"></iframe>
                                                    </div>
                                                </div>
                                                <button type="submit" name="btncontact"class="btn btn-primary btn-sm rounded-0" style="font-size: 12px;margin-top: 10px;background: #b30000;border: 0;">Send Message</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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