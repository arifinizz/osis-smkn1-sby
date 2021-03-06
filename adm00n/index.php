<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Kodinger">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-md-center h-100">
        <div class="card-wrapper">
          <div class="brand">
            <img src="img/logo.png">
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Login</h4>
              <form action="proses-login.php" method="POST">

                <div class="form-group">
                  <label for="username">Username</label>

                  <input id="username" type="text" class="form-control" name="username" value="" required autofocus>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>

                  <input id="password" type="password" class="form-control" name="password" required data-eye>
                </div>

                <div class="form-group">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>

                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-primary btn-block" name="login">
                    Login
                  </button>
                </div>
                <div class="margin-top20 text-center">
                  <a href="../index.php"><span>Back to Index Page</span></a>
                  <!-- Don't have an account? <a href="register.html">Create One</a> -->
                </div>
              </form>
            </div>
          </div>
          <div class="footer">
            Copyright &copy; 2018 &mdash; SMKN 1 SURABAYA
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/my-login.js"></script>
</body>
</html>
