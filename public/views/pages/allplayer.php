<?php ob_start(); ?>


<div class="container my-5">
<div class="row">
<?php foreach($players as $listPlayers) : ?>

    <div class="hover1 py-3 col-lg-4">
	    <a href="<?=url('player/'.$listPlayers['p_id']);?>"><img src="<?= $listPlayers['p_img_hovers'];?>" class="rounded mx-auto d-block img-fluid" alt="Responsive image" style="width"><h2 class="titrelebron"><?= $listPlayers['p_prenom'];?> <?= $listPlayers['p_nom'];?></h2></a>
    </div>

<?php endforeach;?>

</div>
</div>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>