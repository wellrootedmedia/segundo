
</div> <!-- /container -->

<div id="footer">
    <div class="container">
        <div class="row">

            <?php $walker = new Menu_With_Description;
            $defaults = array(
                'theme_location'  => '',
                'menu'            => 'MS Site menu',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => $walker
            ); wp_nav_menu( $defaults ); ?>

        </div>
    </div>

    <div class="credits">
        <div class="col-md-12">
            <p><a href="http://www.ctaylorphotos.com"><?php _e('www.ctaylorphotos.com'); ?></a></p>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<!-- check if this works with latest jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.slides.min.js"></script>
<script type="text/javascript">
    jQuery(function($){
        $('#ms-slides').slidesjs({
            //width: 1000,
            height: 470,
            play: {
                active: false,
                auto: true,
                interval: 5000,
                effect: 'fade'
            },
            navigation: false,
            pagination: false
        });

        $('.slidesjs-container').css('width', '100% !important');

        $(".page-header .blogName span").each(function (index, elem) {
            var thisIsIt = $(this).text();
            if (thisIsIt == '&' && index == index) {
                $(this).removeClass('first-letter');
                $(this).addClass('blogNameSeperator');
            }
        });

        function isOdd(num) {
            return ( num & 1 ) ? "odd" : "even";
        }
        $( ".menu li" ).each(function( index ) {
            $(this).addClass(isOdd(parseInt(index)));
        });

        $.fn.divOffSet = function() {
            var myLeft = $(".center").offset().left;
            var myTop = $(".center").offset().top;
            var myRight = myLeft + $(".center").outerWidth();
            var myBottom = myTop + $(".center").outerHeight();
            var viewportRight = $(window).width() + $(window).scrollLeft();
            var viewportBottom = $(window).height() + $(window).scrollTop();
            var x = (Math.round(viewportRight - myRight));
            var rightSide = $('.right-side').css('width', x - 1);
            //console.log("h: " + (viewportRight - myRight) + ", v: " + (viewportBottom - myBottom));
            return rightSide;
        }
        $(".title .blogName span").each(function (index, elem) {
            var thisIsIt = $(this).text();
            if (thisIsIt == '&' && index == index) {
                $(this).removeClass('first-letter');
                $(this).addClass('blogNameSeperator');
            }
        });
        new $.fn.divOffSet();
        $(window).resize(function () {
            var x = new jQuery.fn.divOffSet();
        });
        $('body').bind('contextmenu', function (e) {
            return false;
        });


    });
</script>

<!-- Add fancyBox -->
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $('.fancybox')
            .fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                prevEffect: 'none',
                nextEffect: 'none',
                padding: 0,
                helpers: {
                    media: {}
                },
                title: '',
                width: '720px',
                height: '410px'
            });
    });
</script>



</body>
</html>