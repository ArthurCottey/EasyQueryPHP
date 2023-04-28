<?php

include('dbconnect.php');
include('easyquery.php');

$result = easyQuery($db, "all", "*", "table", false, false, "id DESC", true);

var_dump($result);

?>