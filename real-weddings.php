<?php include 'admin/include/init.php'; ?>

<?php 
    $blogEvent = EventWedding::getEventBlogs();
 ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inspiration Couples</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
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
            background: #fff;
            margin-top:6%;
            font-family: "Open Sans", "Roboto", sans-serif !important;
        }

       /* img.card-img-top {
            width: 100%;
            height: 350px;
            -webkit-border-radius:0;
            -moz-border-radius:0;
            border-radius:0;
        }

        .card-body {
            background: #EDEDED;
            padding: 1rem;
        }

        .font-custom {
            font-size: 16px;
        }

        .color_gray {
            color: #555;
        }*/
       /* .color_light {
            color: #999;
            font-weight: 600;
        }
        h6.font-custom {
            color: #555;
        }
        a.btn-stamp:hover {
            text-decoration: none;
        }
        img.image-stock {
            width: 86px;margin-left: 6px;margin-bottom: 6px;
        }
        .card-style {
            background: none;border:0;
        }*/
    </style>
</head>
<body>
<?php
include "include/nav.php";
?>
<div class="loader-container">
        <img src="images/loader1.gif" alt="img not found">
    </div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="h2 text-center mb-0">THE REAL WEDDINGS</h4>
            <p class="text-muted text-center">Discover the best ideas, tips and articles to inspire your wedding.</p>
        </div>
           <div class="card-columns">
            <?php foreach($blogEvent as $blog_item) : ?>
               <div class="card" >
                <img class="card-img-top" src="admin/<?= $blog_item->preview_image_picture(); ?>" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details.php?id=<?= $blog_item->id; ?>" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase"><?= $blog_item->title; ?></h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray"><?= $blog_item->wedding_type; ?> Wedding</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                            <?= $blog_item->location; ?></p>
                    </a>
                </div>
            </div> 
            <?php endforeach; ?>
            <!-- <a href="real-weddings.php" class="btn btn-lg btn-block btn-explore">EXPLORE MORE INSPIRATION</a> -->
        </div>

       
    </div>
</div>
 
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