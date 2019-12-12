<?php ob_start(); ?>

<h1>Bienvenue dans ton espace <b><?= $_POST['usr_prenom']?></b>!</h1>

    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formulaireHtml; ?>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>