<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANDHAN</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
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
        body{
            background-color:black;
            margin:0;
        }
        .main{
            height:100vh;
        }
        svg{
            width:100%;
            height:100%;
            margin-top:350px;
        }
        svg text{
            font-family:lora;
            letter-spacing:10px;
            stroke:#ed701d;
            font-size:50px;
            font-weight:700;
            stroke-width:3;
            animation:THANK YOU FOR BOOKING WITH US 5s infinite alternate;
        }
        @keyframes THANK YOU FOR BOOKING WITH US{
            0%{
                stroke-dasharray:0 50%;
                stroke-dashoffset:20%;
                fill:hsl(0,0%,100%);
            }
            100%{
                stroke-dasharray:50% 0;
                stroke-dashoffset:20%;
                fill:hsl(189,68%,75,0%);
            }
        }

    </style>
</head>
<body>
<?php include 'include/nav.php'; ?>

<!--div class="container"-->
    <!--div class="row"-->
        <!--div class="col-md-12 mt-5"-->
                <svg>
                    <text x="50%" y="60%" text-anchor="middle">THANK YOU FOR BOOKING WITH US.</text>
                </svg>

                <div class="text-light text-center">
                    <span>
                        <p>
                            <h4>
                            WAIT FOR CONFORMATION FOR FEW DAYS 
                            WE UPDATE YOUR BOOKING ON YOUR EMAIL
                            </h4>
                        </p><br>
                        <H4>
                        <button class="btn btn-secondary" onclick="location.href='payment.php'">
                            PROCCED WITH PAYMENT
                        </button></H4>
                    </span>
                </div>
        <!--/div>
    </div-->
<!--/div-->

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="validationfunction.js"></script>
</body>
</html>
