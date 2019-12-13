<?php ob_start(); ?>

<div class="container">


<h2>Contact</h2><br>
<?php if (!$formValid): ?>

    <?= $errors; ?>
    <!-- formulaire -->
    <?= $formulaireHtml; ?>

<?php else: ?>

    <p>Votre message à bien été envoyé !</p>

<?php endif; ?>

</div> 

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>