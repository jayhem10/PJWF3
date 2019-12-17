<?php ob_start(); ?>



  <div class="container">
    
    <h1><?= $player['p_prenom']?> <?= $player['p_nom']?> </h1>
</div>



    <a tabindex="0" id="shop1" target="_blank" class="stat btn btn-dark" role="button" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Accessoires" href="<?= $shopsport['lienshop']?>"data-content="Profitez des meilleurs accessoires.">Accessoires de match</a>

    <a tabindex="0" id="stat" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="STAtistiques" data-content="Wahoo quel joueur exceptionnel">STATS</a>


    <a tabindex="0" id="funfact" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Funfact</a>

    <a tabindex="0" id="shopperso" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Shop perso</a>


	  
	

	      <img src="<?= $player['p_img_hover_l']?>" style="width: auto, max-height: 50%"; class="full img-fluid" >
</div>
  

  <div class="container-fluid  bg-dark text-light block-center my-5">
  <div class="row">
  <img src="<?= $player['code_club']?>" class="col-12 col-md-6 mx-auto" style="max-width: 30%; height:auto;" alt="">
  <h2 class="col-12 col-md-6 my-auto text-center"><?= $player['p_club']?></h2> 
    </div>
    </div>
    <a class="btn btn-warning" href="<?= url('allplayer') ?>" role="button"><i class="fas fa-angle-double-left"></i> Retour aux joueurs</a>




<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>

