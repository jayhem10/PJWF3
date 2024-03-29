<?php $titre = 'BeTheNext'; ?>

<?php ob_start(); ?>


<!-- Header -->
<header class="bg-secondary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">The Team</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Membre 1 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://cdn.discordapp.com/attachments/633638511706243083/656791975957364749/46520533_10217263026397813_7676473066221731840_o.jpg" style="width : auto; height : 350px;" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Jérôme Brovedani</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Membre 2 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://cdn.discordapp.com/attachments/633638511706243083/656793899691540520/IMG_47211.jpg" style="width : auto; height : 350px;" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Jérémy Noble</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Membre 3 -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://cdn.discordapp.com/attachments/633638511706243083/656796359067697162/image0.jpg" style="width : auto; height : 350px;" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Yassine Fassi</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>

  <!-- /.row -->
  </div>
</div>
<!-- /.container -->

<?php $content = ob_get_clean(); ?>

<?php view('template', compact('content')); ?>