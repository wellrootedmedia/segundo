<div id="ms-slides">
    <?php
    $args = array(
        'post_type' => 'attachment',
        'numberposts' => -1,
        'post_status' =>'any',
        'post_parent' => $post->ID,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_mime_type' => 'image',
    );

    $attachments = get_children( $args );
    $data = "";
    if ($attachments) {
        foreach ( $attachments as $attachment ) {
            $data .= '<div class="single_attachment_thumbnail">';
            $data .= wp_get_attachment_image( $attachment->ID, array('1920', '960'), false, array('class'=>'img-thumbnail') );
            $data .= '</div>';
        }
        echo $data;
    }
    ?>
</div>