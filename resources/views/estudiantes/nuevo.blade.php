<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      {{ csrf_field() }}
      <label for="nombres">Nombres</label>
      <input type="text" name="nombres" id="nombres" value="" placeholder="Universidad del Norte" />
      <br />
      <label for="apellidos">Apellidos</label>
      <input type="text" name="apellidos" id="apellidos" value="" placeholder="Universidad del Norte" />
      <br />
      <label for="universidad">Univerisda</label>
      <input type="number" name="universidad" id="universidad"/>
      <br />
      <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
  </body>
</html>
