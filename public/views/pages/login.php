<?php ob_start(); ?>
  
   
<div class="zoneform container">

    <?= $errors; ?>

    <br><h4>Connecte toi pour accéder à toutes les infos sur tes sportifs préférés</h4><br>
    <?= $formulaireHtml; ?>

</div>

   


<?php $content = ob_get_clean() ?> <?php view('template', compact('content')); ?>