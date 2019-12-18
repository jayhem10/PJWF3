<?php $titre = 'BeTheNext'; ?>

<?php ob_start(); ?>

<div class="hover">
    <img src="public/img/index2.jpg" style="width:100%" class="img-fluid" alt="Responsive image"><h2 style="font-size:5vw;" class="titreindex ">ENTER THE GAME</h2>
</div>


<div class="text-center titre2 ">
<h2  style="font-size:4vw;" class="py-5 text-warning"> ENTRE DANS LE GAME POUR SUIVRE LES PLUS GRANDS SPORTIFS DE TON EPOQUE</h2>
</div>

<!-- LE CAROUSEL -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/img/LBJ_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/img/CR7_0.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/img/TB_1.jpg" alt="Third slide">
    </div>
  </div>
</div>

<?php if (isset($_SESSION['user'])): ?>
<div class="text-center titre2 my-2">
<h2 style="font-size:4vw;" class="text-warning py-5 "> TU FAIS PARTIE DE LA COMMUNAUTE !</h2>
<a class="btn btn-warning btn-lg  my-5" href="<?= url('user') ?>" role="button">J'accède à mes joueurs !</a>
</div>

<?php else: ?>
  <div class="text-center titre2 my-2">
<h2 style="font-size:4vw;" class="text-warning py-5 "> INSCRIS-TOI ET SUIS TES JOUEURS FAVORIS</h2>
<a class="btn btn-warning btn-lg  my-5" href="<?= url('signin') ?>" role="button">Je m'inscris</a>
</div>

  <?php endif; ?>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>

