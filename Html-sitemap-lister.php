<?php
/*
Plugin Name: Html sitemap lister by Mobilizeapp
Plugin URI: 
Description: Creates a lists of posts, for use as an index or contents pages, based upon given search criteria.
Version: 0.2
Author:  Mobilizeapp

*/


require __DIR__."/admin.php";


// Shortcode handler to create the post index
function htmlsitemaplister_shortcode($attrs, $content, $name)
{	
	$results = "";
	
	extract(shortcode_atts(array(
					'search' => '',
					'cat' => '',
					'notcat' => '',
					'tag' => '',
					'nottag' => '',
					'maxposts' => -1,
					'groupby' => '',
					'orderby' => 'title'
					), $attrs));					
					
	// Setup query args
	$args = array();
	if ($search != '') $args['s'] = $search;
	if ($cat != ''){ if (is_numeric($cat)) $args['cat'] = $cat; else $args['category_name'] = $cat; }
	if ($notcat != '') $args['category__not_in'] = $notcat;
	if ($tag != '') $args['tag'] = $tag;
	if ($nottag != '') $args['tag__not_in'] = $nottag;
	$args['posts_per_page'] = $maxposts;
	
	$args['order'] = 'ASC';
	$args['orderby'] = $orderby;

	$cacheHash = "fu_fastpostlists_" . implode(',', $args);
	$results = wp_cache_get($cacheHash);
	if (false !== $results)	
	  return $results;
  	
	// No cache, so query (without global var) 
	$query = new WP_Query( $args );
	$posts = array();

	// The Loop
	while( $query->have_posts() ) {
		$query->next_post();
		$query->post->cat_ids = wp_get_post_categories($query->post->ID);
		$query->post->tag_ids = wp_get_post_tags($query->post->ID, array( 'fields' => 'ids' ) );
		$posts[] = $query->post;
	}

	// Restore original Post Data
	wp_reset_postdata();
  	
	// Dump results
	if ($groupby == 'cat') {
		// get all categories and group posts by them.
		$categories = get_terms( 'category', 'orderby=name&hide_empty=0' );
		foreach ($categories as $cat) {			
			// Find posts in this cat.
			$groupPosts = array();
			foreach ($posts as $post) {
				if ( in_array($cat->term_id, $post->cat_ids) ) {
					$groupPosts[] = $post;
				}
			}
			
			if (count($groupPosts) > 0) {
				$results .= '<strong>' . $cat->name . '</strong><br/>';
				$results .= htmlsitemaplister_writeposts($groupPosts);
			}
		}
	}
	else if ($groupby == 'tag') {
		// get all categories and group posts by them.
		$tags = get_terms( 'post_tag', 'orderby=name&hide_empty=0' );
		foreach ($tags as $tag) {
			
			// Find posts in this cat.
			$groupPosts = array();
			foreach ($posts as $post) {
				if ( in_array($tag->term_id, $post->tag_ids) ) {
					$groupPosts[] = $post;
				}
			}
			
			// Write out this group.
			if (count($groupPosts) > 0) {
				$results .= '<strong>' . $tag->name . '</strong><br/>';
				$results .= htmlsitemaplister_writeposts($groupPosts);
			}
		}
	}
	else {
		$results .= htmlsitemaplister_writeposts($posts);
	}
	
	// Cache results for next time.
	wp_cache_set($cacheHash, $results);
  return $results;
}


add_shortcode('htmlsitemap_postlister', 'htmlsitemaplister_shortcode');

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Add shortcode buttons to quick tag bar.
function fu_fastpostlists_addquicktags() {
  if (wp_script_is('quicktags')){
    ?>
    <script type="text/javascript">
    QTags.addButton( 'htmlsitemap_postlister', 'Post List', '[htmlsitemap_postlister]', '', '', 'Fast Post List shortcode', 201 );
    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'fu_fastpostlists_addquicktags' );


function htmlsitemaplister_headerstyle() {
	echo '<style type="text/css">';
	echo get_option('fu_fastpostlists_style');
	echo '</style>';
}

add_action('wp_head', 'htmlsitemaplister_headerstyle');



// Function to write out an array of posts as unordered list.
function htmlsitemaplister_writeposts($posts) {
	$postHtmlTemplate = get_option('fu_fastpostlists_posthtml');

	$results = get_option('fu_fastpostlists_headhtml');

	foreach ($posts as $post) {
		$postHtml = $postHtmlTemplate;
		$postHtml = str_replace('[permalink]', get_permalink($post), $postHtml);
		$postHtml = str_replace('[title]', get_the_title($post->ID), $postHtml);
				
		$args = array( 'post_type' => 'attachment', 'numberposts' => 1, 'post_status' =>'any', 'post_parent' => $post->ID ); 
		$attachments = get_posts($args);
		if ($attachments) {
			foreach ( $attachments as $attachment ) {
				$postHtml = str_replace('[img]', wp_get_attachment_image($attachment->ID , array(48,48)), $postHtml);
			}
		}
		else {
			$postHtml = str_replace('[img]', '', $postHtml);
		}				

		$results .= $postHtml;

	}
	
	$results .= get_option('fu_fastpostlists_foothtml');
	
	return $results;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////
// Remove options on uninstall.

function htmlsitemaplister_uninstall()
{
  delete_option("fu_fastpostlists_style");
  delete_option("fu_fastpostlists_headhtml");
  delete_option("fu_fastpostlists_posthtml");
  delete_option("fu_fastpostlists_foothtml");  
}

register_uninstall_hook(__FILE__, 'htmlsitemaplister_uninstall');
?>
