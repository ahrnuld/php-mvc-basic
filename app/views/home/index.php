<?php
include __DIR__ . '/../header.php';
?>

<h1>Welcome to the MVC Blog!</h1>

<?php
foreach ($model as $article) {
?>

<h2><?= $article->title ?></h2>
<p><i><?= $article->posted_at ?></i></p>
<p><?= $article->content ?></p>

<?php
}
include __DIR__ . '/../footer.php';
?>