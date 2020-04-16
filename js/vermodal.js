$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ticket = button.data('ticket') // Extract info from data-* attributes
  var cedula = button.data('cedula') // Extract info from data-* attributes
  var nombre = button.data('nombre') // Extract info from data-* attributes
  var telefono = button.data('telefono') // Extract info from data-* attributes
  var tipo = button.data('tipo') // Extract info from data-* attributes
  var solicitud = button.data('solicitud') // Extract info from data-* attributes
  var email = button.data('email') // Extract info from data-* attributes
  var cliente = button.data('cliente') // Extract info from data-* attributes
  var empresa = button.data('empresa') // Extract info from data-* attributes
  var ciudad = button.data('ciudad') // Extract info from data-* attributes
  var medioentrega = button.data('medioentrega') // Extract info from data-* attributes
  var fechaentrega = button.data('fechaentrega') // Extract info from data-* attributes
  var respuestaticket = button.data('respuestaticket') // Extract info from data-* attributes
  var observacionesticket = button.data('observacionesticket') // Extract info from data-* attributes
  var estadotrabajador = button.data('estadotrabajador') // Extract info from data-* attributes
  
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #ticket').val(ticket)
  modal.find('.modal-body #cedula').val(cedula)
  modal.find('.modal-body #nombrecompleto').val(nombre)
  modal.find('.modal-body #telefono').val(telefono)
  modal.find('.modal-body #tiposolicitud').val(tipo)
  modal.find('.modal-body #solicitud').val(solicitud)
  modal.find('.modal-body #email').val(email)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #empresa').val(empresa)
  modal.find('.modal-body #municipio').val(ciudad)
  modal.find('.modal-body #medioentrega').val(medioentrega)
  modal.find('.modal-body #fechaentrega').val(fechaentrega)
  modal.find('.modal-body #respuestaticket').val(respuestaticket)
  modal.find('.modal-body #observacionesticket').val(observacionesticket)
  modal.find('.modal-body #estadotrabajador').val(estadotrabajador)
})