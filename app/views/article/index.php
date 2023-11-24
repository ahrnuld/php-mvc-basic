<?php
include __DIR__ . '/../header.php';
?>

<h1>Manage articles</h1>    
<a href="/article/create" class="btn btn-primary">Create article</a>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Posted at</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($model as $article) {
            echo "<tr>";
            echo "<td>$article->title</td>";
            echo "<td>$article->author</td>";
            echo "<td>$article->posted_at</td>";
            echo "<td>$article->content</td>";
            echo "<td><a href='/article/edit?id=$article->id'>Edit</a>";
            echo " | ";
            echo "<a href='/article/delete?id=$article->id'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>    
</table>

<?php
include __DIR__ . '/../footer.php';
?>