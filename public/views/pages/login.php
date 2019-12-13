<?php ob_start(); ?>
  
   
    <div class="container">

    <?= $errors; ?>

    <br><h4>Accède à toutes les infos sur tes sportifs préférés</h4><br>
    <?= $formulaireHtml; ?>

</div>
   


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>