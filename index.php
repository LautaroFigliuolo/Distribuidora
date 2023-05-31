<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <title>Ferretería</title>
</head>
<body>
    <!-- MENU DE NAVEGACION-->
    <div>
        <nav class="menu">
            <ul class="menu2">
              <li><a href="#inicio">INICIO</a> </li>
              <li><a href="#especializacion">LOGIN</a></li>
              <li><a href="#contacto">CONTACTAR</a> </li>
            </ul>
          </nav>
    </div>
    <!-- FIN MENU DE NAVEGACION-->  

    <!-- BLOQUE DE INICIO-->
    <section id="inicio" >
        <h1>Ferretería industrial y del hogar</h1>
        <h3>Realiza tu presupuesto sin cargo</h3>     
    </section>
    <!-- FIN BLOQUE DE INICIO-->

    <!-- BLOQUE DE NAVEGACION-->
    <section id="especializacion">
        <h3>Divisiones especializadas</h3>
        <div class="tarjetas">
            <div class="card" style="width: 18rem;">
                <img src="imagenes_ferreteria/card0.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Atención exclusiva a Particulares.</p>
                 </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="imagenes_ferreteria/card1.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Atención exclusiva a Distribuidores y Ferreterías.</p>
                 </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="imagenes_ferreteria/card2.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Atención exclusiva a Constructoras y Gremios.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="imagenes_ferreteria/card3.jpg" class="card-img-top">
                <div class="card-body">
                    <p class="card-text">Atención exclusiva a Empresas.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN BLOQUE DE NAVEGACION-->

    <!-- BLOQUE DE LOGIN-->
    <section id="login">
        <h3>Inicia sesión para conocer nuestro catalogo</h3>
        <div class="botones">
          <a href="login.php" type="button" class="btn btn-outline-success">Iniciar Sesión</a>
          <a href="registrar.php" type="button" class="btn btn-outline-success">Registrarse</a>
        </div>   
    </section>
    <!-- FIN BLOQUE DE LOGIN--> 

     <!--BLOQUE DE CONTACTO-->
     <section id="contacto">
        <center>
        <div>
          <h2>CONTACTAR</h2>
          <h3>Enviame tus dudas.</h3>   
        </div>
        </center>
        <form action="#" id="formulario">
          <div class="itemform">
            <label for="nombre">Nombre:</label> 
            <input type="text" name="nombre" id="nombre" required> 
          </div>
          <div class="itemform">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required> 
          </div>
          <div class="itemform">
            <label for="empresa">Empresa:</label>
            <input type="text" name="empresa" id="empresa"> 
          </div>
          <div class="itemform">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
          </div>
          <div class="itemform">
            <label for="Mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="33" rows="5"></textarea>
          </div>
          <div class="itemform" id="boton">
            <button type="button" class="btn btn-outline-success">ENVIAR</button>
          </div>
        </form>
      </section>
      <!--FIN BLOQUE DE CONTACTO-->
</body>
</html>