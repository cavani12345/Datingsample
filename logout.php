<?php
session_start();
session_destroy();
echo "<script> alert('You logged out');
window.location.href='index.php';</script>";
exit();


?>