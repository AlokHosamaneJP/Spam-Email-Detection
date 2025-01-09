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
                        <center>Spam Detector</center>
                    </h3>
                </div>
                <form action="" method="post">
                    <div class="card-content">
                        <?php if ($output == 0) { ?>
                            <div class="alert alert-danger">
                                <div style="text-align:center;color:green"><?php echo "Email is not a spam" ?></div>
                            </div>
                        <?php } ?>
                        <?php if ($output == 1) { ?>
                            <div class="alert alert-success">
                                <div style="text-align:center;color:red"><?php echo "Email is Spam" ?></div>
                            </div>
                        <?php } ?>
                        <div class="form-field">
                            <label for="username">Subject</label>
                            <input type="text" id="subject"  name="subject" required>
                        </div><br>

                        <div class="form-field">
                            <label for="username" required>Body</label>
                            <textarea type="text" id="body" class="materialize-textarea" name="body" rows="10"></textarea>
                        </div><br>

                        <div class="form-field">
                            <button type="submit" class="btn-large waves-effect waves-dark" style="width:100%;">Predict</button>
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