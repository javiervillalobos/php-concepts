<?php
  echo 'Este texto es generado por ejemplo_include_no_existe.php';
?>

<br>
<br>

<hr>
<?php
  include './includes/include_que_no_existe.php';
?>
<hr>

<br>
<br>

En este caso, como el archivo a incluir no existe, no se genera contenido entre las líneas de arriba.

