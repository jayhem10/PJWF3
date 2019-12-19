<!DOCTYPE html>
<html>
<head>
  <title>Be The Next</title>
</head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 

    <link href="https://fonts.googleapis.com/css?family=Heebo|Mansalva|Questrial&display=swap" rel="stylesheet">

     <link href="<?= css_url('style.css'); ?>" rel="stylesheet">

<!--------------------------------------------------- HEADER --------------------------------------------------->
<header>
  <body>
      <nav class="navbar navbar-expand-sm bg-light navbar-light" >
        <a href="<?= url('') ?>" class="navbar-brand">Be The Next</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a href="<?= url('aboutus') ?>" class="nav-link" >About Us</a>
            </li>
            <li class="nav-item">
              <a href="<?= url('contact') ?>" class="nav-link">Contact</a>
            </li>

            <!-- Si user connecté, affiche les liens suivants -->
            <?php if (isset($_SESSION['user'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= url('user') ?>">Mon arène</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= url('allplayer') ?>">Star Center</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-danger" href="<?= url('logout') ?>" role="button">Logout</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                <a class="btn btn-primary" href="<?= url('login') ?>" role="button">Login</a>
                                <a class="btn btn-warning" href="<?= url('signin') ?>" role="button">Sign In</a>
                                                          </li>
                            <?php endif; ?>
            
          </ul>
        </div>
      </nav>
  </header>

  <!--------------------------------------------------- CONTENU DES PAGES --------------------------------------------------->


        <?php
            // contenu de la page
            echo $content; 
        ?>


<!-- Footer -->
<footer class="page-footer bg-light font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Depuis toujours</h5>
        <p id="depuistjs">Fan de sports depuis notre plus jeune âge nous avons décidé de concrétiser notre passion autour de ce site. On espère qu'il te plaira! </br>
        Enjoy! </p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
        <style type="text/css">
          </style>
          <li>
            <p>
              <a href="#!">Nos sponsors</a>
            </p>
          </li>
          <li>
            <p>
              <a href="<?= url('aboutus') ?>">About Us</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
            <p>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Adresse</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i>30 rue Louis Loucheur 69007 LYON
              </p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> bethenext@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> 06 24 56 88 55</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i>  04 74 52 88 74</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

     

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Suivez-nous</h5>

        <!-- Facebook -->
        <a class="social" href="#"><i class="fab fa-facebook-square display-3"></i></a>
        <!-- Twitter -->
        <a class="social" href="#"><i class="fab fa-twitter-square display-3"></i></a>
        <!-- Pinterest-->
        <a class="social" href="#"><i class="fab fa-pinterest-square display-3"></i></a>
        <!-- Instagram -->
        <a class="social" href="#"><i class="fab fa-instagram display-3"></i></a>

      </div>

</footer>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
      <script src="https://kit.fontawesome.com/bda8027245.js" crossorigin="anonymous"></script>
      <script src="<?= js_url('script.js'); ?>"></script>
    </body>
</html>
