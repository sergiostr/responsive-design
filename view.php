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
    <link rel="stylesheet" href="assets/css/view.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">    
    </head>
    <!-- Body -->
    <body>
        <!-- Header -->
        <div id="mySidenav" class="sidenav">
            <div class="user-item d-flex">
                <img class="avatar" src="assets/media/avatar12.png" alt="user">
                <p class="text-light">UserID: john@gmail.com</p>
            </div>
            <div class="user-item">
                <p class="text-light">ProductId: id</p>
                <p class="text-light">LotId: id</p>
            </div>
            <button type="button" class="btn btn-outline-light signout-btn" onclick="closeNav()"><b class="text-light">Sign out</b></button>
        </div>
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- User img -->
                    <a class="user-img" href="javascript:void(0)" onclick="openNav()">
                        <img class="user" src="assets/media/avatar12.png" alt="logout">
                    </a>
                    <!-- Mini logo -->
                    <a href="#" >
                        <img class="logo" src="assets/media/mini-logo.png" alt="Logo">
                    </a>
                    <!-- Logout button -->
                    <a class="qr-img" href="#">
                        <img class="mini" src="assets/media/bell.png" alt="logout">
                    </a> 
                </li>
            </ul>
        </nav>
        <!-- End Header -->
        <!-- Main Body -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="inline panel-view">
                    <div class="panel-item d-flex bg-dark">
                        <img src="assets/media/pdf.png" alt="pdf">
                        <div class="container">
                            <p class="text-danger">ProductID: 1, LotID: 3</p>
                            <p class="text-light">file name</p>
                        </div>
                        <button class="ml-auto btn btn-outline-light" id="pdf" data-product="1" data-lot="3">view</button>
                    </div>
                    <div class="panel-item d-flex bg-dark">
                        <img src="assets/media/pdf.png" alt="pdf">
                        <div class="container">
                            <p class="text-danger">ProductID: ID, LotID: ID</p>
                            <p class="text-light">file name</p>
                        </div>
                        <button class="ml-auto btn btn-outline-light">view</button>
                    </div>
                    <div class="panel-item d-flex bg-dark">
                        <img src="assets/media/pdf.png" alt="pdf">
                        <div class="container">
                            <p class="text-danger">ProductID: ID, LotID: ID</p>
                            <p class="text-light">file name</p>
                        </div>
                        <button class="ml-auto btn btn-outline-light">view</button>
                    </div>
                </div>
                <div class="panel bg-dark">
                    <div class="detail">
                        <embed src="root/specs/p1/lot3/1.pdf" type="application/pdf" width="100%" style="overflow: hidden" /> 
                    </div> 
                </div>
            </div>
            
        </div>
        <!-- End Main Body -->
        <!-- Footer -->
        <!-- <footer>
            <div class="container"> -->
                <!-- Email address -->
                <!-- <div class="row email justify-content-center">
                    <a class="d-inline-block" href="mailto:info@proteinfusion.com" style="font-size: 20px">info@proteinfusion.com</a>
                </div>
            </div>
        </footer>  -->
        <!-- End Footer -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script>
            function openNav() {
            document.getElementById("mySidenav").style.width = "80%";
            }

            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </body>
    <!-- End Body -->
</html>