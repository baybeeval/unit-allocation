<?php
require"session.php";
$referer=$_SERVER['HTTP_REFERER'];
session_destroy();
header("location: $referer");
?>