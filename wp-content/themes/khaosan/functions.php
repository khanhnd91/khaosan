<?php
add_filter( 'page_attributes_dropdown_pages_args', 'filter_dropdown', 10, 2 );
function filter_dropdown( $args, $post ){
    $post_type_object = get_post_type_object($post->post_type);
if ( $post_type_object->hierarchical && ($post->post_type == 'room' || $post->post_type == 'access')) {
        $args['post_type'] = 'hotel';
        $args['show_option_none'] = '(no hotel)';
    }
    return $args;
}
?>