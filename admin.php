<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $post = "Title: $title\nContent: $content\n\n";

    file_put_contents('blog_posts.txt', $post, FILE_APPEND | LOCK_EX);

    header("Location: too.php?leht=admin");
    exit();
}
?>

<div class="container mt-5">
        <h1>Add Blog Post</h1>
        <form action="too.php?leht=admin" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>
</body>