<?php
session_start();
if (isset($_SESSION["adminInfo"])){
    session_unset();
    session_destroy();
    header("location:signin.php");
}
