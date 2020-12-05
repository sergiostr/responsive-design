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
    <link rel="stylesheet" href="assets/css/qr.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">    
    </head>
    <!-- Body -->
    <body>
        <!-- Header -->
        <header>
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
        </header>
        <!-- End Header -->
        <!-- Main Body -->
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="panel">
                    <img src="assets/media/QR-icon.png" alt="QR">
                </div>
                <p class="text-center text-light">Have a QR code?</p>
                <p class="text-center text-light">Click to scan</p>
                <button class="btn btn-danger text-center">Scan QR</button> -->
                <div class="panel">
                    <div class="detail">
                        <img  src="assets/media/QR-icon.png" alt="QR">
                        <h5 class="text-center text-light">Have a QR code?</h5>
                        <h5 class="text-center text-light">Click to scan</h5>
                    </div>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Scan QR</button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content justify-content-center">
                                <div class="container">
                                    <div class="row justify-content-center bg-dark">
                                        <div class="panels">
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
                                                <input type="submit" class="btn btn-primary" value="Login Button">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
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