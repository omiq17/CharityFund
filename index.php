<?php require_once "connect.php";
if(!empty($_SESSION['user'])){
	header('Location: admin.php');
  die();
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Charity Fund</title>
    <link rel="icon" href="images/fav.png" type="image/png">
    <!-- Bootstrap Core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <div class="container" style="margin-top: 5%;">
    <img src="images/logo.png" alt="Charity Fund">
    <?php
    if(isset($_SESSION['invalid']) && !empty($_SESSION['invalid'])){
      echo "<p style='color:red; text-align:center; font-size:17px;'>
       Wrong Username or Password.</p>";
       unset($_SESSION['invalid']);
    }
     ?>
      <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-primary">
              <div class="panel-heading">Login</div>
              <div class="panel-body">

              <!-- Login Form -->
              <form role="form" method="post" action="loginCheck.php">

              <!-- Username Field -->
                  <div class="row">
                      <div class="form-group col-xs-12">
                      <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Username:</label>
                          <div class="input-group">
                              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <!-- Content Field -->
                  <div class="row">
                      <div class="form-group col-xs-12">
                          <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Password:</label>
                          <div class="input-group">
                              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                              <span class="input-group-btn">
                                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                              </span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <!-- Login Button -->
                  <div class="row">
                      <div class="form-group col-xs-4">
                          <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                  </div>

              </form>
              <!-- End of Login Form -->

          </div>
      </div>
  </div>
</body>

</html>
