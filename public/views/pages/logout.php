<?php ob_start(); ?>

<p>Vous avez bien été déconnecté</p>

<h1>Connexion à votre compte</h1>
<?php if (!$formValid): ?>

    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formulaireHtml; ?>

<?php else: ?>

   

<?php endif; ?>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>