<?php

add_filter( 'rwmb_meta_boxes', 'happytour_register_meta_boxes' );

function happytour_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'additional',
        'title'      => __( 'Additional Information', 'textdomain' ),
        'post_types' => array( 'tour', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => 'Gallery',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'gallery_thumb',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
           
        )
    );
    // 2nd meta box
    /*$meta_boxes[] = array(
        'title'      => __( 'Media', 'textdomain' ),
        'post_types' => 'movie',
        'fields'     => array(
            array(
                'name' => __( 'URL', 'textdomain' ),
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );*/
    return $meta_boxes;
}

