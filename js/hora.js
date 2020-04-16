/*Con esta Función activamos el campo hora al seleccionar o elegir la via de contacto */		
	function Hora(){

    var fecha = new Date();
    var horas = fecha.getHours();
    var mins = fecha.getMinutes();
    var segs = fecha.getSeconds();

    if(horas < 10){ horas = "0" + horas; }
    if(mins < 10){ mins = "0" + mins; }
    if(segs < 10){ segs = "0" + segs; }
    
    var horaatual = horas + ":" + mins + ":" + segs;  
    
    document.getElementById("horainicio").value = horaatual;
	}
/* fin de la función*/	

// JavaScript Document