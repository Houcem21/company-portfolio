<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/menu-page.css">
    <link rel="stylesheet" href="./css/header.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/core.css/3.0.0/css/core.min.css">
    </head>
    <!-- MENU -->
    <div class="page-responsive-menu">
        <div class="page-responsive-menu-wrapper">
            <div class="toggle-button" id="burgermenu" onClick="menuModule.Toggle()">
                <div class="line" id="nr1"></div>
                <div class="line" id="nr2"></div>
                <div class="line" id="nr3"></div>
            </div>
            <nav class="page-responsive-menu-nav">
                <ul>
                    <li class="item--lg"><a href="#">HOME</a></li>
                    <li class="item--lg"><a href="#">ABOUT US</a></li>
                    <li class="item--lg"><a href="#">PROJECTS</a></li>
                    <li class="item--lg"><a href="#">CLIENTS</a></li>
                    <li class="item--lg"><a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <script src="js/menu-page.js"></script>