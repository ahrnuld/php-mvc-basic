<?php
include __DIR__ . '/../nav.php';
?>

<h1>Articles!</h1>

<?php
foreach ($model as $article) {
?>

<h2><?= $article->getTitle() ?></h2>
<p><i><?= $article->getPosted_at() ?></i></p>
<p><?= $article->getContent() ?></p>

<?php
}
include __DIR__ . '/../footer.php';
?>