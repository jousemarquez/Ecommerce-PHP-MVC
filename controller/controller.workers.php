<?php
require_once("../dao/dao.workers.php");
$resultsWorkers = selectWorkers($pdo);
$pdo = null;
header("./view/view.about_us.php");
