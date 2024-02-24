<?php

echo "VIEW - Página Dashboard!<br>";
echo $this->data . " " . $_SESSION['user_name'] . "!<br>";
echo "<a href='" . URL . "logout/index'>Sair</a><br>";
