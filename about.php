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
                /* margin-top: 6%; */
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

        

            /* img.img-fluid.img-custom {
                width: 344px;
                height:230px;
            } */
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

            body {
                font-family: Arial, Helvetica, sans-serif;
                margin-top: 6%;
                }

                html {
                box-sizing: border-box;
                }

                *, *:before, *:after {
                box-sizing: inherit;
                }

                .column {
                float: left;
                width: 33%;
                margin-bottom: 16px;
                padding: 0 8px;
                }

                .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                margin-left: 16px;
                }

                .about-section {
                padding: 50px;
                text-align: center;
                background-color: #b30000;
                color: white;
                }

                .container {
                padding: 0 16px;
                }

                .container::after, .row::after {
                content: "";
                clear: both;
                display: table;
                }

                .title {
                color: grey;
                }

                .button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #b30000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                }

                .button:hover {
                background-color: #555;
                }

                @media screen and (max-width: 650px) {
                .column {
                    width: 100%;
                    height: 100px;
                    display: block;
                }
                }

                .img{
                    /* height:400px; */
                    padding-left:100px;
                    /* width:400px;  */
                }

                .back{
                    background-color:#bfbfbf;
                    margin-bottom:20px;
                }

                

        </style>
    </head>

    <body>
        <?php include 'include/nav.php'; ?>
        <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found   ">
    </div>

        <div class="about-section">
          <b><h3>ABOUT US</h3></b>  
                <h6><p>INDIA's favourite wedding planning website  with over 1.5 millon monthly dedicated users. BANDHAN is a swanky alternative to the outdated wedding planning process. A one-stop-shop for all things weddings, you can find inspiration ideas and vendors within your budget. BANDHAN has been trusted by over 2 million brides & grooms all over the worldto plan their big day. So sit back, log on to BANDHAN, andplan the wedding of your dreams!</p></h6>
                <!-- <p>Resize the browser window to see that this page is responsive by the way.</p> -->
        </div>
                <br><br>
        <div class="back">
        <h2 style="text-align:center">OUR TEAM</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="profile2-boy.jpg" class="img" alt="dhruv" style="width:500px;height:400px;"><hr>
                        <div class="container text-center">
                            <h2>DHRUVEN PATEL</h2>
                                <p class="title">CEO & Founder</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>dhruv@mail.com</p>
                                <!-- <p><button class="button">Contact</button></p> -->
                        </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="profile2-girl.jpg" class="img" alt="Nik" style="width:500px;height:400px;"><hr>
                        <div class="container text-center">
                            <h2>NIKESH PATEL</h2>
                                <p class="title">Art Director</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>nike@mail.com</p>
                                <!-- <p><button class="button">Contact</button></p> -->
                        </div>
                </div>
            </div>
                
            <div class="column">
                <div class="card">
                    <img src="profile2-girl2.jpg" class="img" alt="meg's" style="width:500px;height:400px;"><hr>
                        <div class="container text-center">
                            <h2>MEGHA PATEL </h2>
                                <p class="title">Designer</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>meg's@mail.com</p>
                                <!-- <p><button class="button">Contact</button></p> -->
                        </div>
                </div>
            </div>
            <div><span></span></div>
        </div>
        </div><BR><BR></BR></BR>

        <div>
        <CENTER><a href="feed.php"><button class="btn btn-xl ibtn btn-secondary" style="height:100px;width:300px;">
                    <span style="margin-left: 10px;">
                        GIVE US FEEDBACK
                    </span>
                </button></center></a>
        </div>

<BR><BR><BR></BR></BR></BR>
    </body>
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