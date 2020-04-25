<?php
session_start();
unset($_SESSION['usernamelogin']);
session_destroy();
header("Location: index_guest.php");