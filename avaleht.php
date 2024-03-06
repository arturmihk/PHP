<div class="container">
    <div class="row justify-content-center">
        <?php
        $postitused = file_get_contents('blog_posts.txt');
        $postitusedA = explode("\n\n", $postitused);
        foreach ($postitusedA as $postitus) {
            // Split each post into title and content based on newline character
            $parts = explode("\n", $postitus);
            if (count($parts) >= 2) {
                $title = $parts[0];
                $content = $parts[1];
                echo '
                <div class="row justify-content-center">
                <div class="col-md-3 mt-4">
                    <div class="blog-post">
                        <h2>' . $title . '</h2>
                        <p>' . $content . '</p>
                    </div>
                    <hr class="border-2 border-top" />
                </div>';
            }
        }
        ?>
    </div>
</div>
