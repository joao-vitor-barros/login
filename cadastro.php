<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Criando uma conta </title>

  <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
  <h3>Cadastro</h3><br>
  <form name="Cadastro" action="cadastrar.php" method="POST">
    <label>Email: </label>
    <input type="email" name="Email" placeholder="Email" required autofocus size="30"><br>
    <label>Senha: </label>
    <input type="password" name="Senha" placeholder="Senha" required size="45"><br>
    <br>
    <input type="submit" name="enviar" value="Enviar">
  </form>
</body>
</html>