<?php ob_start(); ?>



<?php foreach($players as $listPlayers) : ?>
<div class="container my-5">
    <div class="hover1">
	    <a href="<?=url('player/'.$joueurs['p_id']);?>"><img src="<?= $listPlayers['p_img'];?>" class="rounded mx-auto d-block img-fluid" alt="Responsive image" style="width"><h2 class="titrelebron"><?= $listPlayers['p_img_hovers'];?> <?= $listPlayers['p_nom'];?></h2></a>
    </div>
</div>

<?php endforeach;?>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>