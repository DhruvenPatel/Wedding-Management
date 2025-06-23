<?php include 'include/init.php'; ?>
<?php $users_profile = Users::find_by_id($_SESSION['id']); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- <title>Services And Modules - Administrator</title> -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/dashboard.css" rel="stylesheet">
            <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                    /*padding: 0;*/
                    padding-top: 10px;
                    /*padding-left:6px;*/
                    /*padding-bottom:6px;*/
                    /*margin-top:5px;*/
                    text-transform: capitalize;
                }
            
                div.dataTables_wrapper div.dataTables_paginate {
                    font-size: 11px;
                }

                /* SuperBox */
                .superbox-list {
                    display:inline-block;
                    *display:inline;
                    zoom:1;
                    width:12.5%;
                }
                .superbox-img {
                    max-width:100%;
                    width:100%;
                    cursor:pointer;
                }
                .superbox-show {
                    text-align:center;
                    position:relative;
                    background:#333;
                    box-shadow:inset 0 1px 5px #111;
                    -webkit-box-shadow:inset 0 1px 5px #111;
                    -moz-box-shadow:inset 0 1px 5px #111;
                    width:100%;
                    float:left;
                    padding:25px;
                    display:none;
                }
                .superbox-current-img {
                    max-width:100%;
                    box-shadow:0 1px 4px #222;
                    border:1px solid #222;
                }
                .superbox-img:hover {
                    opacity:0.8;
                }
                .superbox-float {
                    float:left;
                }
                .superbox-close {
                    opacity:0.7;
                    cursor:pointer;
                    position:absolute;
                    top:25px;
                    right:25px;
                    background:url(../img/close.gif) no-repeat center center;
                    width:35px;
                    height:35px;
                }
                .superbox-close:hover {
                    opacity:1;
                }
                @media only screen and (min-width: 320px) {
                    .superbox-list {
                        width:50%;
                    }
                }
                @media only screen and (min-width: 486px) {
                    .superbox-list {
                        width:25%;
                    }
                }
                @media only screen and (min-width: 768px) {
                    .superbox-list {
                        width:16.66666667%;
                    }
                }
                @media only screen and (min-width: 1025px) {
                    .superbox-list {
                        width:12.5%;
                    }
                }

            </style>
    </head>

    <body>
            <?php include_once 'include/sidebar.php'; ?>
            <!-- ----------------------------------------------------- -->
  
        <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h4 class="h4 mt-4 ml-3">Services And Packages</h4>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a class="btn btn-md btn-success mr-2" style="font-size: 12px;" href="package_add.php"><i class="mdi mdi-buffer mr-2"></i> Add New Package</a>
                </div>
            </div>
        </div> -->

        <?php
        include('dataclass.php');
        $dc=new dataclass(); 
        ?>

        <form name="form_package" method="post" enctype="multipart/form-data">
            <div class="package_container">
                <div class="space_div">
                    <div class="row tr_space">
                        <?php
                            $conn=mysqli_connect('localhost','root','','dbwedding');
                        ?>
                                
                        <?php
                            $db= $conn;
                            $tableName="tblweddingcategories";
                            $columns= ['wedtype', 'price','packimg','title'];
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
                    </div>
                </div>
            </div>
        </form>
    
        <div class="col-md-12 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h4 class="h4 mt-4 ml-3">Wedding Features</h4>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <!-- <a class="btn btn-md btn-success mr-2" style="font-size: 12px;" href="feature_add.php"><i class="mdi mdi-clipboard-outline mr-2"></i> Add New Feature</a> -->
                        </div>
                    </div>
            </div>
        
            <table id="features" class="table table-striped table-hover table-bordered table-sm" cellspacing="0" width="100%" style="background: white;padding: 5px;">
                <tbody>
                    <thead>
                        <tr>
                            <th>Package Id</th>
                            <th>Wedding Type</th>
                            <th>Price</th>
                            <th>Images</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
              
                    <tr>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <td class="special"></td>
                        <!-- <td>
                                <a href="feature_edit.php" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit This feature">
                                <i class="mdi mdi-pen"></i></a>
                                <a href="feature_delete.php" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete This feature"><i class="mdi mdi-delete"></i></a>
                            </td> -->
                    </tr>
                    
                    <?php
                        if(is_array($fetchData))
                            {      
                                $sn=1;
                                foreach($fetchData as $data)
                                    {
                    ?>
                            
                    <tr>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $data['wedtype']??''; ?></td>
                        <td><?php echo $data['price']??''; ?></td>
                        <td><?php echo $data['packimg']??''; ?></td>
                        <td><?php echo $data['title']??''; ?></td>
                        <td>
                            <a href="feature_edit.php" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit This feature">
                            <i class="mdi mdi-pen"></i></a>
                            <a href="feature_delete.php" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete This feature"><i class="mdi mdi-delete"></i></a>
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

            <!-- ------------------------------------------------------------ -->
            <?php include_once 'include/footer.php';?>
    
    </body>
</html>