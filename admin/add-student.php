<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }

  if (isset($_POST['addstudent'])) {
  	$name = $_POST['name'];
  	$roll = $_POST['roll'];
	$level = $_POST['level'];
  	$city = $_POST['city'];
  	$pcontact = $_POST['pcontact'];
	$photo = explode('.', $_FILES['photo']['name']);
  	$photo = end($photo); 
  	$photo = $roll.date('Y-m-d-m-s').'.'.$photo;
	
	$query = "INSERT INTO `student_info`(`name`, `roll`, `level`, `city`, `pcontact`, `photo`) VALUES ('$name', '$roll', '$level', '$city', '$pcontact', '$photo');";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Estudiante Ingresado Exitosamente</p>';
  		move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
  	}else{
  		$datainsert['inserterror']= '<p style="color: red;">Estudiante no ingresado, revise la información diligenciada.</p>';
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Agregar Estudiante<small class="text-warning"> Nueva Solicitud</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Inicio </a></li>
     <li class="breadcrumb-item active" aria-current="page">Agregar Estudiante</li>
  </ol>
</nav>

<div class="row">
	
<div class="col-sm-6">
		<?php if (isset($datainsert)) {?>
	<div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
	  <div class="toast-header">
	    <strong class="mr-auto">Alerta de inserción de estudiante</strong>
	    <small><?php echo date('d-M-Y'); ?></small>
	    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	  </div>
	  <div class="toast-body">
	    <?php 
	    	if (isset($datainsert['insertsucess'])) {
	    		echo $datainsert['insertsucess'];
	    	}
	    	if (isset($datainsert['inserterror'])) {
	    		echo $datainsert['inserterror'];
	    	}
	    ?>
	  </div>
	</div>
		<?php } ?>
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
			<label>Id del acudiente</label>
			<select name="id" class="form-control">
				<option value="0">Seleccione el id del acudiente</option>
				<?php
				include("db_con.php");
				$getId1 = "SELECT * from acu_info order by id";
				$getId2 = mysqli_query($db_con, $getId1);
				while ($row = mysqli_fetch_array($getId2))
				{
					$id = $row['id'];
					?>
					<option value="<?php echo $id; ?>"><?php echo $id; ?></option>
					<?php
					}
					?>
					</select>
				</div>
		<div class="form-group">
		    <label for="name">Nombre de Estudiante</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?= isset($name)? $name: '' ; ?>" placeholder= "Ingrese el nombre del estudiante" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="roll">Número de Matrícula</label>
		    <input name="roll" type="number" value="<?= isset($roll)? $roll: '' ; ?>" class="form-control" pattern="[0-9]{11}" id="roll" placeholder= "Ingrese el número de matrícula" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="level">Nivel Estudiantil</label>
		    <select name="level" class="form-control" id="level" required="">
		    	<option>Seleccione el nivel del estudiante</option>
		    	<option value="Párvulos">Párvulos</option>
		    	<option value="Pre - jardín">Pre - jardín</option>
		    	<option value="Jardín">Jardín</option>
		    	<option value="Transición">Transición</option>
		    </select>
	  	</div>
		<div class="form-group">
		    <label for="city">Dirección de Estudiante</label>
		    <input name="city" type="text" value="<?= isset($city)? $city: '' ; ?>" class="form-control" id="city" placeholder= "Ingrese la dirección del estudiante" required="">
	  	</div>
		<div class="form-group">
		    <label for="pcontact">Teléfono de Contacto</label>
		    <input name="pcontact" type="number" class="form-control" id="pcontact" pattern="[0-9]{11}" value="<?= isset($pcontact)? $pcontact: '' ; ?>" placeholder="Ingrese un teléfono de contacto" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="photo">Fotografía de Estudiante</label>
		    <input name="photo" type="file" class="form-control" id="photo" required="">
	  	</div>
	  	<div class="form-group text-center">
		    <input name="addstudent" value="Agregar Estudiante" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>