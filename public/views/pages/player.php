<?php ob_start(); ?>

<?php if (isset($_SESSION['user'])): ?>

<div class="container-fluid">
    <h1 class="bg-dark text-light text-center mb-5"><?= $player['p_prenom']?> <?= $player['p_nom']?> </h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 ">

    <a tabindex="0" id="shop1" target="_blank" class="d-none d-lg-block d-xl-block stat btn btn-dark" role="button" data-toggle="popover"  data-placement="bottom" data-trigger="focus" href="<?= $shopsport['lienshop']?>">Accessoires de match</a>


    <a tabindex="0" id="stat" class="d-none d-lg-block d-xl-block stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-html="true" data-placement="bottom" title="Saison 2019/2020" data-content="<?=$info?>">Statistiques</a>


    <a tabindex="0" id="funfact" class="d-none d-lg-block d-xl-block stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-html="true" data-placement="bottom" title="" data-content="<?= $player['Funfact']?>">Fun Fact</a>
    
    
    <div class="d-none d-lg-block d-xl-block col-md-6 col-lg-6 text-center mx-auto my-2">
    <a href="<?= $player['insta']?>" target="_blank" id="insta" class="stat btn btn-dark"><i class="fab fa-instagram display-4"></i></a>
    <a href="<?= $player['twitter']?>" target="_blank" id="twitter" class="stat btn btn-dark"><i class="fab fa-twitter-square display-4"></i></a>
    </div>





  <div class="row">
          <div class="full mx-auto">
          <img src="<?= $player['p_img_hover_l']?>" class="img-fluid">
        </div>
    </div>
  </div>

  <div class="container-fluid  bg-dark text-light block-center my-5">
        <div class="row">
        <a tabindex="0"  target="_blank" class="my-auto d-lg-none d-xl-none stat btn btn-dark" role="button" data-toggle="popover"  data-placement="bottom" data-trigger="focus" href="<?= $shopsport['lienshop']?>">Accessoires de match</a>

        <a tabindex="0"  class="my-auto  d-lg-none d-xl-none  stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-html="true" data-placement="bottom" title="Saison 2019/2020" data-content="<?=$info?>">Statistiques</a>

        <a tabindex="0"  class="my-auto  d-lg-none d-xl-none stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-html="true" data-placement="bottom" title="" data-content="<?= $player['Funfact']?>">Fun Fact</a>
        
        <a href="<?= $player['insta']?>" target="_blank"  class="pl-3 d-lg-none d-xl-none stat btn btn-dark"><i class="fab fa-instagram display-4"></i></a>
        <a href="<?= $player['twitter']?>" target="_blank" class="d-lg-none d-xl-none stat btn btn-dark"><i class="fab fa-twitter-square display-4"></i></a>
    </div>
  </div>



  
  <div class="container-fluid  bg-dark text-light block-center my-5">
        <div class="row">
          <img src="<?= $player['code_club']?>" class="col-12 col-md-6 mx-auto" style="max-width: 30%; height:auto;" alt="lebron">
          <h2 class="col-12 col-md-6 my-auto text-center"><?= $player['p_club']?></h2> 
        </div>
  </div>

  <a class="btn btn-warning" href="<?= url('allplayer') ?>" role="button"><i class="fas fa-angle-double-left"></i> Retour aux joueurs</a>


  <?php else: ?>

      <div class="text-center titre2 my-2">
      <h2 class="text-light py-5 "> INSCRIS-TOI ET SUIS TES JOUEURS FAVORIS</h2>
      <a class="btn btn-warning btn-lg  my-5" href="<?= url('signin') ?>" role="button">M'inscrire</a>
      </div>

<?php endif; ?>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>

