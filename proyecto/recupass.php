<DOCTYPE html>
<html>
    <head>
        <title>LOGIN PARKLOT</title>
            
            <meta charset="utf-8">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <link rel="stylesheet" href="estilos.css">
            <link rel="stylesheet" href="java.js">
            <link rel="stylesheet" href="assets/fonts/fontawesome-webfont.ttf">
            
        
    </head>

    <body>
        
  
 <div class="container" style="text-align: center;">

            <h1>Solicitud de Recuperacíon Contraseña</h1>
            <h5>TIMIZA PARKLOT</h5>
            <img id="profile-img" class="profile-img-card" src="images/login.png" />
       
<div class="card card-container" style="text-align: center;">
 
        <div class="form-group row">
           <form action="enviar.php">
          <div class="col-10">
            <input class="form-control" type="text" placeholder="Digite su Nombre y Apellidos Completos" id="example-text-input">
          </div>
        </div>

        <div class="form-group row">
          
          <div class="col-10">
            <input class="form-control" type="email" placeholder="Digite su Correo" id="example-email-input">
          </div>
        </div>

        <div class="form-group row">
         
          <div class="col-10">
            <input class="form-control" type="tel" placeholder="Digite su Número de Telefono" id="example-tel-input">
          </div>
        </div>

        <div class="form-group row">
          <label for="example-date-input" class="col-2 col-form-label">Seleccione Fecha Actual</label>
          <div class="col-10">
            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
          </div>
        </div>

        <div class="form-group row">
          
          <div class="col-10">
            <input class="form-control" type="text" placeholder="Observaciones" id="example-text-input">
          </div>
        </div>
        
         </form>
          <button class="btn btn-lg btn-primary btn-block btn-signin" name="login" id="test" type="submit">Enviar Solicitud</button>
         <a href="index.php">INICIO</a>
</div>


</div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
           
    </body>
</html>