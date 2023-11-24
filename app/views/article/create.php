<?php
include __DIR__ . '/../header.php';
?>
<h1>Create article</h1>
<form method="POST">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="author">Author:</label><br>
    <input type="text" id="author" name="author"><br>
    <label for="content">content:</label><br>
    <textarea id="content" name="content" rows="10" cols="80"></textarea><br><br>
    <input type="submit" value="Create">
</form>
<?php
include __DIR__ . '/../footer.php';
?>