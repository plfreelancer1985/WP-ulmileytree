<?php 

// ============== Displaying Additional Columns ===============

add_filter( 'manage_edit-gs_testimonial_columns', 'gs_testimonial_screen_columns' );

function gs_testimonial_screen_columns( $columns ) {
	unset( $columns['date'] );
    $columns['title'] = 'Author Name';
    $columns['featured_image'] = 'Author Image';
    $columns['gs_t_client_company'] = 'Company';
    $columns['gs_t_client_design'] = 'Designation';
    $columns['date'] = 'Date';
    return $columns;
}

// GET FEATURED IMAGE
function gs_testimonial_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id);
        return $post_thumbnail_img[0];
    }
}

add_action('manage_posts_custom_column', 'gs_testimonial_columns_content', 10, 2);
// SHOW THE FEATURED IMAGE
function gs_testimonial_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = gs_testimonial_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" width="34"/>';
        }
    }
}

//Populating the Columns

add_action( 'manage_posts_custom_column', 'gs_t_populate_columns' );

function gs_t_populate_columns( $column ) {

    if ( 'gs_t_client_company' == $column ) {
        $client_company = get_post_meta( get_the_ID(), 'gs_t_client_company', true );
        echo $client_company;
    }

    if ( 'gs_t_client_design' == $column ) {
        $client_desig = get_post_meta( get_the_ID(), 'gs_t_client_design', true );
        echo $client_desig;
    }
    
}


// Columns as Sortable
add_filter( 'manage_edit-gs_testimonial_sortable_columns', 'gs_testimonial_sort' );

function gs_testimonial_sort( $columns ) {
    $columns['gs_t_client_company'] = 'gs_t_client_company';
 
    return $columns;
}