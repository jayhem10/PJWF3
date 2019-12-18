<?php ob_start(); ?>


<div class="view"  id="hautpage" style="background-image:url(<?= $sport['img_sport']; ?>)">

<div class="container">
<h2 class="text-warning py-5" >Bienvenue dans ton arène <b><?= $user['usr_prenom']; ?></b>!</h2><br>
<h5 class="text-light pt-5">Tes sportifs préférés sont ici :</h5>
</div> 

  <div class="container">
    <div class="row">

<!-- affichage des sportifs sur des cartes -->
    <?php foreach($player as $fav): ?>
          <div class="card-deck py-3 col-lg-4">
            <div class="card">
                <img class="card-img-top" style="width : auto; height : 250px;" src="<?= $fav['p_img']; ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?= $fav['p_nom']?> <?= $fav['p_prenom']?> <img style ="width : 35px; float: right; margin-right: auto "  src="https://laendercode.net/img/flag-icon-css/flags/4x3/<?= $fav['code_pays'];?>.svg"/></h5>
                  <p class="card-text">Club actuel : <?= $fav['p_club']?><img style ="width : 35px; float: right; margin-right: auto "  src="<?= $fav['code_club'];?>"/></p>
                  <p class="card-text">Né(e) le : <?= $fav['p_birth']?></p>
                  <a class="btn btn-success" href="<?=url('player/'.$fav['p_id']);?>" role="button">Consulter sa fiche</a>
                </div>
              </div>  
          </div>
    <?php endforeach; ?>  
   
    <a class="btn btn-warning mx-auto" href=" <?= url('allplayer')?>" role="button">Découvre les autres joueurs</a>

</div>
</div>
</div>
</div>

<h1 class="text-center py-3">Ton fil d'actualité</h1>
<div class="container">
  <div class="row">
    <div class="col-lg-4"><?=$sport['twitter_1']; ?><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    <div class="col-lg-4"><?=$sport['twitter_2']; ?><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    <div class="col-lg-4"><?=$sport['twitter_3']; ?><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
  </div>
</div>


<div class="container">
  <div class="row">
    <a class="btn btn-warning mx-auto my-5" href="#hautpage" role="button">Retourne en haut de page</a>
  </div>
</div>
<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>