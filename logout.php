<?php
session_start();
$_session['nome']= null;
session_destroy();
header('location:index.php')
?>