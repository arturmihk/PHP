<div class="container">
    <div class="row justify-content-center">
        <?php

        if (file_exists('blog_posts.txt')) {
            $postitused = file_get_contents('blog_posts.txt');
            $postitusedA = explode("\n\n", $postitused);
            foreach ($postitusedA as $postitus) {

                $parts = explode("\n", $postitus);
                if (count($parts) >= 2) {
                    $title = htmlspecialchars($parts[0]); 
                    $content = htmlspecialchars($parts[1]); 
                    echo '
                    <div class="col-md-3 mt-4">
                        <div class="blog-post">
                            <h2>' . $title . '</h2>
                            <p>' . $content . '</p>
                        </div>
                        <hr class="border-2 border-top" />
                    </div>';
                }
            }
        } else {
            echo "No posts found.";
        }
        ?>
    </div>
</div>
