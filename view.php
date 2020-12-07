<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Protein Switched Research">
    <meta name="keywords" content="HTML, CSS, PHP, XML, JavaScript">
    <meta name="author" content="Dejan Pajik">
    <title>proteinfusion.com | View</title>
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
                <h6 class="text-light">UserID: <span class="text-secondary">john@gmail.com</span></h6>
            </div>
            <div class="user-item">
                <h6 class="text-light">ProductId: <span class="text-secondary">p1</sapn></h6>
                <h6 class="text-light">LotId: <span class="text-secondary">lot3</sapn></h6>
            </div>
            <button type="button" class="btn signout-btn" onclick="closeNav()"><b class="text-light">Sign out</b></button>
        </div>
        <div id="mySidenav2" class="sidenav2">
            <div class="alarm-item">
                <div class="row justify-content-between">
                    <h6 class="text-light">New Catalog Spring 2021</h6>
                    <img src="assets/media/bell_purple.png" alt="">
                </div>
                <p class="text-secondary small">Complete catalog of Protein Switches is now available Request it Today</p>
            </div>
            <div class="alarm-item">
                <div class="row justify-content-between">
                    <h6 class="text-light">Agilent MS Columns-New!</h6>
                    <img src="assets/media/bell_purple.png" alt="">
                </div>
                <p class="text-secondary small">Mass Spectrometry Columns Availabel.
                Full range of 10um with Agilent Certificatioin.
                </p>
            </div>
            <button type="button" class="btn signout-btn" onclick="closeNav2()"><b class="text-light">Return</b></button>
        </div>
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- User img -->
                    <a class="user-img" href="javascript:void(0)" onclick="openNav1()">
                        <img class="user" src="assets/media/avatar12.png" alt="logout">
                    </a>
                    <!-- Mini logo -->
                    <a href="#" >
                        <img class="logo" src="assets/media/mini-logo.png" alt="Logo">
                    </a>
                    <!-- Logout button -->
                    <a class="qr-img" href="javascript:void(0)" onclick="openNav2()">
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
                        <div class="container-fluid details">
                            <p class="text-danger">ProductID: ID, LotID: ID</p>
                            <p class="text-secondary">file name</p>
                        </div>
                        <button class="ml-auto btn pdf_view" data-id="specs1.pdf">View</button>
                    </div>
                    <div class="panel-item d-flex bg-dark">
                        <img src="assets/media/pdf.png" alt="pdf">
                        <div class="container-fluid details">
                            <p class="text-danger">ProductID: ID, LotID: ID</p>
                            <p class="text-secondary">file name</p>
                        </div>
                        <button class="ml-auto btn pdf_view" data-id="specs2.pdf">View</button>
                    </div>
                    <div class="panel-item d-flex bg-dark">
                        <img src="assets/media/pdf.png" alt="pdf">
                        <div class="container-fluid details">
                            <p class="text-danger">ProductID: ID, LotID: ID</p>
                            <p class="text-secondary">file name</p>
                        </div>
                        <button class="ml-auto btn pdf_view" data-id="specs2.pdf">View</button>
                    </div>
                    <div class="panel-item d-flex bg-dark">
                        <img src="assets/media/pdf.png" alt="pdf">
                        <div class="container-fluid details">
                            <p class="text-danger">ProductID: ID, LotID: ID</p>
                            <p class="text-secondary">file name</p>
                        </div>
                        <button class="ml-auto btn pdf_view" data-id="specs2.pdf">View</button>
                    </div>
                </div>
                <div class="panel bg-dark">
                    <div class="detail">
                        <embed id="view" src="" type="application/pdf" width="100%" style="overflow: hidden" /> 
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
            function openNav1() {
                document.getElementById("mySidenav").style.width = "80%";
            }

            function openNav2() {
                document.getElementById("mySidenav2").style.width = "80%"
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }

            function closeNav2() {
                document.getElementById("mySidenav2").style.width = "0";
            }

            $(document).ready(function(){
                $(".pdf_view").click(function(){
                    var id = $(this).data("id");
                    console.log(id);
                    var path = "root/specs/p1/lot3/" + id;
                    $("#view").attr("src", path);
                    var $this = $(this);
                    $this.addClass("view");
                    $this.toggleClass('view');
                    $(".pdf_view").removeAttr('style');
                    $(".pdf_view").text("View");
                    if($this.hasClass('.viewing')){
                        $this.text('View');			
                    } else {
                        $this.text('Viewing');
                        
                        $this.css('background', '#946c94');
                        $this.css('opacity', '0.6');
                    }
                    });
                });
        </script>
    </body>
    <!-- End Body -->
</html>
