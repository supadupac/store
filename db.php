<?php
  $db = new mysqli(
    'rogue.store.whiteoakmn.com',
    'fry_prod',
    'T3rr4C0tt4#42',
    'whiteoakmn_store_db'
  );

  if ($db->connect_error) {
    $error = $db->connect_error;
  }

  $db->set_charset('utf8');

  ?>
