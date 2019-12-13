<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<p>
    A propos
</p>

<?php 
echo '<pre>';
var_dump($players);

foreach($players as $player): ?>

<li> <?=$player['usr_prenom'];?>



<?php endforeach; ?>

?>

<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>