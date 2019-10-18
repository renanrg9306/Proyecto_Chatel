$(document).ready(pagination(1));
$(function(){
	$('#nuevo-producto').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg1').show();
		$('#registra-datos').modal({
			show:true,
			backdrop:'static'
		});
	});	
        $('#bs-prod').on('keyup',function(){
            var dato = $('#bs-prod').val();
            var url = 'administrador/busca_admin.php';
            $.ajax({
            type:'POST',
            url:url,
            data:'dato='+dato,
            success: function(datos){
                $('#agrega-registros').html(datos);
            }
        });
        return false;
        });	
});
function agregarRegistro(){
	var url = 'administrador/agrega_admin.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}
function eliminarRegistro(id){
	var url = 'administrador/elimina_admin.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Registro?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}
function editarRegistro(id){
	$('#formulario')[0].reset();
	var url = 'administrador/edita_admin.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
              //  parseSuccess.call(this [valores]);
				$('#reg').hide();
				$('#edi1').show();
				$('#pro').val('Edicion');
				$('#id-registro').val(id);
				$('#nombre').val(datos[0]);
				$('#apellido').val(datos[1]);
				$('#cedula').val(datos[2]);
				$('#correo').val(datos[3]);
				$('#celular').val(datos[4]);
				$('#telefono').val(datos[5]);
				$('#direccion').val(datos[6]);
				$('#estado').val(datos[7]);
				$('#registra-datos').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}

function pagination(partida){
	var url = 'administrador/paginar_admin.php';
	$.ajax({
		type:'POST',
		url:url,     
		data:'partida='+partida,             
	   success:function(data){
			var array = eval(data);
			$('#agrega-registros').html(array[0]);
			$('#pagination').html(array[1]);
		}
           
	});
	return false;
 }