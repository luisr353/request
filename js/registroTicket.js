$('#registroTicket').click(function(){

  var form = $('#regsolicitud').serialize();
  $.ajax({
    method: 'POST',
    url: '../controller/ticket_controller.php',
    data: form,
	   beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
		console.log(res);
		
      if(res == 'error_1'){
        swal('Error', 'Campos obligatorios, por favor llena el email y las claves', 'warning');
      }else if(res == 'error_2'){
        swal('Error', 'Las claves deben ser iguales, por favor intentalo de nuevo', 'error');
      }else if(res == 'error_3'){
        swal('Error', 'El correo que ingresaste ya se encuentra registrado', 'error');
      }else if(res == 'error_4'){
        swal('Error', 'Por favor ingresa un correo valido', 'warning');
      }else{
         location.reload();
      }

    }
  });

});