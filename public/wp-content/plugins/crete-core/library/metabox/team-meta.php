<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'crete_team_meta';

    //
    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title' => 'Crete Team Meta',
        'post_type' => 'team',
        'data_type' => 'unserialize',
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Designation',
        'fields' => array(
            array(
                'id' => 'designation',
                'type' => 'text',
                'title' => 'Designation',
            ),
            array(
                'id' => 'custom_breadcrumb_image',
                'type' => 'media',
                'title' => 'Custom Breadcrumb Image',
            ),
            array(
                'id' => 'additional_information',
                'type' => 'repeater',
                'title' => 'Additional Info',
                'fields' => array(
                    array(
                        'id' => 'info-icon',
                        'type' => 'icon',
                        'title' => 'Icon',
                    ),
                    array(
                        'id' => 'info-subtitle',
                        'type' => 'text',
                        'title' => 'Info Subtitle',
                        'default' => 'Experience'
                    ),
                    array(
                        'id' => 'info-title',
                        'type' => 'text',
                        'title' => 'Info Title',
                        'default' => 'More Than 10 Years'
                    ),
                ),
            ),
            array(
                'id' => 'social_info',
                'type' => 'repeater',
                'title' => 'Social Info',
                'fields' => array(
                    array(
                        'id' => 'social-icon',
                        'type' => 'icon',
                        'title' => 'Social Icon',
                    ),
                    array(
                        'id' => 'social-link',
                        'type' => 'link',
                        'title' => 'Social Link',
                    ),
                ),
            ),
        )
    ));

}