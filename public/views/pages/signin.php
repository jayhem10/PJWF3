<?php ob_start(); ?>

<h1>Connexion</h1>

    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formulaireHtml; ?>


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>