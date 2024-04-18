<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login y Registro</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://localhost/inicio%20y%20registro/css/q.css">
</head>
<body>
  <div class="container" id="container">

    <div class="form-container register-container">
    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
        <h1>Inicia tu registro.</h1>
        <input type="text" placeholder="Nombre completo" name="nombre_completo">
        <input type="text" placeholder="Correo Electronico" name="correo">
        <input type="password" placeholder="Contraseña" name="contraseña"
        minlength="8" maxlength ="10" required pattern = "[A-Za-z0-9]+">
        <button>Registrar</button>
        <span>or use your account</span>
        <div class="social-container">
          <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
          <a href="#" class="social"><i class="lni lni-google"></i></a>

        </div>
      </form>
    </div>

    <div class="form-container login-container">
    <form action="php/login_usuario_be.php"  method="POST" class="formulario__login">
        <h1>Iniciar Sesion</h1>
        <input type="email" placeholder="Email" name= "correo">
        <input type="password" placeholder="Password" name= "contraseña">
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <label>recuerdame</label>
          </div>
          <div class="pass-link">
            <a href="#">¿Olvidó su contraseña?</a>
          </div>
        </div>
        <button>Entrar</button></a>
        <span>o use otra cuenta</span>
        <div class="social-container">
          <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
          <a href="#" class="social"><i class="lni lni-google"></i></a>

        </div>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="title">Hola <br>Bienvenid@</h1>
          <p>Si tienes una cuenta inicia sesion</p>
          <button class="ghost" id="login">Login
            <i class="lni lni-arrow-left login"></i>
          </button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="title">¿Aun no<br>tienes cuenta?</h1>
          <p>Inicia tu registro para poder empezar</p>
          <button class="ghost" id="register">Registrar
            <i class="lni lni-arrow-right register"></i>
          </button>
        </div>
      </div>
    </div>

  </div>

  <script src="http://localhost/inicio%20y%20registro/js/sc.js"></script>

</body>
</html>