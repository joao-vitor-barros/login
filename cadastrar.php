<?php
$email = $_POST['Email'];
$senha = $_POST['Senha'];
$strcon = mysqli_connect('localhost','root','','cadastro') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO login VALUES ";
$sql .= "(default ,'$email', '$senha')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Sua conta foi criada com sucesso!";
echo "<a href='index.php'>Clique aqui para fazer login</a><br>";

?>