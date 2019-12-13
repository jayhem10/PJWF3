<?php ob_start(); ?>

<?php // var_dump($user)?>
<div class="view" style="background-image:url(<?= $user['img_sport']; ?>)">

<div class="container">

<h2 class="text-warning py-5" >Bienvenue dans ton arène <b><?= $user['usr_prenom']; ?></b>!</h>

</div> 

<?php foreach( $joueur as $joueurs) : ?>

  <div class="container">
    <h5 class="text-light pt-5">Tes sportifs préférés sont ici :</h5>

  

        <div class="card-deck py-5">

          <div class="card">
            <img class="card-img-top" src="<?= $joueurs['p_img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $joueurs['p_nom']?></h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a class="btn btn-success" href="<?=url('players/'.$player['player_id']);?>" role="button">Consulter sa fiche</a>
              <a class="btn btn-warning" href="<?= url('admin/delete/'.$jv['jv_id']);?>" role="button">Unfollow</a>
            </div>
          </div>

          
          <div class="card">
            <img class="card-img-top" src="<?= $joueurs['p_img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $joueurs['p_nom']?></h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a class="btn btn-success" href="<?=url('players/'.$player['player_id']);?>" role="button">Consulter sa fiche</a>
              <a class="btn btn-warning" href="<?= url('admin/delete/'.$jv['jv_id']);?>" role="button">Unfollow</a>
            </div>
          </div>

          
          <div class="card">
            <img class="card-img-top" src="<?= $joueurs['p_img']; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $joueurs['p_nom']?></h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <a class="btn btn-success" href="<?=url('players/'.$joueurs['player_id']);?>" role="button">Consulter sa fiche</a>
              <a class="btn btn-warning" href="<?= url('admin/delete/'.$jv['jv_id']);?>" role="button">Unfollow</a>
            </div>
          </div>
        </div>
        </div>
</div>

      
</div> 

<?php endforeach; ?>

<div class="container">
  <h1 class="text-center py-3">Votre fil d'actualité</h1>
  <div class="row">
<div><a class="col-md-6 twitter-timeline" href="https://twitter.com/TrashTalk_fr?ref_src=twsrc%5Etfw">Tweets by TrashTalk_fr</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

<div><a class="col-md-6 twitter-timeline" href="https://twitter.com/TrashTalk_fr?ref_src=twsrc%5Etfw">Tweets by TrashTalk_fr</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

</div>
</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>