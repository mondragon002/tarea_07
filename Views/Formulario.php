<?php
echo'

<form action="index.php" method="post">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre" required><br><br>

  <label for="correo">Correo:</label><br>
  <input type="email" id="correo" name="correo" required><br><br>

  <label for="comentarios">Comentarios:</label><br>
  <textarea id="comentarios" name="comentarios" rows="4" required></textarea><br><br>

  <button type="submit">Enviar</button>
</form>';
