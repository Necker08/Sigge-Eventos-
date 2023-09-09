<?php
if (isset($_GET['pesquisa'])) {
  $pesquisa = $_GET['pesquisa'];
  echo "Você pesquisou por: " . $pesquisa;
}
?>