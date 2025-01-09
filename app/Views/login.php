<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

</head>

<body>
  <div class="section"></div>
  <div class="row">
  <div class="col s12 m8 l4 offset-m2 offset-l4">
    <div class="card">

      <div class="card-action teal lighten-1 white-text">
        <h3><center>Login</center></h3>
      </div>
    <form action="" method="post">
      <div class="card-content">
      <?php if ($error !== "") { ?>
                            <div class="alert alert-danger">
                                <div style="text-align:center;color:red"><?php echo $error ?></div>
                            </div>
                        <?php } ?>
                       
        <div class="form-field">
          <label for="username">Email</label>
          <input type="email" id="email" name="email" required>
        </div><br>

        <div class="form-field">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div><br>

        <div class="form-field">
         
         <a href="/register">Don't have account, register here</a>
          
        </div><br>

        <div class="form-field">
          <button class="btn-large waves-effect waves-dark" style="width:100%;">Login</button>
        </div><br>
      </div>
      </form>
    </div>
  </div>
</div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>