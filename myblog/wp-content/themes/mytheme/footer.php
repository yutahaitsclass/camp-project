  <footer>
            <div class="footer-wrapper">
                <div class="footer-content">

                    <div class="footer-content_main">
                        <div class="content-main_info">
                            <p>黒坂オートキャンプ場</p>
                            <p>090-7186-8931</p>
                            <p>〒406-0852 山梨県笛吹市鏡川町大黒坂</p>
                        </div>
                        <div class="content-main_sns">
                            <ul>
                                <li><a href="#"><p><img width="40" src="<?php echo get_template_directory_uri(); ?>/image/twitter.png" alt=""> </p></a></li>
                                <li><a href="#"><p><img width="40" src="<?php echo get_template_directory_uri(); ?>/image/youtube.png" alt=""> </p></a></li>
                                <li><a href="#"><p><img width="40" src="<?php echo get_template_directory_uri(); ?>/image/facebook.png" alt=""></p></a></li>
                                <li><a href="#"><p><img width="50" src="<?php echo get_template_directory_uri(); ?>/image/insta.png"   alt=""> </p></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-content_menu">
                        <ul>
                            <li><a href="#">menu</a></li>
                            <li><a href="#">menu</a></li>
                            <li><a href="#">menu</a></li>
                            <li><a href="#">menu</a></li>
                            <li><a href="#">menu</a></li>
                            <li><a href="#">menu</a></li>
                        </ul>
                    </div>
                    <div class="footer-content_copyright">
                        <p>©　2019 黒坂オートキャンプ場</p>
                    </div>

                </div>
            </div>
        </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/jquery.js"></script>
    <script>
        $(function () {
            $('#nav_toggle').click(function () {
                $("header").toggleClass('open');
                $("nav").fadeToggle(500);
            });

        });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick.min.js"></script>
    <script>
        $(function () {
            $('.slider').slick({
                accessibility: false,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 1500,
                pauseOnHover: true,
                dots: true,
                fade: false,
                infinite: true,
                arrows: false,
                slidesToShow: 2,

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

</body>

</html>