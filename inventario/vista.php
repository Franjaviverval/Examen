<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
  </head>

  <body>
  <header class="header">
    <h1 class="title">Panel de inventario</h1>
  </header>

  <main>

  <section class="info">
    <article class="info__stock">
      <h2 class="info__title">Total Stock</h2>
      <p class="info__text"> <?php echo round($valor, 2 )?> €</p>
    </article>

    <article class="info__categorias">
      <h2 class="info__title">Categorías</h2>
      <p class="info__text"> <?php $categorias ?> </p>     
    </article>
  </section>

  <section class="productos">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Categoría</th>
          <th>Precio</th>
          <th>Stock</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($productos as $producto): ?>
        <tr>
          <td> <?php  echo $producto->getId();?> </td>
          <td> <?php  echo $producto->getNombre(); ?></td>
          <td> <?php  echo $producto->getCategoria(); ?></td>
          <td> <?php  echo $producto->getPrecio(); ?></td>
          <td> <?php  echo $producto->getStock(); ?></td>
          <td> <?php  echo $producto->getEstado(); ?></td>          
        <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
  </section>

  </main>

  </body>
</html>