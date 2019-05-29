//Remove Post Preview Button from Post Editor
function posttype_admin_css() {
    global $post_type;
    $post_types = array(
                        /* set post types */
                        'post_type_name',
                        'post',
                        'page',
                  );
    if(in_array($post_type, $post_types))
    echo '<style type="text/css">#post-preview, #view-post-btn{display: none;}</style>';
}
add_action( 'admin_head-post-new.php', 'posttype_admin_css' );
add_action( 'admin_head-post.php', 'posttype_admin_css' );
