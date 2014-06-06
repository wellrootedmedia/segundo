<?php
$msShortVideo = get_page_by_title('ms short film');
$msAlbumId = get_page_by_title( 'ms album' );
$msAlbumUrl = get_post_meta( $msAlbumId->ID, 'AlbumUrl', true );

function getVideoUrl($videoId) {
    $msVimeoUrl = get_post_meta( $videoId, 'VimeoUrl', true );

    return $msVimeoUrl;
}

function tagLink() {
    $ctpc_options = get_option( 'ctpc_setting_values' );
    $taglink = $ctpc_options['taglink'];

    return $taglink;
}

?>
</div> <!-- /container -->

<div id="footer">
    <div class="container">
        <div class="row">
            <?php if(get_page_by_title( 'ms the wedding' )) : ?>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'ms the wedding' ) ) ); ?>">
                    <div class="col-md-3 light-grey">
                        <span class="footer-menu-title">The</span>
                        <br/>
                        <span class="footer-menu-desc">Wedding</span>
                    </div>
                </a>
            <?php endif; ?>

            <?php if(get_page_by_title( 'ms fusion album' )) : ?>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'ms fusion album' ) ) ); ?>">
                    <div class="col-md-3 dark-grey">
                        <span class="footer-menu-title">Fusion</span>
                        <br/>
                        <span class="footer-menu-desc">Album</span>
                    </div>
                </a>
            <?php endif; ?>

            <?php if(get_page_by_title( 'ms short film' ) && getVideoUrl($msShortVideo->ID)) : ?>
                <a href="<?php echo getVideoUrl($msShortVideo->ID); ?>" class="video fancybox">
                    <div class="col-md-3 light-grey">
                        <span class="footer-menu-title">Short</span>
                        <br/>
                        <span class="footer-menu-desc">Film</span>
                    </div>
                </a>
            <?php endif; ?>

            <?php if(get_page_by_title('ms photogs')) : ?>
                <a href="http://www.ctaylorphotos.com/about">
                    <div class="col-md-3 dark-grey">
                        <span class="footer-menu-title">meet the</span>
                        <br/>
                        <span class="footer-menu-desc">PHOTOGS</span>
                    </div>
                </a>
            <?php endif; ?>

            <?php if(get_page_by_title( 'ms engagement' )) : ?>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'ms engagement' ) ) ); ?>">
                    <div class="col-md-3 light-grey">
                        <span class="footer-menu-title">view their</span>
                        <br/>
                        <span class="footer-menu-desc">ENGAGEMENT</span>
                    </div>
                </a>
            <?php endif; ?>

            <?php if(get_page_by_title( 'ms album' ) && $msAlbumUrl) : ?>
                <a href="<?php echo $msAlbumUrl; ?>">
                    <div class="col-md-3 dark-grey">
                        <span class="footer-menu-title">the</span>
                        <br/>
                        <span class="footer-menu-desc">ALBUM</span>
                    </div>
                </a>
            <?php endif; ?>

            <?php if(get_page_by_title( 'ms blog' )) : ?>
                <?php $displayLink = (tagLink()) ? "/tag/" . tagLink()
                    : "/blog"; ?>
                <a href="http://ctaylorphotos.com<?php echo $displayLink; ?>">
                    <div class="col-md-3 light-grey">
                        <span class="footer-menu-title">view the</span>
                        <br/>
                        <span class="footer-menu-desc">BLOG</span>
                    </div>
                </a>
            <?php endif; ?>

            <?php if(get_page_by_title('ms fusion slideshow')) : ?>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'ms fusion slideshow' ) ) ); ?>">
                    <div class="col-md-3 dark-grey">
                        <span class="footer-menu-title">fusion</span>
                        <br/>
                        <span class="footer-menu-desc">SLIDESHOW</span>
                    </div>
                </a>
            <?php endif; ?>

        </div>
        <div>
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

        $('#ms-slides').touchwipe({
            wipeLeft: function() {
                return false;
            },
            wipeRight: function() {
                return false;
            }
        });

        $('.slidesjs-container').css('width', '100% !important');

        $(".page-header .blogName span").each(function (index, elem) {
            var thisIsIt = $(this).text();
            if (thisIsIt == '&' && index == index) {
                $(this).removeClass('first-letter');
                $(this).addClass('blogNameSeperator');
            }
        });
    });
</script>

<?php
if (getVideoUrl($msShortVideo->ID)) : ?>
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
<?php endif; ?>



</body>
</html>