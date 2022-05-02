<?php  
$usuarios= ControladorFormularios::ctrSeleccionarRegistros();

?>


<div class="container-fluid">
	<div class="container py-5">
<table class="table table-striped">
			<thead>
				<tr>
					<th>Nombres</th>
					<th>Email</th>
					<th>Fecha</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($usuarios as $key => $value): ?>
					<tr>
					<td><?php echo $value ["nombre"]; ?></td>
					<td><?php echo $value ["email"]; ?></td>
					<td><?php echo $value ["fecha"]; ?></td>
					
					<td>
						<div class="btn-group">
							<button class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button>
							<button class="btn btn-danger"><i class="fa-solid fa-eraser"></i></button>
						</div>
					</td>
				</tr>
					
				<?php endforeach ?>
				
				
			</tbody>
		</table>
</div>
</div>