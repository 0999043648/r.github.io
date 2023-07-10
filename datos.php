<!DOCTYPE html>
<?php
$conexion = mysqli_connect('localhost','root','','dato',"3307");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">   
     
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
       <!-- Site Metas --> 
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
  
      <!-- Site Icons -->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
      <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Site CSS -->
      <link rel="stylesheet" href="style.css">
      <!-- ALL VERSION CSS -->
      <link rel="stylesheet" href="css/versions.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css">
  
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>



  <body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <div class="mus">
			<img src="images/lode-img.png" alt="" />
		  </div>
		  <span class="loading" data-name="Loading">StyleBarber Loading</span>
		</div>
              
   

    </div><!-- end loader -->
    <!-- END LOADER -->


	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .nav-link {
      position: relative;
      color: #000;
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    
    .nav-link.atras::before {
      content: "\f30a";
      font-family: "Font Awesome 6 Free";
      font-weight: 1000;
      font-size: 20px;
      margin-right: 70px;
    }
    
    .nav-link.cerrar::before {
      display: none;
    }
  </style>
  
  
  <script>
    function mostrarAlerta1() {
      var confirmacion = confirm("¿Estás seguro de que deseas ir atras?");
      if (confirmacion) {
       
        window.location.href = "sesion.html";
      } else {
        
        window.location.href = "datos.html";
      }
    }
  </script>
  <div class="collapse navbar-collapse" id="navbars-rs-food">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a class="nav-link" href="sesion.html">Inicio</a></li>
      <li class="nav-item active"><a class="nav-link" href="validaciones.html">Validacion</a></li>
      <li class="nav-item active"><a class="nav-link" href="datos.php">Datos</a></li>
  
    </ul>
  </div>
					
  <li class="nav-item active"><a class="nav-link cerrar"onclick="mostrarAlerta()"><img src="images/cerrar.png" width="30" height="30"><h15>(Cerrar sesión)</h15> </a></li>
					
            
                          
                          <script>
                            function mostrarAlerta() {
                              var confirmacion = confirm("¿Estás seguro de que deseas cerrar sesión?");
                              if (confirmacion) {
                                alert("Has cerrado sesión exitosamente");
                                window.location.href = "index.html";
                              } else {
                               
                                window.location.href = "datos.php";
                              }
                            }
                          </script>

                       



					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
  <div id="home" class="parallax">
		<div id="full-width" class="owl-carousel owl-theme home-hero">
			<div class="text-center item slider-01 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>Barberia Mr.Santander</strong><br>
						en la Mana</h2>
					</div>
				</div>
			</div>
			<div class="text-center item slider-02 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>Barberia Mr.Santander</strong><br>
						en la Mana</h2>
					</div>
				</div>
			</div>
			<div class="text-center item slider-03 display-table overlay">
				<div class="display-table-cell">
					<div class="big-tagline text-center">
						<h2><strong>Barberia Mr.Santander</strong><br>
						en la Mana</h2>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end section -->
	
	
							</div>
							<div class="t-bottom"></div>
						</div><!--widget -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

							</div>
							


							

							<!-- end testimonial -->
						</div><!-- end carousel -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->  
    </div>
  
	
	
				
    
        <div class="copyrights">
          <div class="container text-md">
            <header id="home" class="header">
        
                <div class="overlay text-white text-center"> 
                   
                   
                      
                    <style>
                        .movable-heading {
                          position: absolute;
                          top: 35%;
                          left: 50%;
                          transform: translate(-50%, -50%);
                        }
                      </style>
                      
                      

                      





                 
              </body>
                </div>
        </header><br>
       <center>
        <h2 class="mt-4">FORMULARIO DE DATOS</h2>
        <center>
  <form name="form" action="registro.php" method="post" onsubmit="return validateCedula(this.cedula.value)"                      
   class="mt-4">
   <div class="form-group">
     <label for="cedula">Cédula:</label><br>
                            <input type="text" maxlength="10" minlength="10" class="" id="cedula" name="cedula" required onblur="validateCedula(this.value)">
                              <p id="mensaje">
                              <script>
                         var cedulaInput = document.getElementById("cedula");
                         cedulaInput.addEventListener("input", function () {
                           var cedula = this.value;
                           var repeatedDigits = cedula.match(/(\d)\1{3,}/); // Verificar si hay más de 3 dígitos consecutivos iguales
                           if (repeatedDigits) {
                             this.setCustomValidity("Ingrese una cédula válida.");
                           } else {
                             this.setCustomValidity(""); // Restablecer la validez del campo
                           }
                         });
                       </script>
                        </div>
   
                        </center>
    </div>
    <div class="form-group">
    
      <center>
      <label for="nombres">Nombres:</label><br>                      
                      <input type="text" id="nombre" name="name" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+(\s[a-zA-ZñÑáéíóúÁÉÍÓÚ]+)?" class="" title="Debe contener solo letras y un espacio" /><br><br>
                      <script>
                        var lastnameInput = document.getElementById("nombre");
                        lastnameInput.addEventListener("input", function () {
                          var lastnameValue = this.value;
                          var repeatedCharacters = lastnameValue.match(/(\S)\1{1,}/); // Verificar si hay más de 2 caracteres consecutivos iguales
                          if (repeatedCharacters) {
                            this.setCustomValidity("No se permiten más de 2 caracteres consecutivos iguales.");
                          } else {
                            this.setCustomValidity(""); // Restablecer la validez del campo
                          }
                        });
                      </script>
                      </center>
                      
    
    </div>
    <div class="form-group">
      <center>
    <label for="apellido">Apellidos:</label><br>
                      <input type="text" id="apellido" name="apellido" required pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]+(\s[a-zA-ZñÑáéíóúÁÉÍÓÚ]+)?" class="" title="Debe contener solo letras y un espacio" /><br><br>
                      <script>
                        var lastnameInput = document.getElementById("apellido");
                        lastnameInput.addEventListener("input", function () {
                          var lastnameValue = this.value;
                          var repeatedCharacters = lastnameValue.match(/(\S)\1{2,}/); // Verificar si hay más de 2 caracteres consecutivos iguales
                          if (repeatedCharacters) {
                            this.setCustomValidity("No se permiten más de 2 caracteres consecutivos iguales.");
                          } else {
                            this.setCustomValidity(""); // Restablecer la validez del campo
                          }
                        });
                      </script>
</center>
       
</div>
    <div class="form-group">  
      <center>
      <label for="genero">Género:</label>
      <select id="genero" name="genero" class="" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
      </center>
    </div>
    <div class="form-group">
      <center>
      <label for="usuario">Usuario:</label><br>
      <input type="text" id="usuario" name="usuario" class="" required>
      </center>
    </div>
    <div class="form-group">
      <center>
    <label for="contrasena">Contraseña:</label><br>
      
    <input type="password" id="contrasena" maxlength="8" minlength="8" name="password" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*\W).{8}$" title="La contraseña debe contener al menos una letra mayúscula, un número, un carácter especial y tener una longitud de 8 caracteres." class="" required>
    </center>
    </div>
    <center>
    <button type="submit" class="btn btn-primary">Registrar</button>
    <input type="reset" class="btn btn-danger" value="Limpiar">
    </center>
    </div>
    
    
  </form>
  </center>
  <script src="cedula.js" type="text/javascript"></script>
</div>
        
          </div>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end section -->

 
  
  <center>
    <title>MOSTRAR DATOS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
</head>
<body>
    <h3>MOSTRAR DATOS</h3>
    <body background="bifu.jpg">
  
        <br>
        <table class="table table-bordered"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>GENERO</th>
                    <th>CEDULA</th>
                    <th>PASSWORD</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="SELECT * from clientes";
                $result= mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_clientes'] ?></td>
                    <td><?php echo $mostrar['usuario'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['apellido'] ?></td>
                    <td><?php echo $mostrar['genero'] ?></td>
                    <td><?php echo $mostrar['cedula'] ?></td>
                    <td><?php echo $mostrar['password'] ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </center>
    </body>
</html>

  <div class="copyrights">
    <div class="container">
      <div class="footer-distributed">
      
      </div>
    </div><!-- end container -->
  </div><!-- end copyrights -->
</div>
  
<div id="testimonials" class="parallax section db parallax-inner-bg">
  <div class="container">
    <div class="section-title row text-center">
      <div class="col-md-8 offset-md-2">
        <h3>Barberia Mr.Santander</h3>
      </div>
    </div><!-- end title -->

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="testi-carousel owl-carousel owl-theme">                                
          <div class="testimonial clearfix">
            <div class="testi-meta">
              <i class="fa fa-quote-right"></i>
              <h4> <small>- Kevin Santander</small></h4>
            </div>
            <div class="desc">
              <h3>LA MANA</h3>
              <p class="lead">Direccion: Carlos Lozada y Gonzalo Albarracin esquina, La Mana, Ecuador </p>
              <p class="lead">Telefono: 095 924 9313 </p>
            </div>
            <!-- end testi-meta -->
          </div>
          <title>MOSTRAR DATOS</title>
</head>

          <head>

    

          <!-- end testimonial -->
        </div><!-- end carousel -->
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
</div><!-- end section -->

<div class="copyrights">
  <div class="container">
    <div class="footer-distributed">
    
    </div>
  </div><!-- end container -->
</div><!-- end copyrights -->
</div>



  <!-- ALL JS FILES -->
  <script src="js/all.js"></script>
<script src="js/responsive-tabs.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>
</body>



</html>

