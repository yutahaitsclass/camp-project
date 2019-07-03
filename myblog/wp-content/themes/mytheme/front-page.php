<?php get_header();?>

<main>
    <div class="main-wrapper">
        <div class="slide">
            <ul class="slider">
                <li><img src="<?php bloginfo('template_directory'); ?>/image/slide1.jpg" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/image/slide3.jpg" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/image/slide4.jpg" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/image/slide5.jpg" alt=""></li>
            </ul>
        </div>
        <div class="main-content">
            <h2>黒坂オートキャンプ場5つのポイント</h2>

            <div class="main-content_images">
                <div class="main-content_image"><img src="<?php bloginfo('template_directory'); ?>/image/slide4.jpg"
                        alt=""></div>
                <div class="main-content_image">
                    <div class="two-images">
                        <div class="two-images_image"><img
                                src="<?php bloginfo('template_directory'); ?>/image/slide4.jpg" alt=""></div>
                        <div class="two-images_image"><img
                                src="<?php bloginfo('template_directory'); ?>/image/slide4.jpg" alt=""></div>
                    </div>
                </div>
                <div class="main-content_image"><img src="<?php bloginfo('template_directory'); ?>/image/slide4.jpg"
                        alt=""></div>
                <div class="main-content_image"><img src="<?php bloginfo('template_directory'); ?>/image/slide4.jpg"
                        alt=""></div>
            </div>
            <div class="main-content_fieldmap">
                <h2>フィールドマップ</h2>
                <div class="fieldmap-content">
                    <div class="fieldmap-image">
                        <img src="<?php bloginfo('template_directory'); ?>/image/fieldmap.png" alt="">
                    </div>
                    <div class="fieldmap-text">
                        <p>
                            黒坂オートキャンプ場は山の地形を生かしたキャンプ場です。そのため、場所ごとに形状が異なります。詳しくは、施設・サイト紹介ページをご覧ください。
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="front-news">
            <ul class="news-list">
                <?php query_posts('category_name=news&showposts=6'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink() ?>">
                        <div class="date">
                            <?php the_time('Y/m/d') ?>
                        </div>
                        <?php the_title(); ?>
                        <div class="news-content_excerpt">
                            <?php the_excerpt() ?>
                        </div>

                    </a>
                </li>

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </div>

</main>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- <script>
$(function() {
    $('#nav_toggle').click(function() {
        $("header").toggleClass('open');
        $("nav").fadeToggle(500);
    });

});
</script> -->
<script src="slick.min.js"></script>
<script>
$(function() {
    $('.slider').slick({
        accessibility: false,
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 1000,
        pauseOnHover: true,
        dots: true,
        fade: false,
        infinite: true,
        arrows: false,
        slidesToShow: 3,
        // centerMode: true,
        responsive: [{
            breakpoint: 780,
            settings: { //601px～1024pxでは3画像表示
                slidesToShow: 1,
                centerMode: false,
            }
        }]
    });
});
</script>
<?php get_footer();?>