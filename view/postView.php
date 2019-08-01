<?php ob_start(); ?>

<div class="container jumbotron jumbotron-fluid col-lg-8 col-md-12 col-sm-12 col-xs-12 d-flex flex-wrap justify-content-center ">
    <h1 class="display-4 card-header col-12 text-center"> <a id="back" href="/projet_oc"><i class="fas fa-arrow-left"></i></a> <?= $post['title'] ?> </h1>
    <img src=" <?= $post['picture'] ?> " alt="Illustration du chapitre" class="pic-container">
    <p class="text-container"> <?= $post['content'] ?> </p>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>