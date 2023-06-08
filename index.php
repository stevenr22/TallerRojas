<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

$sentencia = "select * from empleados where activo=1";
$respuesta = $db->query($sentencia);
while($arreglo = $respuesta->fetch_array()){
    $nombre_usuario = $arreglo['nombre'];
}

 $variable = 1;


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Rojas Steven</title>
	<link href="css/bootstrap.css" rel="stylesheet" /> <!-- css -->
	<script src="jquery-3.6.4.js" ></script> <!-- javascript -->
	<script src="js/bootstrap.js" ></script>
	<script src="js/bootstrap.bundle.js" ></script>
	<script src="jquery.dataTables.min.js" ></script>
	<script src="dataTables.bootstrap4.min.js" ></script>
	<link href="dataTables.bootstrap4.min.css" rel="stylesheet" />
	<script src="sweetalert/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="sweetalert/sweetalert.css">
	<script src="chosen/chosen.jquery.min.js"></script>
	<link href='chosen/chosen.min.css' rel='stylesheet'>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
</head>
<style>
	label{
		font-weight: bold;
	}

</style>
<body>
    <div class="container">
        <div class="card-header" style="background-color: rgba(255, 32, 25, 0.479);">
            <div class="tittle text-center"><b>DATOS PERSONALES </b></div>
        </div>
        <div class="card" style="background-color: rgba(154, 151, 151, 0.326);">
            <div class="col-md-12">
                <form id="formulario" method="post" action="guardaris.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Cedula:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text"  id="cedula" name="cedula" onkeypress="return validarSOLOnumeros(event)" maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese la cédula" style="font-size: small;" required/>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Nombre:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input id="nombre" name="nombre" onkeypress="return validarSOLOletras(event)" type="text" class="form-control text-uppercase " placeholder="Ingrese el nombre" style="font-size: small;" required/>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Dirección:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input id="direccion" name="direccion" onkeypress="return validarDireccion(event)" type="text" class="form-control" placeholder="Ingrese su dirección" style="font-size: small;" required/>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Télf fijo:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" id="telefono" name="telefono" class="form-control text-uppercase" pattern="[0-9]{4}-[0-9]{4}" placeholder="Ingrese N° fijo" style="font-size: small;">
                                        <p>XXXX-XXXX</p>                        
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Fecha ingreso: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" id="fingreso" name="fingreso" class="form-control text-uppercase" placeholder="Ingrese fecha ingreso" style="font-size: small;" required  />
                                   
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Sueldo: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="number" id="sueldo" name="sueldo" class="form-control text-uppercase" onkeypress="return validarSOLOnumeros(event)" placeholder="Ingrese su sueldo" style="font-size: small;" required  />
                                   
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Nacionalidad:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input id="nacionalidad" name="nacionalidad" onkeypress="return validarSOLOletras(event)" type="text" class="form-control text-uppercase " placeholder="Ingrese su nacionalidad" style="font-size: small;" required/>
                                   
                                    </div>
                                </div>
            
                            </div>
                            <!--PARTE DERECHA-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Rif personal:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text"  id="rifpersonal" name="rifpersonal" onkeypress="return validarSOLOnumeros(event)"  maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese su rif" style="font-size: small;" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Apellido:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input id="apellido" name="apellido" onkeypress="return validarSOLOletras(event)" type="text" class="form-control text-uppercase " placeholder="Ingrese el apellido" style="font-size: small;" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Télf movil:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text"  id="tmovil" name="tmovil" onkeypress="return validarSOLOnumeros(event)" maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese número móvil" style="font-size: small;" required/>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>N° contacto:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text"  id="ncontacto" name="ncontacto" onkeypress="return validarSOLOnumeros(event)" maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese N° contacto" style="font-size: small;" required/>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Fecha culminasión: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" id="fculm" name="fculm" class="form-control text-uppercase" placeholder="Ingrese fecha culminasión" style="font-size: small;" required  />
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Foto: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="file" id="foto" name="foto" class="form-control text-uppercase" accept="image/jpeg" style="font-size: small;"  />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Tienda: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select id="tienda" name="tienda" class="form-control">
                                            <option value="1">Tienda 1</option>
                                            <option value="2">Tienda 2</option>
                                            <option value="3">Tienda 3</option>
								        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <label>Cargo: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select id="cargo" name="cargo" class="form-control">
                                            <option value="Gerente">Gerente</option>
                                            <option value="Asistente">Asistente</option>
                                            <option value="Analista">Analista</option>

                                        </select>
                                    </div>
                                </div>

            
            
                            </div>
                            <div class="col-md-12 text-center"><br>
                                <input class="btn btn-warning" type="submit" value="ENVIAR" />                
                            </div>
                        </div>
                       
                    </div>
                   
    
                </form>
                
              
              
            </div>
        </div>
        <!--TABLA DE DATOS-->

    </div><br>

  
    <table id="mesa" class="table table-bordered table-striped table-hover">
        <thead class="bg-warning text-center">
            
		<th>RIF </th>
		<th>CEDULA</th>
		<th>NOMBRE </th>
		<th>APELLIDO </th>
		<th>DIRECCION</th>
        <th>TELEFONO FIJO</th>
        <th>TELEFONO MOVIL</th>
		<th>NUMERO CONTACTO </th>
		<th>FECHA INGRESO</th>
		<th>FECHA CULMINACIÓN</th>
		<th>SUELDO</th>
		<th>NACIONALIDAD</th>
        <th>TIENDA</th>
		<th>CARGO</th>
		
		<th>OPCIONES</th>
                                    
        </thead>
        <tbody>
        <?php
		$sentencia = "select * from empleados where activo=1";
		$respuesta = $db->query($sentencia);
		while($arreglo = $respuesta->fetch_array()){
		?>
			<tr>
                <td><?php echo $arreglo['RIF']; ?></td>
                <td><?php echo $arreglo['cedula']; ?></td>
                <td><?php echo $arreglo['nombre']; ?></td>
				<td><?php echo $arreglo['apellido']; ?></td>
                <td><?php echo $arreglo['direccion']; ?></td>
                <td><?php echo $arreglo['telefono']; ?></td><!--TELEFONO FIJO-->
                <td><?php echo $arreglo['celular']; ?></td><!--telefono movil-->
                <td><?php echo $arreglo['n_contactp']; ?></td><!--numero contacto-->
                <td><?php echo $arreglo['f_ingreso']; ?></td>
				<td><?php echo $arreglo['f_culminacion']; ?></td>
                <td><?php echo $arreglo['sueldo']; ?></td>
			
				<td><?php echo $arreglo['nacionalidad']; ?></td>
				<td><?php echo $arreglo['tienda']; ?></td>
				<td><?php echo $arreglo['cargo']; ?></td>
				<td>
					<button type="button" class="btn btn-warning" onclick="modalcito_aparece('<?php echo $arreglo['RIF']; ?>','<?php echo $arreglo['cedula']; ?>','<?php echo $arreglo['nombre']; ?>','<?php echo $arreglo['apellido']; ?>','<?php echo $arreglo['direccion']; ?>','<?php echo $arreglo['celular']; ?>','<?php echo $arreglo['telefono']; ?>','<?php echo $arreglo['n_contactp']; ?>','<?php echo $arreglo['f_ingreso']; ?>','<?php echo $arreglo['f_culminacion']; ?>','<?php echo $arreglo['sueldo']; ?>','<?php echo $arreglo['nacionalidad']; ?>','<?php echo $arreglo['tienda']; ?>','<?php echo $arreglo['cargo']; ?>')">ACTUALIZAR</button>

					<button type="button" class="btn btn-danger"
						onclick="eliminar('<?php echo $arreglo['id_empleado']; ?>')">ELIMINAR</button>
				</td>
			</tr>
		<?php
		}
		?>
            
        </tbody>
    </table>
  
    
         
    <!--MODAL-->
    <div id="modalcito" class="modal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card-header" style="background-color: rgba(255, 32, 25, 0.479);">
                    <b>EDITAR DATOS EMPLEADOS</b>
                </div>
                <div class="card" style="background-color: rgba(154, 151, 151, 0.601);">
                    <div class="col-md-12">
                        <form id="formulario" method="post" action="editaris.php" enctype="multipart/form-data">
                            <input type="hidden" id="idregistro" name="idregistro" />
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Cedula:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text"  id="Ecedula" name="cedula" onkeypress="return validarSOLOnumeros(event)" maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese la cédula" style="font-size: small;" required/>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Nombre:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input id="Enombre" name="nombre" onkeypress="return validarSOLOletras(event)" type="text" class="form-control text-uppercase " placeholder="Ingrese el nombre" style="font-size: small;" required/>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Dirección:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input id="Edireccion" name="direccion" onkeypress="return validarDireccion(event)" type="text" class="form-control" placeholder="Ingrese su dirección" style="font-size: small;" required/>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Télf fijo:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" style="font-size: small;" id="Etelefono" name="telefono" class="form-control text-uppercase" pattern="[0-9]{4}-[0-9]{4}" placeholder="Ingrese N° fijo">
                                                <p>XXXX-XXXX</p>                        
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Fecha ingreso: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="date" id="Efingreso" name="fingreso" class="form-control text-uppercase" placeholder="Ingrese fecha ingreso" style="font-size: small;" required  />
                                           
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Sueldo: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="number" id="Esueldo" name="sueldo" class="form-control text-uppercase" onkeypress="return validarSOLOnumeros(event)" placeholder="Ingrese su sueldo" style="font-size: small;" required  />
                                           
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Nacionalidad:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input id="Enacionalidad" name="nacionalidad" onkeypress="return validarSOLOletras(event)" type="text" class="form-control text-uppercase " placeholder="Ingrese su nacionalidad" style="font-size: small;" required/>
                                           
                                            </div>
                                        </div>
                    
                                    </div>
                                    <!--PARTE DERECHA-->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Rif personal:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text"  id="Erifpersonal" name="rifpersonal" onkeypress="return validarSOLOnumeros(event)"  maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese su rif" style="font-size: small;" required/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Apellido:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input id="Eapellido" name="apellido" onkeypress="return validarSOLOletras(event)" type="text" class="form-control text-uppercase " placeholder="Ingrese el apellido" style="font-size: small;" required/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Télf movil:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="Emovil" name="movil" onkeypress="return validarSOLOnumeros(event)" maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese número móvil" style="font-size: small;" required/>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>N° contacto:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text"  id="Encontacto" name="ncontacto" onkeypress="return validarSOLOnumeros(event)" maxlength="10"  class="form-control text-uppercase" placeholder="Ingrese N° contacto" style="font-size: small;" required/>
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Fecha culminasión: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="date" id="Efculm" name="fculm" class="form-control text-uppercase" placeholder="Ingrese fecha culminasión" style="font-size: small;" required  />
                                            </div>
                                        </div>
                    
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Foto: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="file" id="Efoto" name="foto" class="form-control text-uppercase" accept="image/jpeg" style="font-size: small;"  />
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Tienda: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <select id="Etienda" name="tienda" class="form-control">
                                                    <option value="1">Tienda 1</option>
                                                    <option value="2">Tienda 2</option>
                                                    <option value="3">Tienda 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                <label>Cargo: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <select id="Ecargo" name="cargo" class="form-control">
                                                    <option value="Gerente">Gerente</option>
                                                    <option value="Asistente">Asistente</option>
                                                    <option value="Analista">Analista</option>

                                                </select>
                                            </div>
                                        </div>
                    
                    
                                    </div>
                                    <div class="col-md-12 text-center"><br>
                                        <input class="btn btn-warning" type="submit" value="ENVIAR" />                
                                    </div>
                                </div>
                               
                            </div>
                           
            
                        </form>
                        
                      
                      
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" CLASS="btn btn-danger" onclick="modalcito_seesconde()">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
<script>
    	function validarSOLOletras(e){
		let tecla = (document.all) ? e.keyCode : e.which; // 2
		if (tecla==8) return true; // 3
		let patron =/[A-Za-z\s]/; // 4
		let te = String.fromCharCode(tecla); // 5
		return patron.test(te); // 6
	}

	function validarSOLOnumeros(e){
		let tecla = (document.all) ? e.keyCode : e.which; // 2
		if (tecla==8) return true; // 3
		let patron =/[0-9]/; // 4
		let te = String.fromCharCode(tecla); // 5
		return patron.test(te); // 6
	}
    function validarDireccion(e){
		let tecla = (document.all) ? e.keyCode : e.which; // 2
		if (tecla==8) return true; // 3
		let patron =/[A-Za-z0-9\s]/; // 4
		let te = String.fromCharCode(tecla); // 5
		return patron.test(te); // 6
	}

	function modalcito_aparece(rif,ced, nom,ape, dir,tel_movil,tel_fijo,n_contacto,fecha_ingreso,fecha_culmi,sueldo,nacionalidad,tienda,cargo) {
			$("#modalcito").modal("show");
            $("#Erifpersonal").val(rif);
			$("#Ecedula").val(ced);
			$("#Enombre").val(nom);
            $("#Eapellido").val(ape);
            $("#Edireccion").val(dir);
            $("#Emovil").val(tel_movil);
            $("#Etelefono").val(tel_fijo);
           
            $("#Encontacto").val(n_contacto);
			$("#Efingreso").val(fecha_ingreso);
            $("#Efculm").val(fecha_culmi);
			$("#Esueldo").val(sueldo);
			$("#Enacionalidad").val(nacionalidad);
            $("#Etienda").val(tienda);
            $("#Ecargo").val(cargo);
		}
    
	function modalcito_seesconde(){
		$("#modalcito").modal("hide");
	}




  //DATA TABLE
  $(document).ready(function () {
		$('#mesa').DataTable({
			"language": {
				"processing": "Procesando...",
				"lengthMenu": "Mostrar _MENU_ registros",
				"zeroRecords": "No se encontraron resultados",
				"emptyTable": "Ningún dato disponible en esta tabla",
				"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"infoFiltered": "(filtrado de un total de _MAX_ registros)",
				"search": "Buscar:",
				"infoThousands": ",",
				"loadingRecords": "Cargando...",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": "Siguiente",
					"previous": "Anterior"
				},
			}
		});
	});

    //ELIMINAR REGISTRO
    function eliminar(id){
		swal({
					title: 'BORRAR REGISTRO',
					text: "Desea eliminar el empleado?",
					showCloseButton: true,
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#dd3333',
					confirmButtonText: 'Aceptar',
					cancelButtonText: 'Cancelar'
				},
				function() {
					window.location.href = "eliminaris.php?id=" + id;
				});

	}
</script>
</body>
</html>