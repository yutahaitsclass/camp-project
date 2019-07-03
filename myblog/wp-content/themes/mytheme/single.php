<?php get_header();?>
<main>
    <div class="post-wrapper">
        <?php
            if(have_posts()):
                while(have_posts()):
                the_post();?>
        <div class="post-content">
            <div class="post-content_date">
                <?php echo get_the_date(); ?>
            </div>
            <div class="post-content_title">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            </div>
            <div class="post-content_body">
                <?php the_content();?>
            </div> <?php
            endwhile;
        else:
                ?>
            <p>記事はありません</p>
            <?php
            endif;
            ?>

        </div>
    </div>
</main>
<?php get_footer();?>