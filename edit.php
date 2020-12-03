<?php
include("db.php");
$Precio = '';
$Material= '';
$TipoMueble = '';
$Marca = '';
$Color = '';

if  (isset($_GET['NoSerie'])) {
  $NoSerie = $_GET['NoSerie'];
  $query = "SELECT * FROM articulos WHERE NoSerie=$NoSerie";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 4) {
    $row = mysqli_fetch_array($result);
    $Precio = $row['Precio'];
    $Material = $row['Material'];
    $TipoMueble = $row['TipoMueble'];
    $Marca = $row['Marca'];
    $Color = $row['Color'];
  }
}

if (isset($_POST['update'])) {
  $NoSerie = $_GET['NoSerie'];
  $Precio= $_POST['Precio'];
  $Material = $_POST['Material'];
  $TipoMueble= $_POST['TipoMueble'];
  $Marca= $_POST['Marca'];
  $Color= $_POST['Color'];

  $query = "UPDATE articulos set Precio = '$Precio', Material = '$Material',
   TipoMueble = '$TipoMueble', Marca = '$Marca', Color = '$Color' WHERE NoSerie=$NoSerie";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Article Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?NoSerie=<?php echo $_GET['NoSerie']; ?>" method="POST">
        <div class="form-group">
          <input name="Precio" type="text" class="form-control" value="<?php echo $Precio; ?>" placeholder="Precio">
        </div>
        <div class="form-group">
          <input name="Material" type="text" class="form-control" value="<?php echo $Material; ?>" placeholder="Material">
        </div>
        <div class="form-group">
          <input name="TipoMueble" type="text" class="form-control" value="<?php echo $TipoMueble; ?>" placeholder="Tipo de mueble">
        </div>
        <div class="form-group">
          <input name="Marca" type="text" class="form-control" value="<?php echo $Marca; ?>" placeholder="Marca">
        </div>
        <div class="form-group">
          <input name="Color" type="text" class="form-control" value="<?php echo $Color; ?>" placeholder="Color">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
