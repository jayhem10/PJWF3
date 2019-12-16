<?php ob_start(); ?>




  <div class="container">
    <h1><?= $player['p_prenom']?> <?= $player['p_nom']?> </h1>
    </div>

    <div class="container">
    <div class="row">
		<div class="col-12">
      <a id='stat' class="btn btn-secondary" target="_blank" data-toggle="tooltip" data-placement="top" href="https://www.wilson.com/fr-fr/football/footballs/nfl/nfl-duke/the-duke-nfl-football" title="">
 Ballon du match
</a>

	  <div class="row">
		  <div class="full">
	      <img src="<?= $player['p_full']?>" class="img-fluid">
	    </div>
    </div>
  </div>





<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>

