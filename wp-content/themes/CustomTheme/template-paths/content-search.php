
<?php

get_header();

?>

<p class="mt-3 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">

        </div>
    </div>
    <a class="carousel-control-prev"  role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next"  role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="theme-bg-dark py-5 mt-4 text-center">
    <h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
    <form class="signup-form form-inline justify-content-center pt-3">
        <div class="form-group">
            <label class="sr-only" for="semail">Your email</label>
            <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail"
                   placeholder="Enter email">
        </div>
        <button id="testClick" class="btn btn-primary">Subscribe</button>
    </form>
</section>
<div class="row row-cols-1 mt-4 row-cols-md-2">
    <div class="col mb-4">
        <div class="card">
            <div class="card-body">
                <article class="content px-3 py-5 p-md-5" id="post-<?php the_ID(); ?>">
                    <?php
                    if ( have_posts() ){
                        while( have_posts()){
                            the_post();
                            get_template_part('template-paths/content','search');
                        }
                    }
                    the_posts_pagination();
                    ?>
                </article>
            </div>
        </div>
    </div>


    <?php get_footer(); ?>

<?php
