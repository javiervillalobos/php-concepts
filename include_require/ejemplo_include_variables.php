<?php
  echo 'Este texto es generado por ejemplo_include_variables.php';
?>

<br>
<br>

<hr>
<?php
  $variable_fuera_de_include = "Fuera de include";
  include './includes/include_variables.php';
?>
<hr>
