<?php

include("db.php");

if(isset($_GET['NoSerie'])) {
  $NoSerie = $_GET['NoSerie'];
  $query = "DELETE FROM articulos WHERE NoSerie = $NoSerie";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Article Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
