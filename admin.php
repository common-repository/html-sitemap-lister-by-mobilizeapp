<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Add options needed for plugin
add_option('fu_fastpostlists_style', '.fastpostlist {
list-style-type: none;
padding: 10px;
}
.fastpostlist img {
vertical-align: middle;
display: inline !important;
}
.fastpostlist span {
padding: 10px;
}');
add_option('fu_fastpostlists_headhtml', '<ul>');
add_option('fu_fastpostlists_posthtml', '<li class="fastpostlist">
<a href="[permalink]">[img]<span class="title">[title]</span></a>
</li>');
add_option('fu_fastpostlists_foothtml', '</ul>');

////////////////////////////////////////////////////////////////////////////////////////////////////////
// Admin page user interface

add_action('admin_menu', 'htmlsitemaplister_menu');

function htmlsitemaplister_menu() {
	add_options_page('Fast Post Lists Options', 'Fast Post Lists', 'manage_options', 'htmlsitemaplister_options_general', 'htmlsitemaplister_options_general');
	add_action( 'admin_init', 'htmlsitemaplister_register_settings' );
}

///////////////////////////////////////////////////////////////////////////////////////
// Begin general options

function htmlsitemaplister_register_settings()
{
  // First, we register a section. This is necessary since all future options must belong to one.
  add_settings_section(
      'htmlsitemaplister_settings_section',         // ID used to identify this section and with which to register options
      'General Options',                  // Title to be displayed on the administration page
      'htmlsitemaplister_options_callback', // Callback used to render the description of the section
      'htmlsitemaplister_options_general'   // Page on which to add this section of options
      );

  add_settings_field(
      'fu_fastpostlists_style',          // ID used to identify the field throughout the theme
      'CSS Style (inserted into header)',   // The label to the left of the option interface element
      'htmlsitemaplister_textarea_callback',   // The name of the function responsible for rendering the option interface
      'htmlsitemaplister_options_general',     // The page on which this option will be displayed
      'htmlsitemaplister_settings_section',    // The name of the section to which this field belongs
      array(                              // The array of arguments to pass to the callback. In this case, just a description.
          'fu_fastpostlists_style',
          'CSS Style',
          8
      )
    );
  add_settings_field(
      'fu_fastpostlists_headhtml',
      'HTML header to post index:',
      'htmlsitemaplister_textarea_callback',
      'htmlsitemaplister_options_general',
      'htmlsitemaplister_settings_section',
      array(
          'fu_fastpostlists_headhtml',
          'HTML header',
          4
      )
    );
  add_settings_field(
      'fu_fastpostlists_posthtml',
      'HTML for each post',
      'htmlsitemaplister_textarea_callback',
      'htmlsitemaplister_options_general',
      'htmlsitemaplister_settings_section',
      array(
          'fu_fastpostlists_posthtml',
          'HTML per post',
          6,
          'Keys to be replaced:<br/>[title] - post title.<br>[permalink] - post permalink.<br>[img] - first attached post image.<br>'
      )
    );  
   add_settings_field(
      'fu_fastpostlists_foothtml',
      'HTML footer to post index:',
      'htmlsitemaplister_textarea_callback',
      'htmlsitemaplister_options_general',
      'htmlsitemaplister_settings_section',
      array(
          'fu_fastpostlists_foothtml',
          'HTML footer',
          4
      )
    );

  // register our settings
  register_setting( 'fu_fastpostlists_settings_group', 'fu_fastpostlists_style' );
  register_setting( 'fu_fastpostlists_settings_group', 'fu_fastpostlists_headhtml' );
  register_setting( 'fu_fastpostlists_settings_group', 'fu_fastpostlists_posthtml' );
  register_setting( 'fu_fastpostlists_settings_group', 'fu_fastpostlists_foothtml' );

}

function htmlsitemaplister_options_callback()
{
}

function htmlsitemaplister_options_general()
{
  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }  
  
  ?>
<div class="wrap">
<?php screen_icon(); ?>
<h2>HTML site map Lists</h2>

  <!-- Create the form that will be used to render our options -->  
  <form method="post" action="options.php">  
    <?php 
    settings_fields( 'fu_fastpostlists_settings_group' ); 
    ?>  
    <?php do_settings_sections( 'htmlsitemaplister_options_general' ); ?>             
    <?php submit_button(); ?>  
  </form>  
  
</div>
<?php
}


function htmlsitemaplister_textarea_callback($args) 
{    
  // Note the ID and the name attribute of the element should match that of the ID in the call to add_settings_field  
  $html = '<textarea cols="80" rows="'.($args[2] ?? 4).'" id="'.$args[0].'" name="'.$args[0].'">'.get_option($args[0]).'</textarea>';
  if (isset($args[3])) $html .= '<p>' . $args[3] . '</p>';
  echo $html;  
}

?>