<?php get_header();?>
<main>
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
    <div class="blog-content_wrapper">
        <?php if(has_post_thumbnail()): ?>
        <div class="blog-content">

            <div class="blog-content_image">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('index_thumbnail'); ?>
                <?php else: ?>
                <img src="<?php bloginfo('template_directory'); ?>/image/camp-image.jpg" alt="">
                <?php endif; ?>
            </div>
            <div class="blog-content_area">
                <div class="blog-content_title">
                    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                </div>
                <div>
                    <?php the_time('Y.m.d') ?> <span class="blog-cat"><?php the_category('｜') ?></span>
                </div>



                <div class="blog-content_passenger">

                    <?php the_content('続きを読む'); ?>

                </div>


            </div>
        </div>
        <?php endif; ?>
    </div>


    <?php endwhile;?>
    <?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>


    <?php else : ?>
    <div class="error">
        <p>お探しの記事は見つかりませんでした。</p>
    </div>
    <?php endif; ?>
</main>
<?php get_footer();?>