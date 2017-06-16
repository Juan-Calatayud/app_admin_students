<div class="box-principal">
<h3 class="titulo">Editar Secciones <hr></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Editar seccion <?php echo $datos['nombre']; ?></h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label for="inputEmail" class="control-label">Nombre de la sección</label>
							<input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" class="form-control" required="">
						</div>
						<input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>