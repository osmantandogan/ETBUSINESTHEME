<?php get_header(); ?>

<div class="container pt-5 pb-5">

    <h1 class="pb-5"><?php single_cat_title(); ?></h1>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>

            <div class="col-md-4 mb-4">
                 <?php if(has_post_thumbnail()): ?>
                     <a class="mt-2 d-block" href="<?php the_permalink(); ?>">
                         <img src="<?php the_post_thumbnail_url();?>" class="img-fluid pt-1 pb-1">
                     </a>
                <?php endif; ?>

                <div class="row">
                    <h3>
                        <a class="title mt-2 d-block" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                </div>
            </div>
        <?php endwhile; 
        endif; ?>
    </div>
</div>

<?php get_footer(); ?>