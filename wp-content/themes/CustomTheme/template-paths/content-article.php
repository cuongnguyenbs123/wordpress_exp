<div class="container">
    <div class="meta mb-3">
        <img src="<?php
        the_post_thumbnail_url();
        ?>" alt="">
        <span class="date"><?php
            the_date();
            ?></span>
        <?php
        the_tags();
        ?>
        <?php
        comments_number();
        ?>
        <div class="comment-inner">
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 12,
                    'style' => 'div'
                )
            )
            ?>
        </div>
    </div>
    <?php
    the_content();
    ?>
    <?php
    comments_template();
    ?>
</div>
