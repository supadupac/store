<?php
  require("db.php");

    $sql = "SELECT * FROM accounts
  ";
    $result = $db->query($sql);
    $row = $result->fetch_array();

    $username = $row["userName"];
    $password = $row["pass"];
    echo $username . "<br> ";
    echo $password;


?>
