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
    $oldPhoto = base64_decode($_GET['photo']);

  if (isset($_POST['updatestudent'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $level = $_POST['level'];
    $city = $_POST['city'];
    $pcontact = $_POST['pcontact'];
  	
  	if (!empty($_FILES['photo']['name'])) {
  		 $photo = $_FILES['photo']['name'];
	  	 $photo = explode('.', $photo);
		 $photo = end($photo); 
		 $photo = $roll.date('Y-m-d-m-s').'.'.$photo;
  	}else{
  		$photo = $oldPhoto;
  	}
  	

  	$query = "UPDATE `student_info` SET `name`='$name',`roll`='$roll',`level`='$level',`city`='$city',`pcontact`='$pcontact',`photo`='$photo' WHERE `id`= $id";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Estudiante actualizado!</p>';
		if (!empty($_FILES['photo']['name'])) {
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
			unlink('images/'.$oldPhoto);
		}	
  		header('Location: index.php?page=all-student&edit=success');
  	}else{
  		header('Location: index.php?page=all-student&edit=error');
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Editar Información de Estudiante<small class="text-warning"> Editar</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Inicio </a></li>
     <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=all-student">Todos los Estudiantes </a></li>
     <li class="breadcrumb-item active" aria-current="page">Actualizar Estudiante</li>
  </ol>
</nav>

	<?php
		if (isset($id)) {
			$query = "SELECT `id`, `name`, `roll`, `level`, `city`, `pcontact`, `photo`, `datetime` FROM `student_info` WHERE `id`=$id";
			$result = mysqli_query($db_con,$query);
			$row = mysqli_fetch_array($result);
		}
	 ?>
<div class="row">
<div class="col-sm-6">
	<form enctype="multipart/form-data" method="POST" action="">
        <div class="form-group">
		    <label for="name">Nombre de Estudiante</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" placeholder= "Ingrese el nombre del estudiante" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="roll">Número de Matrícula</label>
		    <input name="roll" type="number" class="form-control" pattern="[0-9]{11}" id="roll" value="<?php echo $row['roll']; ?>" placeholder= "Ingrese el número de matrícula" required="">
	  	</div>
        <div class="form-group">
		    <label for="level">Nivel Estudiantil</label>
		    <select name="level" class="form-control" id="level" required="" value="">
		    	<option>Seleccione el nivel del estudiante</option>
		    	<option value="Párvulos" <?= $row['level']=='Párvulos'? 'selected':'' ?>>Párvulos</option>
		    	<option value="Pre - jardín" <?= $row['level']=='Pre - jardín'? 'selected':'' ?>>Pre - jardín</option>
		    	<option value="Jardín" <?= $row['level']=='Jardín'? 'selected':'' ?>>Jardín</option>
		    	<option value="Transición" <?= $row['level']=='Transición'? 'selected':'' ?>>Transición</option>
		    </select>
	  	</div>
        <div class="form-group">
		    <label for="city">Dirección de Estudiante</label>
		    <input name="city" type="text" class="form-control" id="city" value="<?php echo $row['city']; ?>" placeholder= "Ingrese la dirección del estudiante" required="">
	  	</div>
        <div class="form-group">
		    <label for="pcontact">Teléfono de Contacto</label>
		    <input name="pcontact" type="number" class="form-control" id="pcontact" value="<?php echo $row['pcontact']; ?>" pattern="[0-9]{11}" placeholder="Ingrese un teléfono de contacto" required="">
	  	</div>
        <div class="form-group">
		    <label for="photo">Fotografía de Estudiante</label>
		    <input name="photo" type="file" class="form-control" id="photo" required="">
	  	</div>
	  	<div class="form-group text-center">
		    <input name="updatestudent" value="Actualizar Estudiante" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>