<?php ob_start(); ?>

<div class="container jumbotron jumbotron-fluid col-lg-8 col-md-12 col-sm-12 col-xs-12 d-flex flex-wrap justify-content-center ">
    <h1 class="display-4 card-header col-12 text-center"> <a id="back" href="/projet_oc"><i class="fas fa-arrow-left"></i></a> <?= $post['title'] ?> </h1>
    <img src=" <?= $post['picture'] ?> " alt="Illustration du chapitre" class="pic-container">
    <p class="text-container"> <?= $post['content'] ?> </p>

    <h3>Commentaires</h3>

    <?php
    while ($comment = $comments->fetch()) {
    ?>
        <p class="text-container col-11">
            <strong><?= htmlspecialchars($comment['author']) ?></strong><br><a href="#" title="Signaler ce commentaire"><i class="fas fa-exclamation-circle"></i></a>
            <?= htmlspecialchars($comment['comment']) ?>
            <i class="com-date"><?= $comment['comment_date_fr'] ?></i>
        </p>
    <?php
    }
    ?>

    <form class="col-12" action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <h3 class="col-11">Postez un commentaire</h3>
      <div class="form-group col-lg-2">
        <label for="author">Auteur</label>
        <input type="text" class="form-control" name="author" id="author" placeholder="Entrez un nom">
    </div>
    <div class="form-group col-11">
        <label for="comment">Commentaire</label>
        <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Votre commentaire"></textarea>
    </div>
    <div class="col-11">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
    </form>

</div>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>