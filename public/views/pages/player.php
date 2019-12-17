<?php ob_start(); ?>

<div class="container-fluid">
    <h1 class="bg-dark text-light text-center mb-5"><?= $player['p_prenom']?> <?= $player['p_nom']?> </h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">


    <a tabindex="0" id="shop1" target="_blank" class="stat btn btn-dark" role="button" data-toggle="popover" data-placement="bottom" data-trigger="focus" href="<?= $shopsport['lienshop']?>">Accessoires de match</a>


    <a tabindex="0" id="stat" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Saison 2019/2020" data-content="<?=$info?>">Statistiques</a>


    <a tabindex="0" id="funfact" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Funfact</a>
    
    
    <div class="col-md-6 col-lg-6 text-center mx-auto my-2">
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
  <img src="<?= $player['code_club']?>" class="col-12 col-md-6 mx-auto" style="max-width: 30%; height:auto;" alt="">
  <h2 class="col-12 col-md-6 my-auto text-center"><?= $player['p_club']?></h2> 
    </div>
    </div>
    <a class="btn btn-warning" href="<?= url('allplayer') ?>" role="button"><i class="fas fa-angle-double-left"></i> Retour aux joueurs</a>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>

