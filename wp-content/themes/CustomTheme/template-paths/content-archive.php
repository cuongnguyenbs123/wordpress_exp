<div class="container">
    <img src="<?php
    the_post_thumbnail_url('thumbnail');
    ?>" alt=""
         class="mr-3 img-fluid post-thumb d-none d-md-flex"
    >
    <?php
    the_excerpt();
    ?>
    <a href="<?php
    the_permalink();
    ?>" class="more-link">More link</a>
</div>
