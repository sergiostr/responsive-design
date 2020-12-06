<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Protein Switched Research">
    <meta name="keywords" content="HTML, CSS, PHP, XML, JavaScript">
    <meta name="author" content="Dejan Pajik">
    <title>proteinfusion.com | Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">    
    </head>
    <!-- Body -->
    <body>
        <!-- Header -->
        <nav class="navbar navbar-expand-sm fixed-top">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- Mini logo -->
                    <a href="#" >
                        <img class="mini" src="assets/media/mini-logo.png" alt="Logo">
                    </a>
                    <!-- QR code -->
                    <!-- <a class="qr-img" href="#">
                        <img class="mini" src="assets/media/QR-icon.png" alt="QR-code">
                    </a>  -->
                </li>
            </ul>
        </nav>
        <!-- End Header -->
        <!-- Main Body -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="panel bg-dark">
                    <div class="detail">
                        <h5 class="text-center text-danger">Product ID: ID</h5>
                        <h5 class="text-center text-danger">Lot ID: ID</h5>
                    </div>
                    <br>
                    <h5 class="text-center text-danger">View Datasheet</h5>
                    <form action="login.php" type="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login Button</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Main Body -->
        <!-- Footer -->
        <footer>
            <div class="container">
                <!-- Email address -->
                <div class="row email justify-content-center">
                    <a class="d-inline-block" href="mailto:info@proteinfusion.com" style="font-size: 20px">info@proteinfusion.com</a>
                </div>
            </div>
        </footer> 
        <!-- End Footer -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
    <!-- End Body -->
</html>