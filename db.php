<?php

 $config = parse_ini_file('../config.ini');

 $db = new mysqli(
   $config['hostname'],
   $config['username'],
   $config['password'],
   $config['dbname']);

  if ($db->connect_error) {
    $error = $db->connect_error;
  }

  $db->set_charset('utf8');

  ?>
