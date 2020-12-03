<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $Precio = $_POST['Precio'];
  $Material = $_POST['Material'];
  $TipoMueble = $_POST['TipoMueble'];
  $Marca = $_POST['Marca'];
  $Color = $_POST['Color'];
  $query = "INSERT INTO articulos(Precio, Material, TipoMueble, Marca, Color) VALUES ('$Precio', '$Material', '$TipoMueble', '$Marca', '$Color')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Article Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
