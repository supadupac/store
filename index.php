<?php
  include("db.php");
  require_once("functions.php");

  if (isset($_POST["login"])) {

    session_start();

    $sql = "SELECT userName, pass, eMail FROM accounts
      WHERE userName = '$username', pass = '$password'";
      if ($result = $db->query($sql)) {
      $row_cnt = $result->num_rows;
    }

    echo $row_cnt;

      if ($row_cnt = 1) {
        $_SESSION['username'] = $username;
        redirect_to("dbtest.php");
        $message = "Logging in as {username}";
      } else {
        redirect_to("login.php");
      }
    } else {
    $message = "Please log in";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>White Oak Designs</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Nav -->
    <nav class="navbar navbar-toggleable-xl navbar-inverse bg-primary">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">WhiteOakStore</a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Begin Login Content -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Modal Login" aria-hidden="true">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form id="login" action="index.php" method="post">
  					<input type="text" name="username" placeholder="Username">
  					<input type="password" name="password" placeholder="Password">
  					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>

				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>

    <!-- Body Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h1 class="jumbotext">Welcome to the Store</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <center>
          <!-- Login Link -->
          <a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-primary btn-block" id="login-btn">Login</a>
        </center>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <center>
            <br>
                <?php echo $row_cnt ?>
            </center>
        </div>
      </div>
    </div>
    <br />
    <br />

  </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- http://tether.io/ Library to help with positioning for Bootstrap 4.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>
