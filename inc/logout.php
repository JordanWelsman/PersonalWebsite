<?php
include_once "header.php";

session_unset();
session_destroy();
header("location: /index.php");

exit();
