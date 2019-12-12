<?php ob_start(); ?>

<h1>Bienvenue dans ton arène <b><?= $_POST['usr_prenom']?></b>!</h1>

<?= $formulaireHtml; ?>

<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>