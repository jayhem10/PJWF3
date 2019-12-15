<?php ob_start(); ?>




  <div class="container">
    <h1><?= $player['p_nom']?></h1>
    </div>
<?php var_dump($player);?>




<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>