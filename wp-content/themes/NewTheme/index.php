<?php
get_header()
?>
<div class="container">
    <div>
        <?php
        if(have_posts()){
            while(have_posts())
            {
                get_post();
            }
        }
        ?>
    </div>
</div>
<?php
get_footer()
?>
