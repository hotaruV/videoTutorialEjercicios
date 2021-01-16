<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>

	<form method="POST" action="CargarTcan.php" enctype="multipart/form-data" name="add_name" id="add_name">

		<div class="card shadow mb-4">
			<div class="card-header py-3 card" style="background-color: #17325c;">
				<h6 class="m-0 font-weight-bold text-white"> <i class="fas fa-file"></i> Enviar Tarea</h6>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tbody id="dynamic_field">
						<tr>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<td> <input type="file" name="file" class="form-control" /></td>
								</div>
								<div class="input-group-append">
									<td style="width:15px;"><button name="add" id="add" class="btn text-white" style="background-color: #17325c;" type="button">+</button></td>
								</div>
							</div>
						</tr>
					</tbody>

				</table>
				<div align="right">
					<input type="submit" name="submit" value="Enviar" class="btn text-white" style="background-color: #17325c;">
				</div>
	</form>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			let tabla = document.querySelector('#dynamic_field');
			tabla.addEventListener('click', eliminarInput);
			contador = 0;
			let arrayInputs = [];
			//obtenerTr();
			let buttonAdd = document.querySelector('#add')
			buttonAdd.addEventListener('click', agregarNuevo);

			function agregarNuevo() {
				let inputs = arrayInputs.push('file' + contador++)
				if (arrayInputs.length <= 8) {
					return obtenerTr();
				}
			}

			function obtenerTr() {
				const row = document.createElement('tr');
				row.innerHTML = `
					<td> <input type="file" name="file${contador}" class="form-control" /></td>
					<td><button type="button" name="remove" id="elimnar${contador}" class="btn btn-danger btn_remove">X</button></td></tr>
				`;
				tabla.appendChild(row);
			}
			

			function eliminarInput(e){
				if(e.target.classList.contains('btn_remove')){
					const btnEliminar = e.target.getAttribute('id');
				}
			}
		})
	</script>

</body>

</html>