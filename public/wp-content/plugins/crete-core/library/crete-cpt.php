<?php
// Register Taxonomy Category
function crete_team_cat_tax() {

	$labels = array(
		'name'              => _x( 'Departments', 'taxonomy general name', 'crete-core' ),
		'singular_name'     => _x( 'Department', 'taxonomy singular name', 'crete-core' ),
		'search_items'      => __( 'Search Departments', 'crete-core' ),
		'all_items'         => __( 'All Departments', 'crete-core' ),
		'parent_item'       => __( 'Parent Department', 'crete-core' ),
		'parent_item_colon' => __( 'Parent Department:', 'crete-core' ),
		'edit_item'         => __( 'Edit Department', 'crete-core' ),
		'update_item'       => __( 'Update Department', 'crete-core' ),
		'add_new_item'      => __( 'Add New Department', 'crete-core' ),
		'new_item_name'     => __( 'New Department Name', 'crete-core' ),
		'menu_name'         => __( 'Department', 'crete-core' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'crete-core' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'department', array('team'), $args );

}
add_action( 'init', 'crete_team_cat_tax' );
// Register Custom Post Type Team
function crete_team_cpt() {

	$labels = array(
		'name' => _x( 'Teams', 'Post Type General Name', 'crete-core' ),
		'singular_name' => _x( 'Team', 'Post Type Singular Name', 'crete-core' ),
		'menu_name' => _x( 'Teams', 'Admin Menu text', 'crete-core' ),
		'name_admin_bar' => _x( 'Team', 'Add New on Toolbar', 'crete-core' ),
		'archives' => __( 'Team Archives', 'crete-core' ),
		'attributes' => __( 'Team Attributes', 'crete-core' ),
		'parent_item_colon' => __( 'Parent Team:', 'crete-core' ),
		'all_items' => __( 'All Teams', 'crete-core' ),
		'add_new_item' => __( 'Add New Team', 'crete-core' ),
		'add_new' => __( 'Add New', 'crete-core' ),
		'new_item' => __( 'New Team', 'crete-core' ),
		'edit_item' => __( 'Edit Team', 'crete-core' ),
		'update_item' => __( 'Update Team', 'crete-core' ),
		'view_item' => __( 'View Team', 'crete-core' ),
		'view_items' => __( 'View Teams', 'crete-core' ),
		'search_items' => __( 'Search Team', 'crete-core' ),
		'not_found' => __( 'Not found', 'crete-core' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'crete-core' ),
		'featured_image' => __( 'Featured Image', 'crete-core' ),
		'set_featured_image' => __( 'Set featured image', 'crete-core' ),
		'remove_featured_image' => __( 'Remove featured image', 'crete-core' ),
		'use_featured_image' => __( 'Use as featured image', 'crete-core' ),
		'insert_into_item' => __( 'Insert into Team', 'crete-core' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'crete-core' ),
		'items_list' => __( 'Teams list', 'crete-core' ),
		'items_list_navigation' => __( 'Teams list navigation', 'crete-core' ),
		'filter_items_list' => __( 'Filter Teams list', 'crete-core' ),
	);
	$args = array(
		'label' => __( 'Team', 'crete-core' ),
		'description' => __( '', 'crete-core' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'crete_team_cpt', 0 );





// Get block id by ID or slug.
function crete_get_block_id( $post_id ) {
  global $wpdb;

  if ( empty ( $post_id ) ) {
    return null;
  }

  // Get post ID if using post_name as id attribute.
  if ( ! is_numeric( $post_id ) ) {
    $post_id = $wpdb->get_var(
      $wpdb->prepare(
        "SELECT ID FROM $wpdb->posts WHERE post_type = 'crete_block' AND post_name = %s",
        $post_id
      )
    );
  }

  // Polylang support.
  if ( function_exists( 'pll_get_post' ) ) {
    if ( $lang_id = pll_get_post( $post_id ) ) {
      $post_id = $lang_id;
    }
  }

  // WPML Support.
  if ( function_exists( 'icl_object_id' ) ) {
    if ( $lang_id = icl_object_id( $post_id, 'crete_block', false, ICL_LANGUAGE_CODE ) ) {
      $post_id = $lang_id;
    }
  }

  return $post_id;
}
// Register Custom Post Type crete_block
function crete_create_block_cpt() {

	$labels = array(
		'name' => _x( 'Crete Blocks', 'Post Type General Name', 'crete-core' ),
		'singular_name' => _x( 'Crete Block', 'Post Type Singular Name', 'crete-core' ),
		'menu_name' => _x( 'Crete Block', 'Admin Menu text', 'crete-core' ),
		'name_admin_bar' => _x( 'Crete Block', 'Add New on Toolbar', 'crete-core' ),
		'archives' => __( 'Block Archives', 'crete-core' ),
		'attributes' => __( 'Block Attributes', 'crete-core' ),
		'parent_item_colon' => __( 'Parent crete_block:', 'crete-core' ),
		'all_items' => __( 'Crete Blocks', 'crete-core' ),
		'add_new_item' => __( 'Add New Block', 'crete-core' ),
		'add_new' => __( 'Add New Block', 'crete-core' ),
		'new_item' => __( 'New Block', 'crete-core' ),
		'edit_item' => __( 'Edit Block', 'crete-core' ),
		'update_item' => __( 'Update Block', 'crete-core' ),
		'view_item' => __( 'View Block', 'crete-core' ),
		'view_items' => __( 'View Block', 'crete-core' ),
		'search_items' => __( 'Search Block', 'crete-core' ),
		'not_found' => __( 'Not found', 'crete-core' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'crete-core' ),
		'featured_image' => __( 'Featured Image', 'crete-core' ),
		'set_featured_image' => __( 'Set featured image', 'crete-core' ),
		'remove_featured_image' => __( 'Remove featured image', 'crete-core' ),
		'use_featured_image' => __( 'Use as featured image', 'crete-core' ),
		'insert_into_item' => __( 'Insert into Block', 'crete-core' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Block', 'crete-core' ),
		'items_list' => __( 'Block list', 'crete-core' ),
		'items_list_navigation' => __( 'Block list navigation', 'crete-core' ),
		'filter_items_list' => __( 'Filter Block list', 'crete-core' ),
	);
	$args = array(
		'label' => __( 'Block', 'crete-core' ),
		'description' => __( '', 'crete-core' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-ul',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => 'crete-admin-menu',
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'crete_block', $args );

}
add_action( 'init', 'crete_create_block_cpt', 0 );
function my_edit_crete_block_columns() {
	$columns = array(
		'cb'        => '<input type="checkbox" />',
		'title'     => __( 'Title', 'crete-core' ),
		'shortcode' => __( 'Shortcode', 'crete-core' ),
		'date'      => __( 'Date', 'crete-core' ),
	);

	return $columns;
}

add_filter( 'manage_edit-crete_block_columns', 'my_edit_crete_block_columns' );

function my_manage_crete_block_columns( $column, $post_id ) {
	$post_data = get_post( $post_id, ARRAY_A );
	$slug      = $post_data['post_name'];
	add_thickbox();
	switch ( $column ) {
		case 'shortcode':
			echo '<textarea style="min-width: 60%;
    max-height: 27px;
    background: #FBEEE6;
    border-color: #FBEEE6;
    color: #28170E;
    font-size: 14px;
    margin-top: 5px;
">[crete_block id="' . $slug . '"]</textarea>';
			break;
	}
}

add_action( 'manage_crete_block_posts_custom_column', 'my_manage_crete_block_columns', 10, 2 );


/**
 * Disable gutenberg support for now.
 *
 * @param bool   $use_crete_block_editor Whether the post type can be edited or not. Default true.
 * @param string $post_type        The post type being checked.
 *
 * @return bool
 */
function crete_block_disable_gutenberg( $use_crete_block_editor, $post_type ) {
	return $post_type === 'crete_block' ? false : $use_crete_block_editor;
}

add_filter( 'use_crete_block_editor_for_post_type', 'crete_block_disable_gutenberg', 10, 2 );
add_filter( 'gutenberg_can_edit_post_type', 'crete_block_disable_gutenberg', 10, 2 );


/**
 * Update crete_block preview URL
 */
function setec_crete_block_scripts() {
	global $typenow;
	if ( 'crete_block' == $typenow && isset( $_GET["post"] ) ) {
		?>
		<script>
          jQuery(document).ready(function ($) {
            var crete_block_id = $('input#post_name').val()
            $('#submitdiv').
              after('<div class="postbox"><h2 class="hndle">Shortcode</h2><div class="inside"><p><textarea style="width:100%; max-height:30px;">[crete_block id="' + crete_block_id +
                '"]</textarea></p></div></div>')
          })
		</script>
		<?php
	}
}

add_action( 'admin_head', 'setec_crete_block_scripts' );

function setec_crete_block_frontend() {
	if ( isset( $_GET["crete_block"] ) ) {
		?>
		<script>
          jQuery(document).ready(function ($) {
            $.scrollTo('#<?php echo esc_attr( $_GET["crete_block"] );?>', 300, {offset: -200})
          })
		</script>
		<?php
	}
}

add_action( 'wp_footer', 'setec_crete_block_frontend' );

function crete_block_shortcode( $atts, $content = null ) {
	global $post;

	extract( shortcode_atts( array(
			'id' => '',
		),
			$atts
		)
	);

	// Abort if ID is empty.
	if ( empty ( $id ) ) {
		return '<p><mark>No crete_block ID is set</mark></p>';
	}



	if ( is_home() ) $post = get_post( get_option('page_for_posts') );

	$post_id  = crete_get_block_id( $id );
	$the_post = $post_id ? get_post( $post_id, OBJECT, 'display' ) : null;

	if ( $the_post ) {
	      if (  did_action( 'elementor/loaded' ) ) {
	        $html = \Elementor\Plugin::$instance->frontend->get_builder_content( intval($post_id) );
	    } else {
		$html = $the_post->post_content;
	    }

		if ( empty( $html ) ) {
			$html = '<p class="lead shortcode-error">Open this in Elementor to add and edit content</p>';
		}

		// Add edit link for admins.
		if ( isset( $post ) && current_user_can( 'edit_pages' )
		     && ! is_customize_preview()
		     && function_exists( 'setec_builder_is_active' )
		     && ! setec_builder_is_active() ) {
			$edit_link         = setec_builder_edit_url( $post->ID, $post_id );
			$edit_link_backend = admin_url( 'post.php?post=' . $post_id . '&action=edit' );
			$html              = '<div class="crete_block-edit-link" data-title="Edit Block: ' . get_the_title( $post_id ) . '"   data-backend="' . esc_url( $edit_link_backend )
			                     . '" data-link="' . esc_url( $edit_link ) . '"></div>' . $html . '';
		}
	} else {
		$html = '<p class="text-center"><mark>Block <b>"' . esc_html( $id ) . '"</b> not found</mark></p>';
	}

	return do_shortcode( $html );
}

add_shortcode( 'crete_block', 'crete_block_shortcode' );


if ( ! function_exists( 'crete_block_categories' ) ) {
	/**
	 * Add crete_block categories support
	 */
	function crete_block_categories() {
		$args = array(
			'hierarchical'      => true,
			'public'            => false,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
		);
		register_taxonomy( 'crete_block_categories', array( 'crete_block' ), $args );

	}

	// Hook into the 'init' action
	add_action( 'init', 'crete_block_categories', 0 );
}
// Register Custom Post Type Pricing Table
function crete_pricingtable_cpt() {

	$labels = array(
		'name' => _x( 'Pricing Tables', 'Post Type General Name', 'crete-core' ),
		'singular_name' => _x( 'Pricing Table', 'Post Type Singular Name', 'crete-core' ),
		'menu_name' => _x( 'Pricing Tables', 'Admin Menu text', 'crete-core' ),
		'name_admin_bar' => _x( 'Pricing Table', 'Add New on Toolbar', 'crete-core' ),
		'archives' => __( 'Pricing Table Archives', 'crete-core' ),
		'attributes' => __( 'Pricing Table Attributes', 'crete-core' ),
		'parent_item_colon' => __( 'Parent Pricing Table:', 'crete-core' ),
		'all_items' => __( 'All Pricing Tables', 'crete-core' ),
		'add_new_item' => __( 'Add New Pricing Table', 'crete-core' ),
		'add_new' => __( 'Add New', 'crete-core' ),
		'new_item' => __( 'New Pricing Table', 'crete-core' ),
		'edit_item' => __( 'Edit Pricing Table', 'crete-core' ),
		'update_item' => __( 'Update Pricing Table', 'crete-core' ),
		'view_item' => __( 'View Pricing Table', 'crete-core' ),
		'view_items' => __( 'View Pricing Tables', 'crete-core' ),
		'search_items' => __( 'Search Pricing Table', 'crete-core' ),
		'not_found' => __( 'Not found', 'crete-core' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'crete-core' ),
		'featured_image' => __( 'Featured Image', 'crete-core' ),
		'set_featured_image' => __( 'Set featured image', 'crete-core' ),
		'remove_featured_image' => __( 'Remove featured image', 'crete-core' ),
		'use_featured_image' => __( 'Use as featured image', 'crete-core' ),
		'insert_into_item' => __( 'Insert into Pricing Table', 'crete-core' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Pricing Table', 'crete-core' ),
		'items_list' => __( 'Pricing Tables list', 'crete-core' ),
		'items_list_navigation' => __( 'Pricing Tables list navigation', 'crete-core' ),
		'filter_items_list' => __( 'Filter Pricing Tables list', 'crete-core' ),
	);
	$args = array(
		'label' => __( 'Pricing Table', 'crete-core' ),
		'description' => __( '', 'crete-core' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-list-view',
		'supports' => array('title', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'pricingtable', $args );

}
add_action( 'init', 'crete_pricingtable_cpt', 0 );


// Register Custom Post Type Project
function crete_project_cpt() {

	$labels = array(
		'name' => _x( 'Projects', 'Post Type General Name', 'crete-core' ),
		'singular_name' => _x( 'Project', 'Post Type Singular Name', 'crete-core' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', 'crete-core' ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'crete-core' ),
		'archives' => __( 'Project Archives', 'crete-core' ),
		'attributes' => __( 'Project Attributes', 'crete-core' ),
		'parent_item_colon' => __( 'Parent Project:', 'crete-core' ),
		'all_items' => __( 'All Projects', 'crete-core' ),
		'add_new_item' => __( 'Add New Project', 'crete-core' ),
		'add_new' => __( 'Add New', 'crete-core' ),
		'new_item' => __( 'New Project', 'crete-core' ),
		'edit_item' => __( 'Edit Project', 'crete-core' ),
		'update_item' => __( 'Update Project', 'crete-core' ),
		'view_item' => __( 'View Project', 'crete-core' ),
		'view_items' => __( 'View Projects', 'crete-core' ),
		'search_items' => __( 'Search Project', 'crete-core' ),
		'not_found' => __( 'Not found', 'crete-core' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'crete-core' ),
		'featured_image' => __( 'Featured Image', 'crete-core' ),
		'set_featured_image' => __( 'Set featured image', 'crete-core' ),
		'remove_featured_image' => __( 'Remove featured image', 'crete-core' ),
		'use_featured_image' => __( 'Use as featured image', 'crete-core' ),
		'insert_into_item' => __( 'Insert into Project', 'crete-core' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'crete-core' ),
		'items_list' => __( 'Projects list', 'crete-core' ),
		'items_list_navigation' => __( 'Projects list navigation', 'crete-core' ),
		'filter_items_list' => __( 'Filter Projects list', 'crete-core' ),
	);
	$args = array(
		'label' => __( 'Project', 'crete-core' ),
		'description' => __( '', 'crete-core' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-excerpt-view',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'crete_project_cpt', 0 );

// Register Taxonomy Project Category
function create_projectcategory_tax() {

    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Project Categories', 'textdomain' ),
        'all_items'         => __( 'All Project Categories', 'textdomain' ),
        'parent_item'       => __( 'Parent Project Category', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Project Category:', 'textdomain' ),
        'edit_item'         => __( 'Edit Project Category', 'textdomain' ),
        'update_item'       => __( 'Update Project Category', 'textdomain' ),
        'add_new_item'      => __( 'Add New Project Category', 'textdomain' ),
        'new_item_name'     => __( 'New Project Category Name', 'textdomain' ),
        'menu_name'         => __( 'Project Category', 'textdomain' ),
    );
    $args = array(
        'labels' => $labels,
        'description' => __( '', 'textdomain' ),
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => false,
        'show_in_rest' => true,
    );
    register_taxonomy( 'project-category', array('project'), $args );

}
add_action( 'init', 'create_projectcategory_tax' );