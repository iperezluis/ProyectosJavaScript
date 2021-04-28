<?php

     $conexion= mysqli_connect("localhost","root","","calculodecarga") or die("Hubo un error en la conexino");

?>


<html>
<head>
	 
    

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="./js/demanda1.js"></script>


	<title>Estudio de carga</title>



<!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/b1b885cd56.js" crossorigin="anonymous"></script>

</head>
<body>

	<form id="calculo" name="calculo" action="#" method="POST">
    <center><h5>Factor demanda</h5></center>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <i class="fas fa-car"></i>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a><i class="fas fa-tooth"></i>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
          <i class="fas fa-bong"></i>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

     <div class="card-body">
     	<div class="row" name="filabombillos" id="filabombillos">
     		    <div class="col-lg-4">
     			<label for="">Bombillos</label>
     			 <input type="number" min="0" name="bombillo" id="bombillo" style="width: 20%"required=""></div>
     			 <div class="col-lg-4">
     			<label for="">Watts</label>
     			 <input type="text" name="wattsB" id="wattsB" style="width: 20%" disabled="" required=""></div>
     			 <button onclick="CalcularBombillos()" type="button" class="btn btn-primary" style="width: 25%">Calcular</button>
     	          </div>
     			 
     	<div class="row" name="filatomacorrientes" id="filatomacorrientes">     
     			 <div class="col-lg-4">
     			  <label for="">Tomacorrientes</label>
                  <input type="number" min="0" name="tomacorriente" id="tomacorriente" style="width: 20%">
                 </div>
     			 <div class="col-lg-4">
     			   <label for="">Watts</label>
     			 <input type="text" name="wattsT" id="wattsT" style="width: 20%" disabled="">
     			   <select name="factor" id="factor">
                    <option selected>F.P...</option>
                    <option value="0.80" >0.80</option>
                    <option value="0.85">0.85</option>
                    <option value="0.90">0.90</option>
                   </select></div>
                <button onclick="CalcularTomacorrientes()" type="button" class="btn btn-secondary" style="width: 25%">Calcular</button>
                    
     			 <div class="col-lg-4">
     			   <label for="">Total watts</label>
                  <input type="number" name="totalwatts" id="totalwatts" style="width: 20%" disabled=""></div>
            <div class="col-lg-4">
             <label for="">Total Kva</label>
                  <input type="number" name="totalkva" id="totalkva" style="width: 20%" disabled=""></div>
            <div class="col-lg-4">    
             <label for="">Demanda proyectada</label>
                  <input type="number" name="tomaybombillo" id="tomaybombillo" style="width: 20%" step="any" disabled=""></div>
              <button type="button" class="btn btn-warning" onclick="DemandaTotal()" style="width: 25%">demanda proyectada</button>

        <hr>

                   <button type="button" class="btn btn-success mostrar" onclick="mostrartoast()" style="width: 25%">Notificarme</button>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
<div class="toast hide" role="alert" aria-live="assertive"   aria-atomic="true" id="mensaje" style="width: 270px; visibility: visible; position: fixed; z-index: 5; right: 2.5%; top: 75%; border: 1px solid rgba(0,0,0,.1); border-radius: .20rem; box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.1) max-width: 310px; opacity: 0.8">
  
   <div class="toast-header">
     
      <i class="fas fa-car"></i>
        
         <strong class="mr-auto">Estacionamiento</strong><small>ahora</small>
    <button type="button" class="btn close" data-bs-dismiss="toast" id="mensaje" aria-label="close" onclick="cerrartoast()"><span aria-hidden= "true">&times;</span></button>
     </div>
  <div class="toast-body">
    Hola luis, tienes una nueva notificacion.
  </div>
</div>
</div>
      </div>

                  
         
       
       
       
     	

     </form>

 
<!-- Ready to use Font Awesome. Activate interlock. Dynotherms - connected. Infracells - up. Icons are go! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
</body>
</html>