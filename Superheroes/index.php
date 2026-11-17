<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  
<form action="login.php" method='post'>
<label for="user">Usuario</label>
<input type="text" name=user id=user>
<label for="password">Contraseña</label>
<input type="password" name=password id=password>

<input type='hidden' name='action' value='login'>
<button type="submit">Acceder</button>
</form>

</body>
</html>