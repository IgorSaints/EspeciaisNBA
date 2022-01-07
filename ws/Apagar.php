<?php
//require_once; da pagina que vai ta com os objetos, gets e sets e adaptar os campos
echo $_GET["id"];
Bebida::deletar($_GET["id"]);

header("Location: ../index.php?msg=Item detetado");
?>