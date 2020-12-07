<?php
session_start();
session_unset();
session_destroy();
header('Location: /beast/php/home.php');
exit();
