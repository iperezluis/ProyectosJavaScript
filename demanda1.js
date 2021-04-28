$(document).on('ready', constructor);
   function constructor(){

   	    CalcularBombillos();
   	    CalcularTomacorrientes();
   	    DemandaTotal();
        
   	    
   }

   function CalcularBombillos(){


   	  $('#filabombillos').on('change', '#bombillo', function(){

   	  	 var Bombillo=parseInt($('#bombillo').val());
   	  	 $('#wattsB').val(Bombillo*26);
   	  })
   }

  

   function CalcularTomacorrientes(){
  $('#filatomacorrientes').on('change', '#tomacorriente', '#factor', function(){

   	  	 var Tomacorriente=parseInt($('#tomacorriente').val());
   	  	 var FactorPotencia=parseFloat($('#factor').val());
   	  	 $('#wattsT').val(Tomacorriente*[(FactorPotencia*180)]);
   	  })
}


   function DemandaTotal(){
   	$('#filatomacorrientes').on('change', '#tomacorriente', '#factor', function(){

   	  	  var Tomacorriente=parseInt($('#tomacorriente').val());
          var FactorPotencia=parseFloat($('#factor').val());
          var Bombillo=parseInt($('#bombillo').val());
          var tomasybombillos=parseInt($('#tomaybombillo').val());
   	  	 let potenciawatts = $('#totalwatts').val([Tomacorriente*(FactorPotencia*180)+(Bombillo*26)]);
         $('#totalkva').val([Tomacorriente*(FactorPotencia*180)+(Bombillo*26)]/FactorPotencia);
         $('#tomaybombillo').val();
   	  })

   }

   

   function demandaproyectada(){

    let potenciawatts;

   if (potenciawatts>6000&&potenciawatts<120000) {
    tomasybombillos= 0;
   }else if (potenciawatts>120000) {
    tomasybombillos = 0;
   }else{ 
    tomasybombillos = 0;
   }
 }

function mostrartoast(){

  let toast = document.getElementById("mensaje");
  toast.className = "mostrar";
  setTimeout(function(){ toast.className = toast.className.replace("mostrar", ""); }, 5000);
  
 }

 function cerrartoast(){

  let toast = document.getElementById("mensaje");
  toast.className = "close";
  toast.className = toast.className.replace("close", "");
  
 }
