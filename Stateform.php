<html>
 <head>

   <?php
      session_start();
      include('socclass.php');
   ?>

   <?php
     $dc=new dataclass(); 
     $sid="";
     $sname="";
     $shortname="";
     $query="";
     $msg="Message";
   ?>

   <?php

      // if($_SESSION['trans']=='update')
      // {
      //    $sid=$_SESSION['sid'];
      //    $query="select * from state where sid='$sid'";
      //    $rw=$dc->getrecord($query);
      //    $sname=$rw['sname'];
      //    $shortname=$rw['shortname'];

      // }
     if(isset($_POST['bsave']))
     {
        
        $sname=$_POST['sname'];
        $shortname=$_POST['shortname']; 

        if($_SESSION['trans']=='new')
         {
            $query="select max(sid) from state";
            $sid=$dc->primarykey($query);
            $query="insert into state(sid,sname,shortname) values('$sid','$sname','$shortname')";
         }

         if($_SESSION['trans']=='update')
         {
            $sid=$_SESSION['sid'];
            $query="update state set sname='$sname',shortname='$shortname' where sid='$sid'";
         }
         $result=$dc->saverecord($query);
          if($result)
           {
            // if($filename!="" && $filetype=='image/jpeg')
            // { 
            //   move_uploaded_file($tmpname,'productimages/'.$filename); 
            // }
            $_SESSION['trans']="";  
            header('location:productshow.php');
          }
          else
          {
            $msg='Record not saved...';
          }
     }

     if(isset($_POST['bcancel']))
     {
        header('location:productshow.php');
     }
    
    function clearall()
     {
       $sid="";
       $sname="";
       $shortname="";
     }
 ?>
 
 </head>
 <body>

     <form name='frmstate' action='#' method='post' enctype="multipart/form-data" >

       <table align='center' border="1px" cellpadding='5px' cellspacing='0px'>
          <tr>
             <td colspan="2" align='center'><h2>STATE FORM</h2></td>
          </tr>
         <tr>
            <td>State Name</td>
            <td> <input type='text' name='sname' value='<?php echo($sname) ?>' placeholder='Enter State Name' autofocus></td>
          </tr>
          <tr>
            <td>Shortname</td>
            <td> <input type='text' name='shortname' value='<?php echo($shortname) ?>' placeholder="Enter Shortname"></td>
          </tr>

          <tr>
             <td colspan="2">
              <input type='submit' name='bsave' value='SAVE'>
              <input type='submit' name='bcancel' value='CANCEL'>
            </td>
          </tr>
          <tr>
             <td colspan="2"> <?php echo($msg) ?> </td>
          </tr>
       </table>

     </form>
 </body>
</html>