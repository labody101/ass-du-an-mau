<?php
session_start();
session_destroy();
setcookie( "name", "", time()- 60, "/","", 0);
header("Location:Index.php");
?>