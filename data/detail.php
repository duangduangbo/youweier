<?php
header("Content-Type:application/json;charset=UTF-8");
require_once("./init.php");
@$fid=$_REQUEST["fid"];

$output=['food'=>null,'detail'=>null,'cat'=>null];
$sql="select * from food where fid=$fid";
$output["food"]=sql_execute($sql);
foreach($output["food"][0] as $key=>$value){
   if($key=="catalog_id")
    $catalog_id=$value;
}
$sql="select * from detail where food_id=$fid";
$output["detail"]=sql_execute($sql);
$sql="select * from catalog where cid=$catalog_id";
$output["cat"]=sql_execute($sql);
echo json_encode($output);
?>