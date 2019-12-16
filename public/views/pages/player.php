<?php ob_start(); ?>




  <div class="container">
    <h1><?= $player['p_nom']?> <?= $player['p_prenom']?></h1>
    </div>

  <div class="container">
	  <div class="row">
		  <div class="full">
	      <img src="<?= $player['p_full']?>" class="img-fluid">
	    </div>
    </div>
  </div>





<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>