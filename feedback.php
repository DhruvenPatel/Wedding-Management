<html>
  <head>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
         .user{
            background: rgba( 255, 255, 255, 0.50 );
                /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
                /* backdrop-filter: blur( 4px ); */
                /* -webkit-backdrop-filter: blur( 4px ); */
                /* border-radius: 10px; */
                /* border: 1px solid rgba( 255, 255, 255, 0.18 ); */
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
    </style>
   

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  

</head>
  <body class="img">
   
        
          <form name="feedback_form" id="feedback_form" method="post">
         
      <div class="container user">
        <div class="row">
          <div class="col-md-12">
             <center> <b><h2>Feedback</h2></b></center>
       <h5> Please provide your feedback in the form below </h5><br>
           <h5><label>How do you rate your overall experience?</label></h5>
                    <input class="form-check-input" type="radio" name="rating" id="rating_bad" value="bad">
                    <label class="form-check-label" for="rating_bad">Bad</label>        
                  <input class="form-check-input" type="radio" name="rating" id="rating_good" value="good">
                  <label class="form-check-label" for="rating_good">Good</label>
                  <input class="form-check-input"  type="radio" name="rating" id="rating_excellent" value="excellent">
                  <label class="form-check-label" for="rating_excellent">Excellent!</label>
                <div>
                  <br>
                </div>
              <div class="col-md-12">
                <label class="form-label"  for="feedback_comments"><h5>Comments:</h5></label>
                  <textarea class="form-control" required rows="6" name="comments" id="feedback_comments" ></textarea>
              </div>
        
              <!-- <div class="row"> -->
                <div class="col">
                  <label class="" for="feedback_name"><h5>Your Name:</h5></label>
                  <input type="text" required name="name" class="form-control" id="feedback_name"/>
                </div>
                
                <div class="col mb-4">
                  <label class="form-label" for="feedback_email"><h5>Email:</h5></label>
                  <input type="email" name="email" required class="form-control" id="feedback_email"/>
                </div>
              <!-- </div> -->
          
              <button type="submit" class="btn btn-primary btn-lg" >Post</button>
            </form>
            </div>
            </div>
      </div>
    </body>
    <script type="text/javascript" src="validationfunction.js"></script>
  </html>

  