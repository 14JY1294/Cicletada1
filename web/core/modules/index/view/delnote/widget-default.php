<?php

$category = NoteData::getById($_GET["id"]);

$category->del();
Core::redir("./index.php?view=notes");


?>