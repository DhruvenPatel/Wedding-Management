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
        body {
            margin-top: 6%;
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

      

        img.img-fluid.img-custom {
            width: 344px;
            height:230px;
        }
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
         
         .user{
            background: rgba( 255, 255, 255, 0.50 );
                /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
                /* backdrop-filter: blur( 4px ); */
                /* -webkit-backdrop-filter: blur( 4px ); */
                /* border-radius: 10px; */
                /* border: 1px solid rgba( 255, 255, 255, 0.18 ); */
                margin-top:18px;
                }
        .img{
                    background-image:url('images/wed.jpg');
                    /* background-repeat:no-repeat;  */
                    background-size: 2000px 950px;
                    /* background-size:1911px; */
                    /* margin-right:30px; */
                } 

                .container{
        max-width: 700px!important;}

        
        .back{
                    background-color:#bfbfbf;
                    margin-top:20px;
                }
    </style>
</head>
<body>
<?php include 'include/nav.php'; ?>


<?php 
            $dc=new dataclass();
            $query="";
            $result="";
            $feedbackid="";
            $fdbkdate="";
            $commnets="";
            $ratings="";
            $email="";
            $regid="";
            $msg="Message";
            
        ?>

        <?php 
            if(isset($_POST['btnpost']))
            {
                $feedbackid=$dc->primarykey("select max(feedbackid) from feedback");
                $fdbkdate=date('y-m-d');
                $comments=$_POST['comments'];
                $ratings=$_POST['ratings'];
                $email=$_POST['email'];
                $regid=$_SESSION['regid'];
                        
                $query="insert into feedback(feedbackid,fdbkdate,comments,ratings,email,regid) values('$feedbackid','$fdbkdate','$comments','$ratings','$email','$regid')";
                echo ($query);
                $result=$dc->saverecord($query);
                if($result)
                {
                    header('location:fdkthank.php');
                }
            }

        ?>




        <!-- ================================================================= -->
        <form name="feedback_form" id="feedback_form" method="post">
            <div class="container user back">
                <div class="row">
                    <div class="col-md-12"><br>
                        <center> <b><h2>FEEDBACK</h2></b></center><br>
                        <h5> Please provide your feedback in the form below</h5><hr>
                        <div class="col-md-12">
                            <label class="form-label"  for="feedback_comments"><h5>Comments:</h5></label>
                            <textarea class="form-control" required rows="6" name="comments" id="feedback_comments" ></textarea>
                        </div> <br>
                        <div>
                            <h5><label>How do you rate your overall experience?</label></h5>
                            <input class="input" type="radio" name="rating" id="rating_bad" value="bad">
                            <label class="label" for="rating_bad">Bad</label>    
                        </div>
                        <div>   
                            <input class="input" type="radio" name="rating" id="rating_good" value="good">
                            <label class="label" for="rating_good">Good</label>
                        </div>
                        <div>
                            <input class="input"  type="radio" name="ratings" id="rating_excellent" value="excellent">
                            <label class="label" for="rating_excellent">Excellent!</label>
                        </div>
                        <div><br></div>
                       
                        <!-- <div class="col">
                            <label class="" for="feedback_name"><h5>Your Name:</h5></label>
                            <input type="text" required name="name" class="form-control" id="feedback_name"/>
                        </div>   <br>    -->
                        <div class="col ">
                            <label class="form-label" for="feedback_email"><h5>Email:</h5></label>
                            <input type="email" name="email" required class="form-control" id="feedback_email"/>
                        </div><br>
                        <div>
                          <center>  <button type="submit" class="btn btn-primary btn-lg" name="btnpost" >Post</button></div></center><br>
                        </div>
                    </div>
                </div>
            </div>
        </form>





        <!-- ====================================================================== -->
        


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="validationfunction.js"></script>

    </body>
</html>