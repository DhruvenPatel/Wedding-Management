<?php session_start();
      include 'include/init.php';
      include 'dataclass.php';
      $dc=new dataclass();
      $conn=mysqli_connect('localhost','root','','dbwedding');
?>
<?php
     if (!isset($_SESSION['id'])) {
         redirect_to("../");
     }
     $users =  Users::find_all();

?>
<?php $users_profile = Users::find_by_id($_SESSION['id']); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <style>
        table.table.table-striped.table-bordered.table-sm {
            font-size:12px;
        }
        .tooltip {
            font-size: 12px;
        }

        td.special {
            padding: 0;
            padding-top: 20px;
            padding-left:6px;
            /*padding-bottom:10px !important;*/
            margin-top:10px;
            text-transform: capitalize;
        }
        .datepicker {
            font-size: 12px;
        }
      
        div.dataTables_wrapper div.dataTables_paginate {
            font-size: 11px;
        }

    </style>
</head>

<body>

<?php include_once 'include/sidebar.php'; ?>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h4 class="h4 mt-4 ml-3">User Management</h4>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <!-- <a class="btn btn-md btn-success" style="font-size: 12px;" href="users_add.php"><i class="mdi mdi-account-plus mr-2"></i> Add New User</a> -->
                </div>
            </div>
        </div>
        <?php
            if ($session->message()) {
                echo $session->message();
            }
        ?>

                        <?php
                            $conn=mysqli_connect('localhost','root','','dbwedding');
                        ?>
                                
                        <?php
                            $db= $conn;
                            $tableName="register";
                            $columns= ['regid','regdate','username', 'usertype','emailadd','contactno','profileimg'];
                            $fetchData = fetch_data($db, $tableName, $columns);

                            function fetch_data($db, $tableName, $columns)
                                {
                                    if(empty($db))
                                        {
                                            $msg= "Database connection error";
                                        }
                                        elseif (empty($columns) || !is_array($columns)) 
                                            {
                                                $msg="columns Name must be defined in an indexed array";
                                            }
                                        elseif(empty($tableName))
                                            {
                                                $msg= "Table Name is empty";
                                            }
                                    else
                                        {
                                            $columnName = implode(", ", $columns);
                                            $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY regid DESC";
                                            $result = $db->query($query);

                                            if($result== true)
                                                { 
                                                    if ($result->num_rows > 0) 
                                                        {
                                                            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                            $msg= $row;
                                                        }
                                                    else 
                                                        {
                                                            $msg= "No Data Found"; 
                                                        }
                                                }
                                            else
                                                {
                                                    $msg= mysqli_error($db);
                                                }
                                        }
                                        return $msg;
                                    }
            ?>

            <table id="example" class="table table-striped table-hover table-bordered table-sm" cellspacing="0" width="100%" style="background: white;padding: 0 5px;">
                <thead>
                    <tr>
                        <th>Register Id</th>
                        <th>Register Date</th>
                        <th>Username</th>
                        <th>Usertype</th>
                        <th>Email </th>
                        <th>Contact Number</th>
                        <th>Photo</th>
                        <th></th>
                    </tr>
    
    
        <tbody>
                <?php 
                    // if( $user->id == $_SESSION['regid']) {
                    //     continue;
                    // } 
                ?>
        
                    <div class="text-center">
                        <!-- <img src="" alt="" class="img-fluid rounded-circle" style="width: 34px;height: 34px;"></td></div> -->
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                                               
                            <?php
                                if(is_array($fetchData)){      
                                $sn=1;
                                foreach($fetchData as $data){
                            ?>
                            
                            <tr>
                                
                                <td><?php echo $data['regid']??''; ?></td>
                                <td><?php echo $data['regdate']??''; ?></td>
                                <td><?php echo $data['username']??''; ?></td>
                                <td><?php echo $data['usertype']??''; ?></td>
                                <td><?php echo $data['emailadd']??''; ?></td>
                                <td><?php echo $data['contactno']??''; ?></td>
                                <td><?php echo $data['profileimg']??''; ?></td>

                                <td>
                                    <!-- <a href="feature_edit.php" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit This feature"><i class="mdi mdi-pen"></i></a> -->
                                    <!-- <a href="feature_delete.php" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete This feature"><i class="mdi mdi-delete"></i></a> -->
                                </td>
                            </tr>
                            
                            <?php $sn++;}}else{ ?>
                            
                            <tr>
                                <td colspan="0">
                                    <?php echo $fetchData; ?>
                                </td>
                                <tr>
                                    <?php
                                        }?>


                                    </thead>
        </table>
    </tbody>

    </tr>
</main>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script>
  
    $(document).ready(function() {
        $('#example').DataTable();
        $('[data-toggle="tooltip"]').tooltip();
    });
    
</script>

</body>
</html>


