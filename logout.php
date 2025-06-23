<?php
/**
 * Created by PhpStorm.
 * User: ACLC
 * Date: 2/20/2018
 * Time: 3:36 AM
 */
session_start();
session_unset();
session_destroy();
 header("Location: login.php");
 $_SESSION['login']='yes';
?>
 <?php include 'include/nav.php'; ?>
    <div class="loader-container">
        <img src="images/loader1.gif" alt="img not found   ">
    </div>


    <div class="loader">
        <a href="loader.php"></a>

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
</style>
<script>
        $(window).on("load", function () {
            $(".loader-container").fadeOut(2000);
        });
    </script>
