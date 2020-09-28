<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <link rel="stylesheet" href="/css/style.css">
  <title>Crear un archivo JSON</title>
</head>
<body>

<section class="contenedor">
  <h1>Crea tu JSON</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <input type="number" name="edad" placeholder="Edad">
        <input type="submit" value="Enviar">
    </form>
</section>

<script src="js/main.js"></script>
</body>
</html>