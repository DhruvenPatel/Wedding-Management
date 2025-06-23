<?php 
    include 'admin/include/init.php'; 

    $gallery = Gallery::find_all(); 

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
            background-color: #660000;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            font-size: 14px;
            }
w
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
                    background-image:url('images/1315500.jpg');
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

    </style>
</head>
<!-- <button class="btn btn-primary" onclick="location.href='https://www.example.com';"><i class="fas fa-home"></i> Home</button> -->

<body class="user text-light">
<?php include 'include/nav.php'; ?>
<br><br><br>
<div class="img">

<div class="container-fluid text-light bg-text" style="margin-top:300px;">
    <center><b><h5>VENUES</h5></b></center>
    <div class="row" style="padding:10px; spacing:10px;">
        <div class="col-md-4" style="padding:10px;">
            <center><img src="images/classic.jpeg" width="400px" height="400px" /><p></p> <h5>Lawns And FarmHouses</h5> <hr>
                    <a href="lawnsfarms1.php"><button class="btn btn-md ibtn" type="submit" onclick="location.href='lawnsfarm.php'">
                        <span style="margin-left: 10px;">
                            More Info
                        </span>
                    </button></center></a>
        </div>
        <div class="col-md-4" style="padding:20px;">
            <center><img src="images/banquet hall.jpg" width="400px" height="400px" /><p></p> <h5>Banquet Halls</h5><hr>
            <a href="banquethall.php"> <button class="btn btn-md ibtn">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center></a>
        </div>
        <div class="col-md-4" style="padding:20px;">
        <center><img src="images/resort-1.jpg" width="400px" height="400px" /><p></p> <h5>Resorts</h5> <hr>
        <a href="resort.php"><button class="btn btn-md ibtn">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center></a>
        </div>
    </div>
    <!-- -------------------first------------------------------->
    <div class="row" style="padding:10px; spacing:10px;">
        <div class="col-md-4" style="padding:10px;">
            <center><img src="images/hall-4.jpg" width="400px" height="400px" /><p></p> <h5>Party Halls</h5> <hr>
            <a href="partyhall.php"><button class="btn btn-md ibtn ">
                        <span style="margin-left: 10px;">
                            More Info
                        </span>
                    </button></center></a>
        </div>
        <div class="col-md-4" style="padding:20px;">
            <center><img src="images/dis-3.jpg" width="400px" height="400px" /><p></p> <h5>Destination Wedding</h5> <hr>
            <a href="destinationwed.php"><button class="btn btn-md ibtn">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center></a>
        </div>
        <div class="col-md-4" style="padding:20px;">
        <center><img src="images/hall-3.jpg" width="400px" height="400px" /><p></p> <h5>4 Star & Above hotels</h5> <hr>
        <a href="4star.php"><button class="btn btn-md ibtn">
                    <span style="margin-left: 10px;">
                        More Info
                    </span>
                </button></center></a>
        </div>
    </div>
    <!-- --------------------------second------------------------ -->
</div>
</div>
 
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="lightbox/js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="validationfunction.js"></script>
</body>
</html>