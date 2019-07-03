<?php get_header("2"); ?>

<main>
      <div class="post-wrapper">
            <?php
            if(have_posts()):
                while(have_posts()):
                the_post();?>
                 <div class="post-content">
                
                 <div class="post-content_body">
                 <?php the_content();?>
                 </div>
                </div>
            <?php
            endwhile;
        else:
                ?>
                <p>ページはありません</p>
            <?php
            endif;
            ?>
            
        </div>
</main>
<script src="<?php echo get_template_directory_uri(); ?>/jquery.js"></script>
    <script>
        $(function () {
            $('#nav_toggle').click(function () {
                $("header").toggleClass('open');
                $("nav").fadeToggle(500);
            });

        });
    </script>
<?php get_footer();?>

      