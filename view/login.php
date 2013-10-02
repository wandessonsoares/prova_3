<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <style>
    body{
      background: #8F9294;
    }
    #content {
      font-family: helvetica, sans-serif;
      text-align: center;
      width: 30%;
      margin: auto;
      border: 1px solid black;
      border-radius: 10px;
      background: #CFD2D4;
    }
    #content input:not([type=submit]), #content textarea {
      width:90%;
    }
    .control-group{
        margin: auto;
        text-align: center;
    }
    .control-group{
        margin-right: 30px; 
    }
    .btn btn-primary{
        margin-right: 50px; 
    }
  </style>
</head>

<body>
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <a class="brand" href="#">Prova 3</a>
        <ul class="nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
      </div>
    </div>

    <div id="content">
      <h2>Fazer Login</h2>
      <form class="form-horizontal" action="handle_login.php" method="POST">
        <div class="control-group">
          <label class="control-label" for="inputLogin">Login</label>
          <div class="controls">
            <input type="text" name="login" placeholder="Login">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="inputPassword">Password</label>
          <div class="controls">
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
    
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
        </div>
      </form>
  </div>

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>