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

  

    <div><a class="col twitter-timeline" href="https://twitter.com/TrashTalk_fr?ref_src=twsrc%5Etfw">Tweets by TrashTalk_fr</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

    <div><a class="col twitter-timeline" href="https://twitter.com/NBAFRANCE?ref_src=twsrc%5Etfw">Tweets by NBAFRANCE</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

    <div><a class="col twitter-timeline" href="https://twitter.com/NBAextra?ref_src=twsrc%5Etfw">Tweets by NBAextra</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>

    <div><a class="col twitter-timeline" href="https://twitter.com/FantasyLabsNBA?ref_src=twsrc%5Etfw">Tweets by FantasyLabsNBA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    
  </div>
</div>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>