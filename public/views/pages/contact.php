<?php ob_start(); ?>

<div class="contactmain mt-3 container">


<h2>Contact</h2><br>

<!-- Si le formulaire de contact est bien rempli, alors on envoi message bien envoyé, sinon affichage d'erreur -->
<?php if (!$formValid): ?>

    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formulaireHtml; ?>
    </div>

<?php else: ?>

    <p>Votre message à bien été envoyé !</p>

<?php endif; ?>




<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>