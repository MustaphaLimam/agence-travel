
<!DOCTYPE html>
<html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="description" content="">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

                        <!-- Title -->
                        <title>Reservation du circuit</title>

                        <!-- Favicon -->
                        <link rel="icon" href="img/core-img/favicon.ico">

                        <!-- Core Stylesheet -->
                        <link href="style.css" rel="stylesheet">

                        <!-- Responsive CSS -->
                        <link href="css/responsive/responsive.css" rel="stylesheet">

                    </head>

                    <body>
                    <!-- Preloader -->
                    <div id="preloader">
                        <div class="dorne-load"></div>
                    </div>

                    <!-- ***** Search Form Area ***** -->
                    <div class="dorne-search-form d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="search-close-btn" id="closeBtn">
                                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                                    </div>
                                    <form action="#" method="get">
                                        <input type="search" name="caviarSearch" id="search" placeholder="Rechercher votre destination">
                                        <input type="submit" class="d-none" value="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ***** Header Area Start ***** -->
                    <header class="header_area" id="header">
                        <div class="container-fluid h-100">
                            <div class="row h-100">
                                <div class="col-12 h-100">
                                    <nav class="h-100 navbar navbar-expand-lg">
                                        <a class="navbar-brand" href="home.php"><img src="img/core-img/logo.png" alt=""></a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                                        <!-- Nav -->
                                        <div class="collapse navbar-collapse" id="dorneNav">
                                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
                                                </li>
                                               
                                                <li class="nav-item">
                                                    <a class="nav-link" href="listing.php">Destinations</a>
                                                </li>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                            <!-- Search btn -->
                                            <div class="dorne-search-btn">
                                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Rechercher</a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ***** Header Area End ***** -->

                    <!-- ***** Breadcumb Area Start ***** -->
                    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)"></div>
                    <!-- ***** Breadcumb Area End ***** -->

                    <!-- ***** Listing Destinations Area Start ***** -->
                    <section class="dorne-listing-destinations-area section-padding-100-50">
                       <?php
require_once'condb.php';
include 'server.php';
$idc = $_GET['Id'];

    $sql= " SELECT * from circuit;";
    $res= mysqli_query($con, $sql) or die("Erreur Requete: $sql");
    $row= mysqli_fetch_array($res);

    $sql1= " SELECT * from reservation";
    $res1= mysqli_query($con, $sql1) or die("Erreur Requete: $sql");
    $row1= mysqli_fetch_array($res1);

  
?>
                        <div class="container">
                            <div class="row">

                                <div class="col-12">
                                    <div id="printableArea" >
                                    <div  class="section-heading dark text-center">
                                        <span></span>
                                        <h4>Reservation du circuit <?php echo $row['Cname']; ?></h4>
                                    </div>
                                    <div class="reserv-form">
                                        
                                            <div class="form-group">
                                                <div class="form-row">
                                                
                                                <div class="form-group col-md-6">
                                                        <p for="inputUsername">Username: <?php echo $_SESSION['username']; ?></p>
                                                      
                                                    </div>

                                                
                                                    <div class="form-group col-md-6">
                                                        <p for="inputState">Moyen de transport: <?php echo $row1['MoyenT']; ?></p>
                                            
                                                    </div>
                                                    

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-control form-group col-md-6">
                                                        <p for="date_from">De: <?php echo $row1['datedep']; ?></p>
                                                       
                                                    </div>
                                                    <div class="form-control form-group col-md-6">
                                                        <p for="date_to">A: <?php echo $row1['datearr']; ?></p>

                                                    </div>
                                                </div>
                                                <div id="form-control customselected form-group">
                        <p>Personnes: <?php echo $row1['nombrepe']; ?></p>

</div>
</div>
</div>
</div>
                        <button class="btn reserv-submit" onclick="Printer('printableArea')" value="Print">Print</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
</div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" ></i> by <a href="" target="_blank">Khalil Kraiem And Mustapha Limam</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>