<?php $titre = 'BeTheNext'; ?>

<?php ob_start(); ?>

<div class="hover">
    <img src="public/img/index2.jpg" style="width:100%" class="img-fluid" alt="Responsive image"><h2 style="font-size:5vw;" class="titreindex ">ENTER THE GAME</h2>
</div>


<div class="text-center titre2 ">
<h2  style="font-size:4vw;" class="py-5 text-light"> ENTRE DANS LE GAME POUR SUIVRE LES PLUS GRANDS SPORTIFS DE TON EPOQUE</h2>
</div>

<!-- LE CAROUSEL -->
<div class="container-fluid bg-light">


  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" id="ball1" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1" id="ball1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2" id="ball1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
          <img src="public/img/LBJ_1.jpg" class="d-block w-100" alt="First Slide">
          <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h5 class="text-light">LEBRON JAMES</h5>
          </div>
        </div>
        <div class="carousel-item">
        <div class="view">
          <img src="public/img/CR7_0.jpg" class="d-block w-100" alt="Second Slide">
          <div class="mask rgba-black-strong"></div>
          </div>
          <div class="carousel-caption">
            <h5 class="text-primary">CRISTIANO RONALDO</h5>
            </div>
          </div>
        <div class="carousel-item">
        <div class="view">
          <img src="public/img/TB_1.jpg" class="d-block w-100" alt="Third Slide">
          <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h5 class="text-info">TOM BRADY</h5>
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

<div class="text-center titre2 my-2">
<h2 style="font-size:4vw;" class="text-light py-5 "> INSCRIS-TOI ET SUIS TES JOUEURS FAVORIS</h2>
<a class="btn btn-warning btn-lg  my-5" href="<?= url('signin') ?>" role="button">Je m'inscris</a>
</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>