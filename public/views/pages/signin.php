<?php ob_start(); ?>

    <div class="zoneform container">
    <?= $errors; ?>
    <br><h4>Inscris toi !</h4>
   <!-- formulaire -->
   <?= $formulaireHtml; ?>
</div>



<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>