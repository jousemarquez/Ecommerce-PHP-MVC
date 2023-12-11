<?php 
require_once("../dao/dao.users.php");
$results = getUsers($pdo);
$pdo = null;
header("./view/usersView.php");
