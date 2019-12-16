<?php ob_start(); ?>

<?php // var_dump($user)?>
<div class="view" style="background-image:url(<?= $user['img_sport']; ?>)">

<div class="container">

<h2 class="text-warning py-5" >Bienvenue dans ton arène <b><?= $user['usr_prenom']; ?></b>!</h>

</div> 



  <div class="container">
    <h5 class="text-light pt-5">Tes sportifs préférés sont ici :</h5>
    <div class="row">

      <?php foreach( $joueur as $joueurs) : ?>


          <div class="card-deck py-5 col-lg-4">

            <div class="card">
                <img class="card-img-top" src="<?= $joueurs['p_img']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $joueurs['p_nom']?> <?= $joueurs['p_prenom']?></h5>
                  <p class="card-text">Club actuel : <?= $joueurs['p_club']?></p>
                  <p class="card-text">Né(e) le : <?= $joueurs['p_birth']?></p>
                  <a class="btn btn-success" href="<?=url('player/'.$joueurs['p_id']);?>" role="button">Consulter sa fiche</a>
                </div>
              </div>    
          </div>

      <?php endforeach; ?>
        
    </div>    
 
    
    <a class="btn btn-warning center-block" href=" <?= url('allplayer')?>" role="button">Découvre les autres joueurs</a>

</div>
</div>
</div>
</div>


<h1 class="text-center py-3">Ton fil d'actualité</h1>
<div class="container">
  <div class="row">



    <div><?=$user['twitter_1']; ?><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    <div><?=$user['twitter_2']; ?><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    <div><?=$user['twitter_3']; ?><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

  </div>
</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>