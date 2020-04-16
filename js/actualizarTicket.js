$('#actualizarTicket').click(function(){
  var form = $('#actualidarDatos').serialize();
  $.ajax({
    method: 'POST',
    url: '../controller/actualizar_controller.php',
    data: form,
	   beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
		console.log(res);
		
      if(res == 'error_1'){
        swal('Error', 'Campos obligatorios, por favor llena el email y las claves', 'warning');
        }else{
         location.reload();
      }

    }
  });

});