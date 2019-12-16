<?php ob_start(); ?>


<br>

  <div class="container">
  <div class="md-form">
  <input type="search" id="form-autocomplete-4" class="form-control mdb-autocomplete" placeholder="Rechercher un joueur">
  <button class="mdb-autocomplete-clear">
    <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="https://www.w3.org/2000/svg">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
      <path d="M0 0h24v24H0z" fill="none" />
    </svg>
  </button>
  <label for="form-autocomplete-4" class="active"></label>
</div>

</div>

<h5>Resultat pour la recherche : "<b><?= $_GET['form-autocomplete-4']; ?></b>"</h5>

<?php foreach($players as $listPlayers) : ?>


<div class="container my-5">
    <div class="hover1">
	    <a href="<?=url('player/'.$joueurs['p_id']);?>"><img src="<?= $listPlayers['p_img_hovers'];?>" class="rounded mx-auto d-block img-fluid" alt="Responsive image" style="width"><h2 class="titrelebron"><?= $listPlayers['p_prenom'];?> <?= $listPlayers['p_nom'];?></h2></a>
    </div>
</div>

<?php endforeach;?>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>