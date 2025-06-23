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
     $booking =  Booking::getBooking();
     $booking_confirm =  Booking::ConfirmedBooking();
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
        <!--    <link href="css/bootstrap.css" rel="stylesheet">-->
        <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
        <style>
            body {
                margin-bottom: 3%;
            }
            table.table.table-striped.table-bordered.table-sm {
                font-size:12px;
            }
            .tooltip {
                font-size: 12px;
            }

            td.special {
                padding: 0;
                padding-top: 8px;
                padding-left:6px;
                padding-bottom:6px;
                margin-top:5px;
                text-transform: capitalize;
            }
            .datepicker {
                font-size: 12px;
            }
        
            div.dataTables_wrapper div.dataTables_paginate {
                font-size: 11px;
            }

            .btn.btn-sm.btn-light.active:hover {
                background: white;
            }

        </style>
    </head>

    <body>
        <?php include_once 'include/sidebar.php'; ?>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h6 class="h4 mt-4 ml-3"> Client</h6>
            <div class="btn-toolbar mb-md-0">
                <div class="btn-group mr-2">
                    <a class="btn btn-md btn-success" style="font-size: 12px;" href="client_add.php"><i class="mdi mdi-account-plus mr-2"></i> Add New Client</a>
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
                            $tableName="book";
                            $columns= ['bookingdt','bride', 'groom','user_email','wedding_date'];
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
                                            $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY packid DESC";
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

        <table id="pending" class="table table-striped table-bordered table-hover table-sm" cellspacing="0" width="100%" style="background: white;padding: 0 5px;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Booking Date</th>
                    <th>Bride's Name</th>
                    <th>Groom's Name</th>
                    <th>Primary Email</th>
                    <!-- <th>Contact</th> -->
                    <th>Wedding Date</th>
                    <th></th>
                </tr>
            </thead>
            <!-- <tfoot>
                    <tr>
                        <th>Primary Contact</th>
                        <th>Bride's Name</th>
                        <th>Groom's Name</th>
                        <th>Primary Email</th>
                        <th>Contact</th>
                        <th>Wedding Date</th>
                        <th>Tools</th>
                    </tr>
                </tfoot> -->
            <tbody>
            <?php
                        if(is_array($fetchData))
                            {      
                                $sn=1;
                                foreach($fetchData as $data)
                                    {
                    ?>
                            
                    <tr>
                    <td><?php echo $sn; ?></td>
                        <td><?php echo $data['bookingdt']??''; ?></td>
                        <td><?php echo $data['bride']??''; ?></td>
                        <td><?php echo $data['groom']??''; ?></td>
                        <td><?php echo $data['user_email']??''; ?></td>
                        <td><?php echo $data['wedding_date']??''; ?></td>
                        <td>
                            <!-- <a href="client_assign.php" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit This feature"> 
                            <i class="mdi mdi-pen"></i></a> -->
                            <a href="client_delete.php" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete This feature"><i class="mdi mdi-delete"></i></a>
                            
                        </td>
                    </tr>
                            
                    <?php $sn++;}}else{ ?>
                            
                    <tr>
                        <td colspan="8">
                            <?php echo $fetchData; ?>
                        </td>
                    <tr>
                        <?php
                            }?>

            </tbody>
        </table>

        <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h6 class="h4 mt-4 ml-3">Confirmed Client</h6>
        </div>
        <table id="confirmed" class="table table-striped table-hover table-bordered table-sm" cellspacing="0" width="100%" style="background: white;padding: 0 5px;">
            <thead>
                <tr> -->
                <!-- <th>No.</th> -->
                    <!-- <th>Booking Date</th> -->
                    <!-- <th>Bride's Name</th>
                    <th>Groom's Name</th>
                    <th>Primary Email</th> -->
                    <!-- <th>Contact</th> -->
                    <!-- <th>Wedding Date</th>
                    <th></th>
                </tr>
            </thead> -->
            
             <!-- <tbody>
                <?php foreach ($booking_confirm as $booking_confirm_row) : ?>
                    <tr>                 -->
                        <!-- <td class=""><?= $booking_confirm_row->firstname . ' ' . $booking_confirm_row->lastname;?></td>           -->
                        <!-- <td class="">
                            <?= (empty($booking_confirm_row->bride)) ?  'Need to fill' :  $booking_confirm_row->bride; ?>
                        </td> -->
                        <!-- <td class=""><?= (empty($booking_confirm_row->groom)) ?  'Need to fill' :  $booking_confirm_row->groom; ?></td>
                        <td class=""><?= $booking_confirm_row->user_email; ?></td>   -->
                        <!-- <td class=""> <?= $booking_confirm_row->phone; ?></td>             -->
                        <!-- <td class=""><?= (empty($booking_confirm_row->wedding_date)) ?  'N/A' :  $booking_confirm_row->wedding_date; ?></td>            
                        <td> -->
                            <!-- <a href="client_assign.php?booking=<?= $booking_confirm_row->booking_id; ?>&user_id=<?= $booking_confirm_row->user_id; ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Assign user to weddings"><i class="mdi mdi-clipboard-account"></i></a> -->
                            <!-- <a href="client_edit.php?booking=<?= $booking_confirm_row->booking_id; ?>&user_id=<?= $booking_confirm_row->user_id; ?>" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit client account information"><i class="mdi mdi-account-edit"></i></a> -->
                            <!-- <a href="client_manage_account_details.php?booking_id=<?= $booking_confirm_row->booking_id; ?>&user_id=<?= $booking_confirm_row->user_id; ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Enter client workbook to manage all wedding details"><i class="mdi mdi-account-card-details"></i></a> -->
                        <!-- </td>
                    </tr>
                <?php endforeach; ?>
            </tbody> -->
        </table>
        </main>
        </div>
        </div>

        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="js/popper.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#pending').DataTable();
                $('#confirmed').DataTable();
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

    </body>
    </html>
