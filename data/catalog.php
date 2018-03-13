<?php
header("Content-Type:application/json;charset=UTF-8");
require_once("./init.php");

$sql="SELECT * FROM catalog ";
$output=sql_execute($sql);

echo json_encode($output);

?>