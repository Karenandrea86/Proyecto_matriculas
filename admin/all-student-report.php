<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>
<h1 class="text-primary"><i class="fas fa-users"></i> Reporte de Todos los Estudiantes<small class="text-warning"> Lista de Estudiantes</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Inicio </a></li>
     <li class="breadcrumb-item active" aria-current="page">Listado Estudiantes</li>
  </ol>
</nav>
<?php if(isset($_GET['delete-student']) || isset($_GET['edit'])) {?>
  <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
    <div class="toast-header">
      <strong class="mr-auto">Insertar Estudiantes</strong>
      <small><?php echo date('d-M-Y'); ?></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <?php 
        if (isset($_GET['delete-student'])) {
          if ($_GET['delete-student']=='success') {
            echo "<p style='color: green; font-weight: bold;'>Estudiante eliminado exitósamente</p>";
          }  
        }
        if (isset($_GET['delete-student'])) {
          if ($_GET['delete-student']=='error') {
            echo "<p style='color: red'; font-weight: bold;>Estudiante no eliminado</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='success') {
            echo "<p style='color: green; font-weight: bold;'>Estudiante editado exitósamente</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='error') {
            echo "<p style='color: red; font-weight: bold;'>Estudiante no editado</p>";
          }  
        }
      ?>
    </div>
  </div>
    <?php } ?>
<table class="table  table-striped table-hover table-bordered" id="data">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre de Estudiante</th>
      <th scope="col">Número de Matrícula</th>
      <th scope="col">Nivel</th>
      <th scope="col">Dirección de Estudiante</th>
      <th scope="col">Teléfono de Contacto</th>
      <th scope="col">Fotografía</th>
    
    </tr>
  </thead>
  <tbody>
    <?php 
      $query=mysqli_query($db_con,'SELECT * FROM `student_info` ORDER BY `student_info`.`datetime` DESC;');
      $i=1;
      while ($result = mysqli_fetch_array($query)) { ?>
      <tr>
        <?php 
        echo '<td>'.$i.'</td>
        <td>'.ucwords($result['name']).'</td>
        <td>'.$result['roll'].'</td>
        <td>'.ucwords($result['level']).'</td>
        <td>'.$result['city'].'</td>
        <td>'.ucwords($result['pcontact']).'</td>
        <td><img src="images/'.$result['photo'].'" height="50px"></td>
          <td>
          </td>';?>
      </tr>  
     <?php $i++;} ?>
    
  </tbody>
</table>
<script type="text/javascript">
  function confirmationDelete(anchor)
{
   var conf = confirm('Estás seguro que deseas eliminar este registro, esta opción es irreversible');
   if(conf)
      window.location=anchor.attr("href");
}
</script>