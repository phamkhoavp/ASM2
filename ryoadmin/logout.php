<?php
session_start();
if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
    header('location: https://toysbaby.herokuapp.com');
}
else
{
    header('location: https://toysbaby.herokuapp.com');
}
?>
