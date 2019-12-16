<?php ob_start(); ?>




  <div class="container">
    <h1><?= $player['p_prenom']?> <?= $player['p_nom']?> </h1>
    </div>

    <div class="container">
    <div class="row">
		<div class="col-12">

    <a tabindex="0" id="shop1" target="_blank" class="stat btn btn-dark" role="button" data-toggle="popover" data-placement="bottom" data-trigger="focus" title="Accessoires" href="https://www.wilson.com/fr-fr/football/footballs/nfl/nfl-duke/the-duke-nfl-football"data-content="Profitez des meilleurs accessoires.">Accessoires de match</a>

    <a tabindex="0" id="stat" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="STAtistiques" data-content="Wahoo quel joueur exceptionnel">STATS</a>


    <a tabindex="0" id="funfact" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Funfact</a>

    <a tabindex="0" id="shopperso" class="stat btn btn-dark" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Shop perso</a>


	  <div class="row">
		  <div class="full">
	      <img src="<?= $player['p_img_hover_l']?>" class="img-fluid">
	    </div>
    </div>
  </div>





<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>

