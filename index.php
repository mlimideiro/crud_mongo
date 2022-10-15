<?php session_start();
	include "./clases/Conexion.php";
	include "./clases/Crud.php";
	$crud = new Crud();
	$datos = $crud->mostrarDatos();

	$mensaje = '';
	if (isset($_SESSION['mensaje_crud'])) {
		$mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
		unset($_SESSION['mensaje_crud']);
	}
?>


<?php include "./header.php"; ?>
<div class="container">

	<div class="row">
		<div class="col">
			<div class="card mt-4">
				<div class="card-body">
					<h2>Restaurant Salvatori</h2>
					<a href="./agregar.php" class="btn btn-primary">
						<i class="fa-solid fa fa-cutlery"></i> Agregar nuevo plato
					</a>
					<hr>

					<table class="table table-sm table-hover table-bordered">
						<thead>
							<th>categoria Plato</th>
							<th>Ingredientes</th>
							<th>Categoría</th>
							<th>Precio</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>
						<tbody>
							<?php
							foreach ($datos as $item) {
							?>
								<tr>
									<td><?php echo $item->plato; ?></td>
									<td><?php echo $item->ingredientes; ?></td>
									<td><?php echo $item->categoria; ?></td>
									<td><?php echo $item->precio; ?></td>
									<td class="text-center">
										<form action="./actualizar.php" method="POST">
											<input type="text" hidden value="<?php echo $item->_id ?>" name="id">
											<button class="btn btn-warning">
												<i class="fa-solid fa-user-pen"></i>
											</button>
										</form>
									</td>
									<td class="text-center">
										<form action="./eliminar.php" method="POST">
											<input type="text" hidden value="<?php echo $item->_id ?>" name="id">
											<button class="btn btn-danger">
												<i class="fa-solid fa-user-xmark"></i>
											</button>
										</form>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
<?php include "./scripts.php"; ?>

<script>
	let mensaje = <?php echo $mensaje; ?>;
	console.log(mensaje);
</script>