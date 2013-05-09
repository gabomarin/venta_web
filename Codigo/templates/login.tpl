<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <style type="text/css">
     

    </style>

</head>
<body>
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Login</h2>
          <form action="index.php?modulo=estandar&action=login" method="POST">
            <fieldset>
              <div class="clearfix">
                <input id="mail" name="mail" type="email" placeholder="Email" required="required" autocomplete="on">
              </div>
              <div class="clearfix">
                <input id="pass" name="pass" type="password" placeholder="Pass" required="required">
              </div>
              <button class="btn btn-primary" type="submit">Sign in</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
</body>
</html>