<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login-box">
    <h2>Inicio de sesión</h2>
    <form action="token.php" method="POST">
      <label for="email">Correo electrónico:</label>
      <input type="email" name="email" required>
      <button type="submit">Enviar token</button>
    </form>
  </div>
<div class="container">
    <h2>Registros de Usuarios</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Correo</th>
          <th>Token</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
	<?php
		include "modelo/conexion.php";
		$sql = $conexion->query(" select * from persona ");
		while ($datos = $sql->fetch_object() ){ ?>
	<tr>
          <td>001</td>
          <td>ejemplo@correo.com</td>
          <td>
            <button class="btn edit">Editar</button>
            <button class="btn delete">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>002</td>
          <td>usuario@dominio.com</td>
          <td>
            <button class="btn edit">Editar</button>
            <button class="btn delete">Eliminar</button>
          </td>
        </tr>

	<?php
		}
	?>
              </tbody>
    </table>
  </div>
</body>
</html>

