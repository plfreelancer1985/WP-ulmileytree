<?php
/**
 * This page shows the procedural or functional example
 * OOP way example is given on the main plugin file.
 * @author Tareq Hasan <tareq@weDevs.com>
 */
 
/**
 * WordPress settings API demo class
 * @author Tareq Hasan
 */
 
if ( !class_exists('GS_testimonial_Settings_Config' ) ):
class GS_testimonial_Settings_Config {

    private $settings_api;

    function __construct() {
        $this->settings_api = new GS_T_WeDevs_Settings_API;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
	
		add_submenu_page( 'edit.php?post_type=gs_testimonial', 'Testimonial Settings', 'Testimonial Settings', 'delete_posts', 'testimonial-settings', array($this, 'plugin_page')); 
		
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id' 	=> 'gs_t_general',
                'title' => __( 'General Settings', 'gst' )
            ),
            array(
                'id'    => 'gs_t_style',
                'title' => __( 'Style Settings', 'gst' )
            ),
            array(
                'id' 	=> 'gs_t_advance',
                'title' => __( 'Advance Settings', 'gst' )
            )
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'gs_t_general' => array(
                // Transition Style
                array(
                    'name'      => 'gs_t_transtion',
                    'label'     => __( 'Transition Style', 'gst' ),
                    'desc'      => __( 'Select Transition Style to slide Testimonials', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'carousel',
                    'options'   => array(
                        'carousel'  => 'Carousel',
                        'fade'      => 'Fade (Pro)',
                        'fadeout'   => 'FadeOut (Pro)',
                        'scrollHorz'=> 'ScrollHorz (Pro)',
                        'scrollVert'=> 'ScrollVert (Pro)',
                        'flipHorz'  => 'FlipHorz (Pro)',
                        'flipVert'  => 'FlipVert (Pro)',
                        'shuffle'   => 'Shuffle (Pro)',
                        'tileSlide' => 'TileSlide (Pro)'
                    )
                ), 
                // Slider Stop on mouse hover
                array(
                    'name'      => 'gs_t_slider_stop',
                    'label'     => __( 'Stop on hover', 'gst' ),
                    'desc'      => __( 'NavigationSlider stop on mouse hover. Default Off', 'gst' ),
                    'type'      => 'switch',
                    'switch_default' => 'OFF'
                ),
                 // Navigation Arrow
                array(
                    'name' => 'gs_t_nav_arrow',
                    'label' => __( 'Navigation Arrow', 'gst' ),
                    // 'desc' => __( '<span class="description">Navigation arrow will show left & right side on hover state.<br>&nbspIf you don\'t wish to show the arrow, just turn the switch off! Default ON</span>' ),

                    'desc' => __( 'Navigation arrow will show left & right side on hover state.<br>&nbspIf you don\'t wish to show the arrow, just turn the switch off! Default ON', 'gst' ),
                    'type' => 'switch',
                    'switch_default' => 'ON'
                ),

                 
                // Slider auto play
                array(
                    'name' => 'gs_t_slide_speed',
                    'label' => __( 'Sliding Speed', 'gst' ),
                    'desc' => __( 'You can increase / decrease sliding speed.<br> Set the speed in millisecond. Default 4000. To disable autoplay just set the speed <b>0</b>', 'gst' ),
                    'type' => 'range',
                    'sanitize_callback' => 'intval',
                    'range_min' => 0,
                    'range_max' => 10000,
                    'range_step' => 100,
                    'default' => 4000,
                ),
                //Responsiveness
                array(
                    'name'      => 'gs_t_responsive',
                    'label'     => __( 'Responsiveness', 'gst' ),
                    'desc'      => __( 'Turn off to disable responsiveness! Default On <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'switch',
                    'switch_default' => 'ON'
                ),
                // Pagination
                array(
                    'name' => 'gs_t_pagination',
                    'label' => __( 'Pagination', 'gst' ),
                    'desc' => __( 'Pagination control bellow the Testimonial slider. Default OFF <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'switch',
                    'switch_default' => 'OFF'
                ),

                // company and designation level show /hide
                array(
                    'name' => 'gs_t_comapny_lebel',
                    'label' => __( 'Company & Designation', 'gst' ),
                    'desc' => __( 'Company & Designation Label show / hide. Default ON', 'gst' ),
                    'type' => 'switch',
                    'switch_default' => 'ON'
                ),

                 // Display Ratings
                array(
                    'name' => 'gs_t_ratings',
                    'label' => __( 'Ratings', 'gst' ),
                    'desc' => __( 'Show / Hide Ratings . Default OFF <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'switch',
                    'switch_default' => 'OFF'
                ),

                // Display Author Image
                array(
                    'name' => 'gs_t_image',
                    'label' => __( 'Image', 'gst' ),
                    'desc' => __( 'Show / Hide Image . Default OFF', 'gst' ),
                    'type' => 'switch',
                    'switch_default' => 'OFF'
                ),
            ),
            // GS Testimonial Style settings
            'gs_t_style' => array(
                // Testimonial Text Color
                array(
                    'name'    => 'gs_t_text_color',
                    'label'   => __( 'Testimonial Color', 'gst' ),
                    'desc'    => __( 'Select color for <b>Testimonial Texts</b>.', 'gst' ),
                    'type'    => 'color',
                    'default' => '#000'
                ),
                // Author Name Color
                array(
                    'name'    => 'gs_t_name_color',
                    'label'   => __( 'Author Name Color', 'gst' ),
                    'desc'    => __( 'Select color for <b>Author Name</b>.', 'gst' ),
                    'type'    => 'color',
                    'default' => '#8224e3'
                ),
                // Testimonial Text font size
                array(
                    'name' => 'gs_t_text_font_size',
                    'label' => __( 'Font Size', 'gst' ),
                    'desc' => __( 'Set font size for <b>Testimonial Texts</b>, Default 16px <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 16,
                    'min' => 0,
                    'max' => 20,
                ),
                // Testimonial Text Line Height
                array(
                    'name' => 'gs_t_text_line_h',
                    'label' => __( 'Line Height', 'gst' ),
                    'desc' => __( 'Set Line Height for <b>Testimonial Texts</b>, Default 20px <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 20,
                    'min' => 0,
                    'max' => 25,
                ),
                // content font weight
                array(
                    'name'      => 'gs_t_fntw',
                    'label'     => __( 'Font Weight', 'gst' ),
                    'desc'      => __( 'Select Font Weight for <b>Testimonial Texts</b> <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'normal',
                    'options'   => array(
                        'normal'    => 'Normal',
                        'bold'      => 'Bold',
                        'lighter'   => 'Lighter'
                    )
                ), 

                
                // Navigation Arrow color
                array(
                    'name' => 'gs_t_nav_arrow_color',
                    'label' => __( 'Navigation Arrow Color', 'gst' ),
                    'desc' => __( 'Set color for Nav Arrow. Applicable for <b>Flipster Theme</b> <b> ( Pro Feature )</b>' ),
                    'type' => 'color',
                    'default' => '#b5b5b5'
                ),

                // Rating color
                array(
                    'name' => 'gs_t_rating_color',
                    'label' => __( 'Ratings Color', 'gst' ),
                    'desc' => __( 'Select color for Rating <b>( Pro Feature )</b>' ),
                    'type' => 'color',
                    'default' => '#0074A2'
                ),
                // Author Name font size
                array(
                    'name' => 'gs_t_au_font_size',
                    'label' => __( 'Font Size', 'gst' ),
                    'desc' => __( 'Set font size for <b>Author Name</b>, Default 20px <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 20,
                    'min' => 10,
                    'max' => 30,
                ),
                // Author Name font weight
                array(
                    'name'      => 'gs_t_au_fntw',
                    'label'     => __( 'Font Weight', 'gst' ),
                    'desc'      => __( 'Select Font Weight for <b>Author Name</b> <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'normal',
                    'options'   => array(
                        'normal'    => 'Normal',
                        'bold'      => 'Bold',
                        'lighter'   => 'Lighter'
                    )
                ),
                // Author Margin
                array(
                    'name' => 'gs_t_au_mar',
                    'label' => __( 'Margin', 'gst' ),
                    'desc' => __( 'Set Margin for <b>Author Name</b>, Default 3px <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 3,
                    'min' => 0,
                    'max' => 10,
                ),

                // Label Color
                array(
                    'name'    => 'gs_t_label_color',
                    'label'   => __( 'Label Color', 'gst' ),
                    'desc'    => __( 'Select color for <b>Labels</b> <b> ( Pro Feature ) </b>.', 'gst' ),
                    'type'    => 'color',
                    'default' => '#717171'
                ),
                // Label font size
                array(
                    'name' => 'gs_t_label_font_size',
                    'label' => __( 'Font Size', 'gst' ),
                    'desc' => __( 'Set font size for <b>Labels</b>, Default 16px <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 16,
                    'min' => 10,
                    'max' => 30,
                ),

                // Name & Designation Color
                array(
                    'name'    => 'gs_t_nm_desig_color',
                    'label'   => __( 'Name & Designation Color', 'gst' ),
                    'desc'    => __( 'Select color for <b>Name & Designation</b> <b> ( Pro Feature )</b>. ', 'gst' ),
                    'type'    => 'color',
                    'default' => '#717171'
                ),
                // Name & Designation font size
                array(
                    'name' => 'gs_t_nm_desig_font_size',
                    'label' => __( 'Font Size', 'gst' ),
                    'desc' => __( 'Set font size for <b>Name & Designation</b>, Default 16px <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 16,
                    'min' => 10,
                    'max' => 30,
                ),
                 // Name & Designation font weight
                array(
                    'name'      => 'gs_t_nm_desig_fntw',
                    'label'     => __( 'Font Weight', 'gst' ),
                    'desc'      => __( 'Select Font Weight for <b>Name & Designation</b>. Default Normal <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'normal',
                    'options'   => array(
                        'normal'    => 'Normal',
                        'bold'      => 'Bold',
                        'lighter'   => 'Lighter'
                    )
                ),
                // Name & Designation font style
                array(
                    'name'      => 'gs_t_nm_desig_style',
                    'label'     => __( 'Font Style', 'gst' ),
                    'desc'      => __( 'Select Font Style for <b>Name & Designation</b>. Default Normal <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'normal',
                    'options'   => array(
                        'normal'    => 'Normal',
                        'italic'    => 'Italic'
                    )
                ),
                array(
                    'name'      => 'gs_t_filter_cat_pos',
                    'label'     => __( 'Filter Category Position', 'gst' ),
                    'desc'      => __( 'Select Filter Category Position. Applicable for Filter Theme <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'center',
                    'options'   => array(
                        'left'    => 'Left',
                        'center'  => 'Center',
                        'right'   => 'Right'
                    )
                ),

            ),
			// GS Testimonial advance settings
            'gs_t_advance' => array(
                // Primary Font Family
                array(
                    'name'      => 'gs_t_fnt_name',
                    'label'     => __( ' Font Family', 'gst' ),
                    'desc'      => __( 'Select  Font Family for Testimonials Name <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'checkbox',
                    'default'   => 'on',
                    
                ),
                // Img width
                array(
                    'name' => 'gs_t_img_width',
                    'label' => __( 'Image Width', 'gst' ),
                    'desc' => __( 'Author image size in width. Default 86 PX. Max 125 PX <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 86,
                    'min' => 0,
                    'max' => 125,
                ),
                // Image Height
                array(
                    'name' => 'gs_t_img_height',
                    'label' => __( 'Image Height', 'gst' ),
                    'desc' => __( 'Author image size in height. Default 86 PX. Max 125 PX<br>Note : Use same size height & width to display <b>Round</b> image<b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 86,
                    'min' => 0,
                    'max' => 125,
                ),
                // company level
                array(
                    'name'    => 'gs_t_company_level',
                    'label'   => __( 'Company Label', 'gst' ),
                    'desc'    => __( 'Company Label <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'    => 'text',
                    'default' => 'Company'
                ),
                // des level
                array(
                    'name'    => 'gs_t_designation_level',
                    'label'   => __( 'Designation Label', 'gst' ),
                    'desc'    => __( 'Designation Label <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'    => 'text',
                    'default' => 'Designation'
                ),
                // Border Color
                array(
                    'name'    => 'gs_t_img_b_color',
                    'label'   => __( 'Author Image Border', 'gst' ),
                    'desc'    => __( 'Select color for Author Image Border <b> ( Pro Feature ) </b>.', 'gst' ),
                    'type'    => 'color',
                    'default' => '#ddd'
                ),
                // Img border thikness
                array(
                    'name' => 'gs_t_img_thikness',
                    'label' => __( 'Border Thikness', 'gst' ),
                    'desc' => __( 'Author image Border Thikness. Default 3 PX. Max 10 PX <b> ( Pro Feature ) </b>', 'gst' ),
                    'type' => 'number',
                    'default' => 3,
                    'min' => 0,
                    'max' => 10,
                ),
                // Img border style
                array(
                    'name'      => 'gs_t_img_sty',
                    'label'     => __( 'Border Style', 'gst' ),
                    'desc'      => __( 'Select Border Style around Author image <b> ( Pro Feature ) </b>', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'solid',
                    'options'   => array(
                        'dashed'    => 'Dashed',
                        'dotted'    => 'Dotted',
                        'double'    => 'Double',
                        'solid'     => 'Solid',
                        'none'     => 'None'
                    )
                ),
                // Style & Theming
                array(
                    'name'      => 'gs_sty_thming',
                    'label'     => __( 'Style & Theming', 'gst' ),
                    'desc'      => __( 'Select preffered Style & Theme', 'gst' ),
                    'type'      => 'select',
                    'default'   => 'none',
                    'options'   => array(
                        'none'     => 'None',
                        'gs_style1'    => 'Style 1 (Pro)',
                        'gs_style2'    => 'Style 2 (Pro)',
                        'gs_style3'    => 'Style 3 (Pro)',
                        'gs_style4'    => 'Style 4 (Pro)',
                        'gs_style5'    => 'Style 5 (Pro)',
                        'gs_style6'    => 'Style 6 (Pro)',
                        'gs_style7'    => 'Style 7 (Pro)',
                        'gs_style8'    => 'Style 8 (Pro)',
                        'gs_style9'    => 'Style 9 (Pro)',
                        'gs_style11'    => 'Style 11 (Pro)',
                        'gs_style12'    => 'Style 12 (Pro)',
                        'gs_style13'    => 'Style 13 (Pro)',
                        'gs_style14'    => 'Style 14 (Pro)',
                        'gs_style15'    => 'Style 15 (Pro)',
                        'gs_style16'    => 'Style 16 (Pro)',
                        'gs_style17'    => 'Style 17 (Pro)',
                    )
                )


				
            )
        );

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class=" gs_t_wrap" style="width: 845px; float: left;">';
            $this->settings_api->show_navigation();
            $this->settings_api->show_forms();
        echo '</div>';

        ?> 
            <div class="gswps-admin-sidebar" style="width: 277px; float: left; margin-top: 62px;">
                <div class="postbox">
                    <h3 class="hndle"><span><?php _e( 'Support / Report a bug' ) ?></span></h3>
                    <div class="inside centered">
                        <p>Please feel free to let me know if you got any bug to report. Your report / suggestion can make the plugin awesome!</p>
                        <p><a href="https://www.gsamdani.com/support" target="_blank" class="button button-primary">Get Support</a></p>
                    </div>
                </div>
                <div class="postbox">
                    <h3 class="hndle"><span><?php _e( 'Buy me a coffee' ) ?></span></h3>
                    <div class="inside centered">
                        <p>If you like the plugin, please buy me a coffee to inspire me to develop further.</p>
                        <p><a href='https://www.2checkout.com/checkout/purchase?sid=202460873&quantity=1&product_id=1' class="button button-primary" target="_blank">Donate</a></p>
                    </div>
                </div>

                <div class="postbox">
                    <h3 class="hndle"><span><?php _e( 'Subscribe to NewsLetter' ) ?></span></h3>
                    <div class="inside centered">
                        <p>Sign up today & be the first to get notified on new plugin updates. Your information will never be shared with any third party.</p>
                            <!-- Begin MailChimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup{background:#fff; clear:left; font:13px "Open Sans",sans-serif; }
                            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <div id="mc_embed_signup">
                        <form action="//gsamdani.us11.list-manage.com/subscribe/post?u=92f99db71044540329de15732&amp;id=2600f1ae0f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="padding: 0;">
                            <div id="mc_embed_signup_scroll">
                            
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your Email address" required style="width: 100%; border:1px solid #E2E1E1; text-align: center;">
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_92f99db71044540329de15732_2600f1ae0f" tabindex="-1" value=""></div>
                            <div class="clear" style="text-align: center; display: block;">
                                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button button-primary" style="display: inline; margin: 0; background: #00a0d2; font-size: 13px;">
                            </div>
                            </div>
                        </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                </div>

                <div class="postbox">
                    <h3 class="hndle"><span><?php _e( 'Join GS Plugins on facebook' ) ?></span></h3>
                    <div class="inside centered">
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/gsplugins&amp;width&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=723137171103956" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:220px;" allowTransparency="true"></iframe>
                    </div>
                </div>

                <div class="postbox">
                    <h3 class="hndle"><span><?php _e( 'Follow GS Plugins on twitter' ) ?></span></h3>
                    <div class="inside centered">
                        <a href="https://twitter.com/gsplugins" target="_blank" class="button button-secondary">Follow @gsplugins<span class="dashicons dashicons-twitter" style="position: relative; top: 3px; margin-left: 3px; color: #0fb9da;"></span></a>
                    </div>
                </div>


            </div>
        <?php
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;

$settings = new GS_testimonial_Settings_Config();