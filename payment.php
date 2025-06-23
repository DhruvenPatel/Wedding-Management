<?php session_start();
      include 'admin/include/init.php';
      include 'dataclass.php';
      $dc=new dataclass();
?>
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
        <link rel="stylesheet" href="style.css"> 
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
                /* font-family:"Times New Roman", Times, serif; */
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
                /* font-family: "Times New Roman", Times, serif; */
            }  
                        *{
                font-family: 'Poppins', sans-serif;
                margin:0; padding:0;
                box-sizing: border-box;
                outline: none; border: none;
                text-decoration: none;
                text-transform: uppercase;
            }

            .container{
                min-height: 100vh;
                background: #eee;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-flow: column;
                padding-bottom: 60px;
            }

            .container form{
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 10px 15px rgba(0,0,0,.1);
                padding: 20px;
                width: 600px;
                padding-top: 160px;
            }

            .container form .inputBox{
                margin-top: 20px;
            }

            .container form .inputBox span{
                display: block;
                color:#999;
                padding-bottom: 5px;
            }

            .container form .inputBox input,
            .container form .inputBox select{
                width: 100%;
                padding: 10px;
                border-radius: 10px;
                border:1px solid rgba(0,0,0,.3);
                color:#444;
            }

            .container form .flexbox{
                display: flex;
                gap:15px;
            }

            .container form .flexbox .inputBox{
                flex:1 1 150px;
            }

            .container form .submit-btn{
                width: 100%;
                /* background:linear-gradient(45deg, #b30000, deeppink); */
                background-image: linear-gradient(to right, #C04848 0%, #480048  51%, #C04848  100%);
                margin-top: 20px;
                padding: 10px;
                font-size: 20px;
                color:#fff;
                border-radius: 10px;
                cursor: pointer;
                transition: .2s linear;
            }

            .container form .submit-btn:hover{
                letter-spacing: 2px;
                opacity: .8;
            }

            .container .card-container{
                margin-bottom: -150px;
                position: relative;
                height: 250px;
                width: 400px;
            }

            .container .card-container .front{
                position: absolute;
                height: 100%;
                width: 100%;
                top: 0; left: 0;
                /* background:linear-gradient(45deg, #b30000, deeppink); */
                background-image: linear-gradient(to right, #C04848 0%, #480048  51%, #C04848  100%);
                border-radius: 5px;
                backface-visibility: hidden;
                box-shadow: 0 15px 25px rgba(0,0,0,.2);
                padding:20px;
                transform:perspective(1000px) rotateY(0deg);
                transition:transform .4s ease-out;
            }

            .container .card-container .front .image{
                display: flex;
                align-items:center;
                justify-content: space-between;
                padding-top: 10px;
            }

            .container .card-container .front .image img{
                height: 50px;
            }

            .container .card-container .front .card-number-box{
                padding:30px 0;
                font-size: 22px;
                color:#fff;
            }

            .container .card-container .front .flexbox{
                display: flex;
            }

            .container .card-container .front .flexbox .box:nth-child(1){
                margin-right: auto;
            }

            .container .card-container .front .flexbox .box{
                font-size: 15px;
                color:#fff;
            }

            .container .card-container .back{
                position: absolute;
                top:0; left: 0;
                height: 100%;
                width: 100%;
                /* background:linear-gradient(45deg, #b30000, deeppink); */
                background-image: linear-gradient(to right, #C04848 0%, #480048  51%, #C04848  100%);
                border-radius: 5px;
                padding: 20px 0;
                text-align: right;
                backface-visibility: hidden;
                box-shadow: 0 15px 25px rgba(0,0,0,.2);
                transform:perspective(1000px) rotateY(180deg);
                transition:transform .4s ease-out;
            }

            .container .card-container .back .stripe{
                background: #000;
                width: 100%;
                margin: 10px 0;
                height: 50px;
            }

            .container .card-container .back .box{
                padding: 0 20px;
            }

            .container .card-container .back .box span{
                color:#fff;
                font-size: 15px;
            }

            .container .card-container .back .box .cvv-box{
                height: 50px;
                padding: 10px;
                margin-top: 5px;
                color:#333;
                background: #fff;
                border-radius: 5px;
                width: 100%;
            }

            .container .card-container .back .box img{
                margin-top: 30px;
                height: 30px;
            }
        </style>
    </head>

    <?php 
            $dc=new dataclass();
            $query="";
            $result="";
            $payid="";
            $paydate="";
            $cardno="";
            $holdernm="";
            $expmonth="";
            $expyear="";
            $cvvno="";
            $regid="";
            $bookingid="";
            $msg="Message";
            
        ?>

        <?php 
            if(isset($_POST['btnsubmit']))
            {
                $payid=$dc->primarykey("select max(payid) from payment");
                $paydate=date('y-m-d');
                $cardno=$_POST['cardno'];
                $holdernm=$_POST['holdernm'];
                $expmonth=$_POST['expmonth'];
                $expyear=$_POST['expyear'];
                $cvvno=$_POST['cvvno'];
                $regid=$_SESSION['regid'];
                $bookingid=$_SESSION['bookingid'];
                
                $query="insert into payment(payid,paydate,cardno,holdernm,expmonth,expyear,cvvno,regid,bookingid) values('$payid','$paydate','$cardno','$holdernm','$expmonth','$expyear','$cvvno','$regid','$bookingid')";
                // echo ($query);
                $result=$dc->saverecord($query);
                if($result)
                {
                    header('location:ps-thank.php');
                }
            }
        ?>

<script>
        function validation()
        {
            var result=true;
            if(lblcardno.innerHTML!="" || lblcardnm.innerHTML!="" || expmonth.innerHTML!="" || expyear.innerHTML!="" || lblcvv.innerHTML!="" )
            {
                result=false;
            }
            return result;
        }
        </script>




    <body>
        <?php include 'include/nav.php'; ?>
            
        <div class="container">
            <div class="card-container">    
                <div class="front">
                    <div class="image">
                        <img src="images/chip.png" alt="">
                        <img src="images/visa.png" alt="">
                    </div>
                    <div class="card-number-box">################</div>
                        <div class="flexbox">
                            <div class="box">
                                <span>card holder</span>
                                    <div class="card-holder-name">full name</div>
                            </div>
                            <div class="box">
                                <span>expires</span>
                                    <div class="expiration">
                                        <span class="exp-month">mm</span>
                                        <span class="exp-year">yy</span>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="back">
                        <div class="stripe"></div>
                        <div class="box">
                            <span>cvv</span>
                                <div class="cvv-box"></div>
                                    <img src="images/visa.png" alt="">
                                </div>
                        </div>
                    </div>

                    <form action="#" method="post" name="frmpay" onsubmit="return validation()">
                        <div class="inputBox">
                            <span>card number</span>
                            <input type="text" minlength="16" maxlength="16" name="cardno" placeholder="ENTER CARD NUMBER" class="card-number-input" onchange='onlynumber(this,lblcardno)' required>
                            <label id="lblcardno"></label>
                        </div>
                        <div class="inputBox">
                            <span>card holder</span>
                            <input type="text" class="card-holder-input" name="holdernm" placeholder="ENTER HOLDER NAME" onchange='onlyalpha(this,lblcardnm)' required>
                            <label id="lblcardnm"></label>
                        </div>
                        <div class="flexbox">
                            <div class="inputBox">
                                <span>expiration mm</span>
                                <select name="expmonth" class="month-input" required>
                                    <option value="">SELECT MONTH</option>
                                    <option value="JANUARY">JANUARY</option>
                                    <option value="0FEBUARY2">FEBUARY</option>
                                    <option value="MARCH">MARCH</option>
                                    <option value="APRIL">APRIL</option>
                                    <option value="MAY">MAY</option>
                                    <option value="JUNE">JUNE</option>
                                    <option value="JULY">JULY</option>
                                    <option value="AUGUST">AUGUST</option>
                                    <option value="SEPTEMBER">SEPTEMBER</option>
                                    <option value="OCTOBER">OCTOBER</option>
                                    <option value="NOVEMBER">NOVEMBER</option>
                                    <option value="DECEMBER">DECEMBER</option>
                                </select>
                                <!-- <label id="expmonth"></label> -->
                            </div>
                            <div class="inputBox">
                                <span>expiration yy</span>
                                <select name="expyear" class="year-input" required>
                                    <option value=""></option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                                <!-- <label id="expyear"></label> -->
                            </div>
                            <div class="inputBox">
                                <span>cvv</span>
                                <input type="text" class="cvv-input" minlength="3" maxlength="4" placeholder="ENTER CVV NUMBER" name="cvvno" onchange='onlynumber(this,lblcvv)' required>
                                <label id="lblcvv"></label>
                            </div>
                        </div>
                        <input type="submit" value="submit" class="submit-btn" name="btnsubmit" required>
                    </form>
                </div>    

        <script>
            document.querySelector('.card-number-input').oninput = () =>{
                document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
            }

            document.querySelector('.card-holder-input').oninput = () =>{
                document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
            }

            document.querySelector('.month-input').oninput = () =>{
                document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
            }

            document.querySelector('.year-input').oninput = () =>{
                document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
            }

            document.querySelector('.cvv-input').onmouseenter = () =>{
                document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
                document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
            }

            document.querySelector('.cvv-input').onmouseleave = () =>{
                document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
                document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
            }

            document.querySelector('.cvv-input').oninput = () =>{
                document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
            }

        </script>
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="validationfunction.js"></script>
    </body>
</html>