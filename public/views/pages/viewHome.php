<?php $titre = 'BeTheNext'; ?>

<?php ob_start(); ?>

<div class="hover">
    <img src="public/img/index2.jpg" style="height:100vh width:100%" class="img-fluid" alt="Responsive image"><h2 class="titreindex">ENTER THE GAME</h2>
</div>


<div class="text-center titre2 ">
<h2 class="py-5 text-light"> ENTRE DANS LE GAME POUR SUIVRE LES PLUS GRANDS SPORTIFS DE TON EPOQUE</h2>
</div>

<!-- LE CAROUSEL -->
<div class="container-fluid bg-light">
<div class="container">

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="public/img/LBJ_1.jpg" class="d-block w-100" alt="First Slide">
          <div class="carousel-caption">
            <h5 class="text-light">LEBRON JAMES</h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="public/img/CR7_0.jpg" class="d-block w-100" alt="Second Slide">
          <div class="carousel-caption">
            <h5 class="text-primary">CRISTIANO RONALDO</h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="public/img/SRW_1.jpg" class="d-block w-100" alt="Third Slide">
          <div class="carousel-caption">
            <h5 class="text-warning">SERENA WILLIAMS</h5>
            <p></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>
</div>

<div class="text-center titre2 bg-dark my-2">
<h2 class="text-light py-5"> INCRIS-TOI ET SUIS TES JOUEURS FAVORIS</h2>
<a class="btn btn-warning btn-lg my-5" href="<?= url('signin') ?>" role="button">M'inscrire</a>
</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>