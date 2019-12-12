<?php ob_start(); ?>

<h1>Bienvenue !</h1>

<p>
    A propos
</p>

<?php 
echo '<pre>';
var_dump($var); ?>


<?php $content = ob_get_clean() ?> 
<?php view('template', compact('content')); ?>