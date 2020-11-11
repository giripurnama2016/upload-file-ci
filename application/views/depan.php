<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Google Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/styles.min.css?h=149bcb86f63a745480deb3b8261e0376">
</head>

<body style="height: 100%;">
    <div class="login-clean" style="height: 100%;padding: 189px;">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-social-reddit-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
            <a class="btn btn-primary" role="button" style="width: 240px;background-color: rgb(85,71,244);margin: -1px;" href="<?=base_url();?>index.php/google_login/login">Google Login</a><a class="forgot"
                href="#">Forgot your email or password?</a></form>
    </div>
    <div class="footer-basic" style="height: 0px;padding: 0px;">
        <footer>
            <p class="copyright" style="padding: 10px;">Giri Purnama Channel © 2020</p>
        </footer>
    </div>
    <div></div>
    <div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>