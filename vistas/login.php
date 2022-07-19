<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="bg-img">
  <form action="../controlador/login_acceso.php" method="POST" class="container">
    <h1 style="text-align:center">Acceso</h1>

    <label for="email"><b>Email</b></label>
    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input type="text" placeholder="Enter Email" name="email" required>
     </div>
    <label for="psw"><b>Password</b></label>
    <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </div>
    <button type="submit" class="btn">Login</button>
     <p>Si deseas ingresar <a href="registrar.html">Registrate aquí</a></p>

  </form>
</div>
</body>
</html>