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

    </style>
</head>
<!-- <button class="btn btn-primary" onclick="location.href='https://www.example.com';"><i class="fas fa-home"></i> Home</button> -->

<body>
    <h2>laws and farmhouses</h2>
</body>

</html>
