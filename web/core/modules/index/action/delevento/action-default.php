<?php
$evento = EventData::getById($_GET["cod_evento"]);
$evento->del();
print "<script>window.location='index.php?view=eventos';</script>";

?>