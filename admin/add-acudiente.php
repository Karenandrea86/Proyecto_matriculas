<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }

  if (isset($_POST['addacudiente'])) {
  	$identification_number = $_POST['identification_number'];
  	$name = $_POST['name'];
  	$surname = $_POST['surname'];
  	$city = $_POST['city'];
  	$pcontact = $_POST['pcontact'];
	
	$query = "INSERT INTO `acu_info`(`identification_number`, `name`, `surname`, `city`, `pcontact`) VALUES ('$identification_number', '$name', '$surname', '$city', '$pcontact');";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Acudiente Ingresado Exitosamente</p>';
  	}else{
  		$datainsert['inserterror']= '<p style="color: red;">Acudiente no ingresado, revise la información diligenciada.</p>';
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Agregar Acudiente<small class="text-warning"> Nueva Solicitud</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Inicio </a></li>
     <li class="breadcrumb-item active" aria-current="page">Agregar Acudiente</li>
  </ol>
</nav>

<div class="row">
	
<div class="col-sm-6">
		<?php if (isset($datainsert)) {?>
	<div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
	  <div class="toast-header">
	    <strong class="mr-auto">Alerta de inserción de acudiente</strong>
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
		    <label for="identification_number">Número de Identificación</label>
		    <input name="identification_number" type="number" value="<?= isset($identification_number)? $identification_number: '' ; ?>" class="form-control" pattern="[0-9]{11}" id="identification_number" placeholder= "Ingrese su número de identificación" required="">
	  	</div>
		<div class="form-group">
		    <label for="name">Nombre de Acudiente</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?= isset($name)? $name: '' ; ?>" placeholder= "Ingrese su nombre" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="surname">Apellido de Acudiente</label>
		    <input name="surname" type="text" class="form-control" id="surname" value="<?= isset($surname)? $surname: '' ; ?>" placeholder= "Ingrese su apellido" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="city">Dirección de Acudiente</label>
		    <input name="city" type="text" value="<?= isset($city)? $city: '' ; ?>" class="form-control" id="city" placeholder= "Ingrese su dirección" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="pcontact">Teléfono de Contacto</label>
		    <input name="pcontact" type="number" class="form-control" id="pcontact" pattern="[0-9]{11}" value="<?= isset($pcontact)? $pcontact: '' ; ?>" placeholder= "Ingrese su teléfono de contacto" required="">
	  	</div>
	  	<div class="form-group text-center">
			<input name="addacudiente" value="Agregar Acudiente" type="submit" class="btn btn-danger">
	  	</div>
		<section class="form-group text-center">
			<a href="index.php?page=add-student" type="submit" class="btn btn-danger">Continuar Solicitud</a>
		</section>
	 </form>
</div>
</div>