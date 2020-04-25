<?php
  // include "./session.class.php";
  session_save_path("/data/sessions");
  session_regenerate_id();
  session_start();

  session_create_id();
  echo session_save_path();
  echo session_id();
?>