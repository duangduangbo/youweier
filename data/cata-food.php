<?php
header("Content-Type:application/json;charset=UTF-8");
require_once("./init.php");
@$cid=$_REQUEST["cid"];
if($cid=="")
  $cid=1;
$sql="select * from food where catalog_id=$cid";
$output=sql_execute($sql);

echo json_encode($output);
?>