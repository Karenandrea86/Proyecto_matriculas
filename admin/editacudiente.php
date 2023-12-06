<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
    
    $id = base64_decode($_GET['id']);


  if (isset($_POST['updateacudiente'])) {
	$identification_number = $_POST['identification_number'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$city = $_POST['city'];
	$pcontact = $_POST['pcontact'];
	
  	$query = "UPDATE `acu_info` SET `identification_number`='$identification_number',`name`='$name',`surname`='$surname',`city`='$city',`pcontact`='$pcontact' WHERE `id`= $id";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Acudiente actualizado!</p>';
		if (!empty($_FILES['photo']['name'])) {
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
			unlink('images/'.$oldPhoto);
		}	
  		header('Location: index.php?page=all-acudiente&edit=success');
  	}else{
  		header('Location: index.php?page=all-acudiente&edit=error');
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Editar Información de Acudiente<small class="text-warning"> Editar</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Inicio </a></li>
     <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=all-student">Todos los Acudientes </a></li>
     <li class="breadcrumb-item active" aria-current="page">Actualizar Acudiente</li>
  </ol>
</nav>

	<?php
		if (isset($id)) {
			$query = "SELECT `id`, `identification_number`, `name`, `surname`, `city`, `pcontact`, `datetime` FROM `acu_info` WHERE `id`=$id";
			$result = mysqli_query($db_con,$query);
			$row = mysqli_fetch_array($result);
		}
	 ?>
<div class="row">
<div class="col-sm-6">
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="identification_number">Número de Identificación</label>
		    <input name="identification_number" type="number" class="form-control" pattern="[0-9]{11}" id="identification_number" value="<?php echo $row['identification_number']; ?>" placeholder= "Ingrese su número de identificación" required="">
	  	</div>
		<div class="form-group">
		    <label for="name">Nombre de Acudiente</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" placeholder= "Ingrese su nombre" required="">
	  	</div>
		<div class="form-group">
		    <label for="surname">Apellido de Acudiente</label>
		    <input name="surname" type="text" class="form-control" id="surname" value="<?php echo $row['surname']; ?>" placeholder= "Ingrese su apellido" required="">
	  	</div>
		<div class="form-group">
		    <label for="city">Dirección de Acudiente</label>
		    <input name="city" type="text" class="form-control" id="city" value="<?php echo $row['city']; ?>" placeholder= "Ingrese su dirección" required="">
	  	</div>
		<div class="form-group">
		    <label for="pcontact">Teléfono de Contacto</label>
		    <input name="pcontact" type="number" class="form-control" pattern="[0-9]{11}" id="pcontact" value="<?php echo $row['pcontact']; ?>" placeholder= "Ingrese su teléfono de contacto" required="">
	  	</div>
	  	<div class="form-group text-center">
		    <input name="updateacudiente" value="Actualizar Acudiente" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>