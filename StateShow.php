<Html>
<head>
  
  <?php
    session_start();
    include('socclass.php');
  ?>

  <?php
    $sid="";
    $query="";
    $dc=new dataclass();
  ?>

  <?php

  if(isset($_POST['bnew']))
  {
    $_SESSION['trans']='new';
    header('location:productform1.php');
  }

  
  if(isset($_POST['bupdate']))
  {
    $_SESSION['trans']='update';
    $_SESSION['sid']=$_POST['bupdate'];
    header('location:productform1.php');
  }

   if(isset($_POST['bdelete']))
   {
     $sid=$_POST['bdelete'];
     $query="delete from state where sid='$sid'";
     $result=$dc->saverecord($query);
   }

  ?>

  <style>
   .clsimg
   {
     width:100px;
     height:100px;
   }
  </style>

</head>
<body>
   <form name='frmstate' action="#" method="post">
   <table border='1px' cellpadding='5px' cellspacing='0px' width='50%' align='center'>
   <tr>
   <td colspan='6' align='center'><h2>STATE DETAILS</h2></td>
   <td><input type='submit' name='bnew' value='New'></td>
   </tr>
   <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>SHORTNAME</th>
    <th>DELETE</th>
    <th>UPDATE</th>
   </tr>

  <?php
      $query="select * from state";
      $tb=$dc->gettable($query);
      // $tamt=0;
      // $disc=0;
      // $tdisc=0;
      // $netamt=0;
      // $tnetamt=0;

      while($rw=mysqli_fetch_array($tb))
      {
        echo("<tr>");  
        echo("<td>".$rw['sid']."</td>");
        echo("<td>".$rw['sname']."</td>");
        echo("<td>".$rw['shortname']."</td>");
        // echo("<td align='right'>".$rw['amount']."</td>");
        // echo("<td><img class='clsimg' src='productimages/".$rw['filename']."'></td>");
        // $disc=$rw['amount']*0.20;
        // $netamt=$rw['amount']-$disc;
        // echo("<td align='right'>$disc</td>");
        // echo("<td align='right'>$netamt</td>");
        echo("<td><button type='submit' name='bdelete' value=".$rw['sid'].">Delete</button></td>");
        echo("<td><button type='submit' name='bupdate' value=".$rw['sid'].">Update</button></td>");
        echo("</tr>");  
        // $tamt=$tamt+$rw['amount'];
        // $tdisc=$tdisc+$disc;
        // $tnetamt=$tnetamt+$netamt;
      }
      // echo("<tr><td colspan='2'>Total Amount</td><td align='right'>$tamt</td><td>$tdisc</td><td>$tnetamt</td></tr>");  
           
    ?>
    </table>
    </form>
</body>
</Html>