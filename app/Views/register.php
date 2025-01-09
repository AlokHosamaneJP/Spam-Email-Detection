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
                    <h3>
                        <center>Register</center>
                    </h3>
                </div>
                <form action="" method="post">
                    <div class="card-content">
                        <?php if ($error !== "") { ?>
                            <div class="alert alert-danger">
                                <div style="text-align:center;color:red"><?php echo $error ?></div>
                            </div>
                        <?php } ?>
                        <?php if ($success !== "") { ?>
                            <div class="alert alert-success">
                                <div style="text-align:center;color:green"><?php echo $success ?></div>
                            </div>
                        <?php } ?>
                        <div class="form-field">
                            <label for="username">Full name</label>
                            <input type="text" id="username" name="fullname" required>
                        </div><br>

                        <div class="form-field">
                            <label for="username">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div><br>

                        <div class="form-field">
                            <label for="username">Mobile number</label>
                            <input type="text" id="mobileNumber" name="mobilenumber" required>
                        </div><br>


                        <div class="form-field">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div><br>

                        <div class="form-field">
         
         <a href="/">Already have account, login here</a>
          
        </div><br>


                        <div class="form-field">
                        <button class="btn-large waves-effect waves-dark" style="width:100%;">Register</button>
                        </div><br>
                    </div>

                    </form>
            </div>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>