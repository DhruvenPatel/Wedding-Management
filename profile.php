<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php include("dataclass.php")?>

    <?php
        $dc=new dataclass();
        $query="";
        $result=" ";
        $regid="";
        $firstname="";
        $lastname="";
        $address1="";
        $address2="";
        $cityid="";
        $dob="";
        $gender="";
        $image="";
        $mobileno="";
  
    ?>

    <?php
        // if(isset($_POST['btnprofile']))
        //     {
        //         $regid=$_SESSION['regid'];
        //         $firstname=$POST['firstname'];
        //         $lastname=$POST['lastname'];
        //         $address1=$POST['address1'];
        //         $address2=$POST['address2'];
        //         $cityid=$POST['cityid'];
        //         $dob=$POST['dob'];
        //         $gender=$POST['gender'];
        //         $image=$FILES['image']['name'];
        //         $mobileno=$POST['mobileno'];

        //         $query="update profile set firstname='$firstname',lastname='$lastname' ,address1='$address1' ,address2='$address2' ,cityid='$cityid' ,dob='$dob' ,gender='$gender' ,image='$image' ,mobileno='$mobileno'"
        //         $result=$dc->saverecord($query);
        //         if($result)
        //             {
        //                 move_uploaded_file($image."image/$image");
        //                 header('loaction:home.php');
        //             }
        //     }

        //     if(isset($_POST['btncancel']))
        //         {
        //             header('loaction:home.php');
        //         }
        //     if(isset($_POST['btnedit']))
        //     {

        //     }
    ?>

</head>
<body>
    <div class="div">
            <div class="row">
                <div class="col-md-6">
                    <form action="#" name="profile" method="post">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div>
                                        <form class="user" name="frmreg" action="#" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label>First Name :</label>
                                                    <input type="text" class="form-control form-control-user" placeholder="Firstname" name="firstname" required>
                                                </div>
                                                <div class="col-sm-6">
                                                <label>Last Name :</label>
                                                    <input type="text" class="form-control form-control-user" placeholder="Lastname" name="lastname" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label>Address 1 :</label>
                                                <textarea type="text" class="form-control form-control-user" placeholder="Address 1" name="address1" required></textarea>
                                            </div>
                                            <div class="form-group">
                                            <label>Address 2 :</label>
                                                <textarea type="text" class="form-control form-control-user" placeholder="Address 2" name="address2" required></textarea>
                                            </div>
                                            <div class="form-group">
                                            <label>DOB :</label>
                                                <input type="date" class="form-control form-control-user" placeholder="Birthdate" name="dob" required>
                                            </div>
                                            <div class="form-group">
                                            <label>Mobile Number :</label>
                                                <input type="text" class="form-control form-control-user"  placeholder="Mobile Number" name="mobileno" required>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label>State :</label>
                                                <select name="state" class="form-control">
                                                    <?php
                                                        $query="select * from state";
                                                        $tb=$dc->gettable($query);
                                                        while($rw=mysqli_fetch_array($tb))
                                                            {
                                                                echo "<option value=".$rw['stateid'].">".$rw['statename']."</option>";
                                                            }
                                                    ?>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label>State :</label>
                                                <select name="city" class="form-control">
                                                    <?php
                                                        $query="select * from city";
                                                        $tb=$dc->gettable($query);
                                                        while($rw=mysqli_fetch_array($tb))
                                                            {
                                                                echo "<option value=".$rw['cityid'].">".$rw['cityname']."</option>";
                                                            }
                                                    ?>
                                                </select>
                                            </div>
                                                
                                            <div class="form-group">
                                            <label>Image :</label>
                                                <input type="file" class="form-control form-control-user" name="image" required>
                                            </div>

                                            <div class="row md-12">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary" name="btnregister" value="Save ">
                                                    <input type="submit" class="btn btn-danger" name="btncancel" value="Cancel">
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
    </div>

    <div class="col-md-6" id="profile">
        <div calss="holderbox">

               <?php
                    // $regid=$_SESSION['regid'];
                    $query="select * from profile where regid='$regid'";
                    $rw=$dc->getrecord($query);
                    if($rw)
                    {
                        echo "<img class='userprofile rounded-circle' src='profileimage/".$rw['holderimage'] ."'>";
                        echo "<div class='usertd'>";
                        echo "<lable class='usertd'>Fullname: ".$rw['firstname']." ".$rw['middlename']." ".$rw['lastname']."</lable> <br>";
                        echo "<lable class='usertd'>Address1: ".$rw['address1']."</lable> <br>";
                        echo "<lable class='usertd'>Address2: ".$rw['address2']."</lable> <br>";
                        echo "<lable class='usertd'>DOB: ".$rw['dob']."</lable> <br>";
                        echo "<lable class='usertd'>Mobile No: ".$rw['mobileno']."</lable> <br>";
                        echo "</div>";
                    }                                                
               ?>
                <center>
                    <a href="#"><button type type="submit" name="btnedit" class="btn btn-success edit">Edit Profile</button></a>
                </center>                                             
        </div>       
    </div>
  
</body>
</html>