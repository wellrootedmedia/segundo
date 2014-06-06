<?php
$vimeoId = get_post_meta( $post->ID, 'VimeoId', true );
define(VIMEOID, $vimeoId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Grid Template for Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

    <!-- Custom styles for this template -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->

    <?php wp_enqueue_script('jquery'); ?>

</head>

<body oncontextmenu="return false;">
<div class="container">

    <div class="page-header">
        <h1>
            <a class="blogName" href="<?php bloginfo('url'); ?>">
                <?php
                $str = get_bloginfo('name');
                $explodes = (explode(" ",$str));
                $pieces = explode(" ", $str);
                foreach($pieces as $piece ) {
                    echo "<span class='first-letter'>" . ucwords($piece) . "</span> ";
                }
                ?>
            </a>
        </h1>
    </div>