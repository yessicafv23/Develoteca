<?php
// Si hay un envio de tipo POST va a redireccionar a inicio
if($_POST){
    header('Location:inicio.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<main class="form-signin">
    <div class="text-center">
    <img class="mb-4" src="../img/user-icon.png" alt="" width="70" height="70">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
    </div>

  <form action="inicio.php" method="POST">

    <div class="form-group">
    <label>Usuario</label>
      <input type="text" class="form-control" name="usuario" placeholder="@example" required>
    </div>
    <div class="form-group">
    <label>Password</label>
      <input type="password" class="form-control" name="password" placeholder="***********" required>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>

  </form>
</main>
</body>
</html>