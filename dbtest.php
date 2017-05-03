
<?php
try {
  require_once 'db.php';
}  catch (Exception $e) {
    $error = $e->getMessage();
}
?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <title>Testing PHP Connection</title>
</head>
<body>
  <h1>Connecting with MySQLi</h1>
  <?php if (isset($error)) {
    echo "<p>$error</p>";
  } else {
    echo "<p>Connection successful.</p>";
  } ?>

  <?php
    $sql = 'SELECT name, email FROM testingtable
      ORDER BY name';
      $result = $db->query($sql);

      while ($row = $result->fetch_assoc()) { ?>

          <?php echo $row['name']; echo " - "?>
          <?php echo $row['email']; echo "<br/>"?>

      <?php } ?>
      <?php $db->close(); ?>
</body>
</html>
