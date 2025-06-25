<?php
include './DB.php';
if (isset($_GET['delete'])) {
  $delete_id = (int)$_GET['delete'];
  $conn->query("DELETE FROM info WHERE id = $delete_id");
  header("Location: index.php");
  exit;
}


?>