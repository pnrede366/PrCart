<?php
session_start();
session_destroy();
header("Location:loginseller.php");
?>