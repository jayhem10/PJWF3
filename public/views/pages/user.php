<?php ob_start(); ?>

<?php var_dump($user)?>
<h4>Bienvenue dans ton arène <b><?= $user['usr_prenom']; ?></b>!</h4>


<div class="container">
    <h5>Tes sportifs préférés sont ici :</h5>



<div class="card-deck">

  <div class="card">
    <img class="card-img-top" src="<?= $player['player_image']; ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?= $player['player_name']?></h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a class="btn btn-success" href="<?=url('players/'.$player['player_id']);?>" role="button">Consulter sa fiche</a>
      <a class="btn btn-warning" href="<?= url('admin/delete/'.$jv['jv_id']);?>" role="button">Unfollow</a>

    
    </div>
  </div>

</div>
</div> 

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>