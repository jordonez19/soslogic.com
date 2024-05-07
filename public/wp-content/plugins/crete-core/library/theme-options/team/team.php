<?php
// Create a top-tab
CSF::createSection( $prefix, array(
    'id'    => 'team', // Set a unique slug-like ID
    'title' => 'Team',
    'icon'     => 'fas fa-user-friends',
) );
// Create a sub-tab
CSF::createSection( $prefix, array(
    'parent' => 'team', // The slug id of the parent section
    'title'  => 'Team Single',
    'fields' => array(
        array(
            'id'    => 'team_newsletter_switcher',
            'type'  => 'switcher',
            'title' => 'Newsletter Switcher',
            'default' => true
        ),
        array(
            'id'      => 'newsletter_section_subtitle',
            'type'    => 'text',
            'title'   => 'Section Subtitle',
            'default' => "What's Going On",
        ),
        array(
            'id'      => 'newsletter_section_title',
            'type'    => 'text',
            'title'   => 'Section Title',
            'default' => "Subscribe to our",
        ),
        array(
            'id'      => 'newsletter_section_special_title',
            'type'    => 'text',
            'title'   => 'Special Title',
            'default' => "Newsletter",
        ),
        array(
            'id'      => 'newsletter_shortcode',
            'type'    => 'textarea',
            'title'   => 'Newsletter Shortcode',
        ),
        array(
            'id'    => 'newsletter_section_bg_img',
            'type'  => 'media',
            'title' => 'Newsletter BG Image',
        ),
    )
));

// Create a sub-tab
CSF::createSection( $prefix, array(
    'parent' => 'team', // The slug id of the parent section
    'title'  => 'Recent Blog',
    'fields' => array(
        array(
            'id'    => 'team_blog_switcher',
            'type'  => 'switcher',
            'title' => 'Blog Switcher',
            'default' => true
        ),
        array(
            'id'      => 'Blog_section_subtitle',
            'type'    => 'text',
            'title'   => 'Blog Section Subtitle',
            'default' => "What's Going On",
        ),
        array(
            'id'      => 'blog_section_title',
            'type'    => 'text',
            'title'   => 'Blog Section Title',
            'default' => "Latest News",
        ),
        array(
            'id'      => 'blog_section_special_title',
            'type'    => 'text',
            'title'   => 'Blog Section Special Title',
            'default' => "Updates",
        ),
    )
));

