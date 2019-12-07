<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>hola</h1>
    <ul>
    <?php foreach ($productos as $producto): ?>
      <li><?=$producto->nombre?></li>
    <?php endforeach; ?>

    </ul>
  </body>
</html>
