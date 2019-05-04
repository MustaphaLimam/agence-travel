
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Camel Tours</title>

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
                        <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                                </li>
                                <a class="nav-link" href="explore.php">Explorer <span class="sr-only"></a>
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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Reservation du circuit</h4>
                    </div>
                <div class="reserv-form">
            <form action="saveform.php" method="POST">
                <div class="form-group">
                      <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputCiv">Civilite</label>
        <select class="form-control"  name="sexe" required="required" placeholder="Sexe">
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                    </select>
                    </div>
            <div class="form-group col-md-5">
              <label for="inputNom">Nom</label>
              <input type="text" class="form-control" name="inputNom" placeholder="Nom" required>
            </div>
            <div class="form-group col-md-5">
              <label for="inputPrenom">Prenom</label>
              <input type="text" class="form-control" name="inputPrenom" placeholder="Prenom" required>
            </div>
            
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="inputEmail" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputTel">Tel</label>
              <input type="number" class="form-control" name="inputTel" placeholder="Tel" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Addresse</label>
            <input type="text" class="form-control" name="inputAddress" placeholder="Adresse" required>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputState">Gouvernorat</label>
              <select id="inputState" class="form-control">
                <option selected>Gouvernorat</option>
                <option value="Ariana">Ariana</option>
                 <option value="Beja">Beja</option>
                 <option value="Ben Arous">Ben Arous</option>
                 <option value="Bizerte">Bizerte</option>
                 <option value="Gabes">Gabes</option>
                 <option value="Gafsa">Gafsa</option>
                 <option value="Jendouba">Jendouba</option>
                 <option value="Kairouan">Kairouan</option>
                 <option value="Kasserine">Kasserine</option>
                 <option value="Kebili">Kebili</option>
                 <option value="Kef">Kef</option>
                 <option value="Mahdia">Mahdia</option>
                 <option value="Mannouba">Manouba</option>
                 <option value="Medenine">Medenine</option>
                 <option value="Monastir">Monastir</option>
                 <option value="Nabeul">Nabeul</option>
                 <option value="Sfax">Sfax</option>
                 <option value="Sidi Bouzid">Sidi Bouzid</option>
                 <option value="Siliana">Siliana</option>
                 <option value="Sousse">Sousse</option>
                 <option value="Tataouine">Tataouine</option>
                 <option value="Tozeur">Tozeur</option>
                 <option value="Tunis">Tunis</option>
                 <option value="Zaghouan">Zaghouan</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputZip">Code Postal</label>
              <input type="text" class="form-control" id="inputZip" required>
            </div>
          </div>
          

                    <div class="form-row">  
                        <div class="form-group col-md-6">
                            <label for="inputState">Moyen de transport</label>
                        <select class="form-control" name="inputMoyT">
                                        <option value="car">Car</option>
                                        <option value="jeep">Jeep</option>
                                        <option value="avion">Avion</option>
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputCIN">CIN</label>
                          <input type="number" class="form-control" name="inputCIN" placeholder="CIN" required>
                        </div>

                    </div>
                    <div class="form-row">
                    <div class="form-control form-group col-md-6">
                        <label for="date_from">De</label>
                        <input type="date" name="inputDateD"/>
                        <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> 
                    
                    </div>
                    <div class="form-control form-group col-md-6">
                        <label for="date_to">A</label>
                        <input type="date" name="inputDateA"/>
                        <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> 
                    </div>
              </div>
                    <div id="form-control customselected form-group">
                        <label>Personnes</label>
                        <span class="modify-qty plus" onClick="Tang()"><i class="zmdi zmdi-chevron-up"></i></span>
                        <input type="number" name="member" id="member" value="1" min="1" max="5" class="nput-text qty text">
                        <span class="modify-qty minus" onClick="Giam()"><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                        <input class="btn reserv-submit" type="submit" value="Reserver"/>
                    
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" ></i> by <a href="https://www.linkedin.com/in/limam-mustapha-selim-25877b155/" target="_blank">Mustapha Limam</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
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