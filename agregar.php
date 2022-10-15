	<?php include "./header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mt-4">
					<div class="card-body">
						<a href="index.php" class="btn btn-outline-info">
							<i class="fa-solid fa-angles-left"></i> Regresar
						</a>
						<h2>Agregar nuevo registro</h2>
						<form action="./procesos/insertar.php" method="post">
							<label for="plato">Nombre Plato</label>
							<input type="text" class="form-control" id="plato" name="plato" required>
							<label for="ingredientes">Ingredientes</label>
							<input type="text" class="form-control" id="ingredientes" name="ingredientes">
							<label for="categoria">Categoria</label>
							<input type="text" class="form-control" id="categoria" name="categoria" required>
							<label for="precio">Precio</label>
							<input type="text" name="precio" id="precio" class="form-control" required>
							<button class="btn btn-primary mt-3">
								<i class="fa-solid fa-floppy-disk"></i> Agregar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "./scripts.php"; ?>