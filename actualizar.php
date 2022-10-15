
<?php 
	include "./clases/Conexion.php";
	include "./clases/Crud.php";

	$crud = new Crud();
	$id = $_POST['id'];
	$datos = $crud->obtenerDocumento($id);
	$idMongo = $datos->_id;
?>


<?php include "./header.php"; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card mt-4">
				<div class="card-body">

					<a href="index.php" class="btn btn-outline-info">
						<i class="fa-solid fa-angles-left"></i> Regresar
					</a>
					<h2>Actualizar registro</h2>

					<form action="./procesos/actualizar.php" method="POST">
						<input type="text" hidden value="<?php echo $idMongo ?>" name="id">
						<label for="plato">Apellido plato</label>
						<input type="text" class="form-control" id="plato" name="plato" value="<?php echo $datos->plato ?>">
						<label for="ingredientes">Apellido ingredientes</label>
						<input type="text" class="form-control" id="ingredientes" name="ingredientes" value="<?php echo $datos->ingredientes ?>">
						<label for="categoria">categoria</label>
						<input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $datos->categoria ?>">
						<label for="precio">Fecha de nacimiento</label>
						<input type="text" name="precio" id="precio" class="form-control" 
						value="<?php echo $datos->precio ?>">
						<button class="btn btn-warning mt-3">
							<i class="fa-solid fa-floppy-disk"></i> Actualizar
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "./scripts.php"; ?>