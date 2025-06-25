<?php
include './DB.php';
// include './form.php';

$limit=5;
$page=isset($_GET['page'])?(int)$_GET['page']:1;
$offset=($page-1)*$limit;
$data=[];
$sql="SELECT * From info ORDER BY id ASC limit $limit offset $offset";
$result=$conn->query($sql);
if($result && $result->num_rows>0){
  while($row=$result->fetch_assoc()){
  $data[]=$row;
  }
}

$total_result=$conn->query("SELECT COUNT(*) as total FROM info");
$total_row=$total_result->fetch_assoc();
$total_records=$total_row['total'];
$total_pages = ceil($total_records / $limit);

?>