<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'crete_blog_meta';

    //
    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title' => 'Crete Blog Meta',
        'post_type' => 'post',
        'data_type' => 'unserialize',
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Designation',
        'fields' => array(
            array(
                'id' => 'video-link',
                'type' => 'link',
                'title' => 'Video Link',
            ),
        )
    ));

}