<?php ob_start(); ?>


<br>
<div class="container">
    <div class="input-group">
    <select class="custom-select" id="inputGroupSelect04">
        <option selected>Chercher un joueur</option>      
        <?php foreach($players as $listPlayers) : ?>
        <option value="2"><?= $listPlayers['p_prenom'].' '.$listPlayers['p_nom'] ?></option>
        </option>
         <?php endforeach; ?>
     
    </select>
    <div class="input-group-append">
        <button class="btn btn-outline-warning" type="button">Rechercher</button>
    </div>
    </div>
</div>


<?php foreach($players as $listPlayers) : ?>
<div class="container my-5">
    <div class="hover1">
	    <a href="<?=url('player/'.$joueurs['p_id']);?>"><img src="<?= $listPlayers['p_img'];?>" class="rounded mx-auto d-block img-fluid" alt="Responsive image" style="width"><h2 class="titrelebron"><?= $listPlayers['p_img_hovers'];?> <?= $listPlayers['p_nom'];?></h2></a>
    </div>
</div>

<?php endforeach;?>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>