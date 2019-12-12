<?php ob_start(); ?>



    <?= $errors; ?>
    <!-- formulaire -->

    <div class="container">
    <h1>Connexion</h1>
  <?= $formulaireHtml; ?>

    <h1>Inscris-toi</h1>
    <?= $formulaireHtml1; ?>

</div>
   


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>