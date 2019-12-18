<?php ob_start(); ?>


<!-- Si l'utilisateur à une session ouverte, on affiche la liste de tous les joueurs... -->
<?php if (isset($_SESSION['user'])): ?>

        <div class="container my-5">
        <div class="row">
        <?php foreach($players as $listPlayers) : ?>

            <div class="hover1 py-3 col-lg-4">
                <a href="<?=url('player/'.$listPlayers['p_id']);?>"><img src="<?= $listPlayers['p_img_hovers'];?>" class="rounded mx-auto d-block img-fluid" alt="Responsive image" ><h2 class="titre"><?= $listPlayers['p_prenom'];?> <?= $listPlayers['p_nom'];?></h2></a>
            </div>

        <?php endforeach;?>

</div>
</div>

<!-- ...sinon on affiche le lien d'inscription sur le site car fonctionnalité seulement reservée aux inscrits -->

<?php else: ?>

<div class="text-center titre2 my-2">
<h2 class="text-light py-5 "> INSCRIS-TOI ET SUIS TES JOUEURS FAVORIS</h2>
<a class="btn btn-warning btn-lg  my-5" href="<?= url('signin') ?>" role="button">M'inscrire</a>
</div>

<?php endif; ?>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>