<!DOCTYPE html>
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
                    background-image:url('images/e1.jpg');
                    /* background-repeat:no-repeat;  */
                    background-size: 2000px 950px;
                    /* background-size:1911px; */
                    /* margin-right:30px; */
                } 
                    
                body {
                    background: #ff8080;
                    font-size: 1.1em;
                    font-family: sans-serif;
                }
            
                a {
                    text-decoration: none;
                }
                
                form {
                    width: 25%;
                    margin: 70px auto;
                    background: white;
                    padding: 10px;
                    border-radius: 3px;
                }   
    
                h2.form-title {
                    text-align: center;
                }
        
                input {
                    display: block;
                    box-sizing: border-box;
                    width: 100%;
                    padding: 8px;
                }
            
                form .form-group {
                    margin: 10px auto;
                }
    
                form button {
                    width: 100%;
                    border: none;
                    color: white;
                    background: #ff8080;
                    padding: 15px;
                    border-radius: 5px;
                }
                
                .msg {
                    margin: 5px auto;
                    border-radius: 5px;
                    border: 1px solid red;
                    background: pink;
                    text-align: left;
                    color: brown;
                    padding: 10px;
                }

            </style>

    </head>

    <?php include('include/nav.php')?>
    <br><br><br><br>
    <!-- <center>
    <div class="col-md-5 text-center user p-5">
          <div class="text-light">
            <div class="">
              <div class="mb-4">
                <h5>Forgot Password?</h5>
                <p class="mb-2">Enter your registered email ID to reset the password
                </p>
              </div>
              <form>
                <center><div class="col-md-8 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"
                    required="">
                </div></center>
                <div class="mb-3 d-grid">
                  <button type="submit" class="btn btn-primary">
                    Reset Password
                  </button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        </center> -->
        <body>
            <form class="login-form" action="#" method="post"  stylesheet="height:200px;width:200px;">
                    <h2 class="form-title">New password</h2>
                    <!-- form validation messages -->
                    <?php ?>
                    <div class="form-group">
                            <label>New password</label>
                            <input type="password" name="new_pass">
                    </div>
                    <div class="form-group">
                            <label>Confirm new password</label>
                            <input type="password" name="new_pass_c">
                    </div>
                    <div class="form-group">
                            <button type="submit" name="new_password" class="login-btn">Submit</button>
                    </div>
            </form>
        </body>
        <script type="text/javascript" src="validationfunction.js"></script>
