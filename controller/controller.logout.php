<?php
session_start();
session_destroy();
header("Location: ../view/view.login.php");
exit();
?>
