<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      {{ csrf_field() }}
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" value="" placeholder="Universidad del Norte" />
      <br />
      <label for="direccion">Dirección</label>
      <input type="text" name="direccion" id="direccion" value="" placeholder="Via Puerto" />
      <br />
      <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
  </body>
</html>
