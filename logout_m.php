<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: Managerlogin.php"); // Redirecting To Home Page
}
?>