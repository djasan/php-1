<?php
session_start();
session_destroy();
header("Location: /");
exit();
require 'views/index.view.php';
?>
