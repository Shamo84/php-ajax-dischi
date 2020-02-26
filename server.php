<?php
include 'db.php';
$author = $_GET["author"];
if ($author != "All") {
  foreach ($db as $key => $value) {
    if ($value["author"] != $author) {
      unset($db[$key]);
   }
  }
}
header('Content-Type: application/json');
echo json_encode($db);
?>
