<?php $titre = 'BeTheNext'; ?>

<?php ob_start(); ?>


<div class="text-center titre2 ">
<h2 class="py-5 text-light"> Patience nos réseaux sociaux sont en cours de construction ! &#128521 </h2>
</div>

<div class="text-center titre2 my-2">
<img src="https://s3-eu-west-1.amazonaws.com/sc-files.pjms.fr/p/pjms/130/000/270/235/440de9dcd4e6497da7b272c440ce640f.png" alt="">
</div>

<?php if (isset($_SESSION['user'])): ?>

  <div class="text-center titre2 my-2">
<a class="btn btn-warning btn-lg  my-5" href="<?= url('') ?>" role="button">Retour à la page d'acceuil</a>
</div>

<div class="text-center titre2 my-2">
<a class="btn btn-success btn-lg  my-5" href="<?= url('user') ?>" role="button">J'accède à mes joueurs</a>
</div>

<?php else: ?>

<div class="text-center titre2 my-2">
<a class="btn btn-warning btn-lg  my-5" href="<?= url('signin') ?>" role="button">M'inscrire</a>
<a class="btn btn-success btn-lg  my-5" href="<?= url('signin') ?>" role="button">Me connecter</a>
</div>

<div class="text-center titre2 my-2">
<a class="btn btn-primary btn-lg  my-5" href="<?= url('') ?>" role="button">Retour à la page d'acceuil</a>
</div>

<?php endif; ?>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>