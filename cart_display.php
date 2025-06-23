<html>
    <head>
      <?php
        session_start();     
        include("connection.php");
      ?>

      <?php
        if(isset($_POST['']))
        {

        }

     ?>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <style>
      .table-bordered
      {
        border:1px solid black;
      }
    </style>
    </head>
    <body>
        <div class="container">
           
            <div class="row" style="background-color:#ecedd8">
            <div class="col-md-12">
                <h3 class="text-center">CART DETAILS</h3>
            </div>
            </div>
            <div class="row" style="background-color:#ecedd8">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                    <table class="table table-bordered">
                        <tr class="bg-success text-light">
                            <th>CART ID</th>
                            <th>PIZZA NAME</th>
                            <th>QTY</th>
                            <th>PRICE</th>

                        </tr>
                        <?php
                          $regid=$_SESSION['regid'];
                          $query="select cartid,pname,price,qty from cart c,pizzas p where c.pid=p.pid and regid='$regid'";
                         //echo($query);
                          $tb=mysqli_query($conn,$query);
                          $pricetotal=0;
                          while($rw=mysqli_fetch_assoc($tb))
                          {
                            echo "<tr>";
                            echo "<td>".$rw['cartid']."</td>";
                            echo "<td>".$rw['pname']."</td>";
                            echo "<td>".$rw['qty']."</td>";
                            echo "<td>".$rw['price']."</td>";
                            echo "<td><input type='submit' name='btnremove' value='REMOVE'></td>";
                            echo "</tr>";
                            $pricetotal=$pricetotal+$rw['price'];
                          }
                          echo("<tr>");
                          echo("<td colspan='4'>Total</td>");
                          echo("<td>".$pricetotal."</td>");
                          echo("</tr>");

                      ?>
                    </table>
                </div>     
            </div>    
            <?php include('footer.php') ?>
       </div>
   </body>
</html>