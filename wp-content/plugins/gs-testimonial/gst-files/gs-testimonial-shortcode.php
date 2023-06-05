<?php 
function gs_t_get_option2( $option, $section, $default = '' ) {
 
    $options = get_option( $section );
 
    if ( isset( $options[$option] ) ) {
        return $options[$option];
    }
 
    return $default;
}

function gs_t_slider_trigger(){

	$gs_t_nav_arrow = gs_t_get_option2( 'gs_t_nav_arrow', 'gs_t_general', 'on' );

	if( $gs_t_nav_arrow=='on' ){ 
		?>
			<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery( ".cycle-slideshow, .cycle-nav" ).on( "mouseenter", function() {
					jQuery(".cycle-nav").css("display", "block");
				}).on( "mouseleave", function() {
					jQuery(".cycle-nav").css("display", "none");
				});

				jQuery(".cycle-nav").css("display", "<?php echo $gs_t_nav_arrow ?>");
			});
			</script>
		<?php
	}
}

add_action('wp_footer','gs_t_slider_trigger');


add_shortcode( 'gs_testimonial', 'gs_testimonial_shortcode' );

function gs_testimonial_shortcode() {

	$gs_t_loop = new WP_Query(
		array(
			'post_type'	=> 'gs_testimonial',
			'order_by'	=> 'title'
			)
		);

$gs_t_slide_speed = gs_t_get_option2( 'gs_t_slide_speed', 'gs_t_general', 4000 );
$gs_t_slider_stop = gs_t_get_option2( 'gs_t_slider_stop', 'gs_t_general', 'off' );
$gs_t_slider_stop = ($gs_t_slider_stop == 'on' ? 'true' : 'false');
$gs_t_image = gs_t_get_option2( 'gs_t_image', 'gs_t_general', 'off' );
$gs_t_comapny_lebel = gs_t_get_option2( 'gs_t_comapny_lebel', 'gs_t_general', 'on' );

	$output = '<div class="gs_testimonial_container">';
		if ( $gs_t_loop->have_posts() ) {

			$output .= '<div class="cycle-slideshow composite-example" 
						data-cycle-fx="carousel"
						data-cycle-carousel-fluid="true"
						data-cycle-pause-on-hover="'. $gs_t_slider_stop .'"
						data-cycle-center-horz="true"
    					data-cycle-center-vert="true"
						data-cycle-carousel-visible="1"
						data-cycle-slides="> div"
						data-cycle-next="#next"
						data-cycle-prev="#prev"
						data-cycle-speed="'.$gs_t_slide_speed.'"
						data-cycle-timeout="'. $gs_t_slide_speed .'"
						data-cycle-pager="#custom-pager"
						data-cycle-pager-template="<a>{{slideNum}}</a>">';

			while ( $gs_t_loop->have_posts() ) {
				$gs_t_loop->the_post();
				$meta = get_post_meta( get_the_id() );

				$gs_testimonial_id = get_post_thumbnail_id();
				$gs_testimonial_url = wp_get_attachment_image_src($gs_testimonial_id, array(86,86),true);

				$gs_testimonial = $gs_testimonial_url[0];
				$gs_testimonial_alt = get_post_meta($gs_testimonial_id,'_wp_attachment_image_alt',true);

				$output .= '<div class="gs_testimonial_single">';
				$output .= '<div class="testimonial-box">';
				$output .= '<div class="box-content"><p>'. get_the_content() .'</p></div>';
				$output .= '<h3 class="box-title">'. get_the_title() .'</h3>';
				if( !( $gs_t_image == 'off' ) ){
					$output .= '<div class="box-image"><img src="'. $gs_testimonial .'" alt="'. $gs_testimonial_alt .'"></div>';
				}
				

				if($meta['gs_t_client_company'][0]){
					$output .= '<div class="box-companyname">';
								if(  $gs_t_comapny_lebel == 'on' ){
									$output .= '<span>Company Name:</span> ';
								}
								$output .= $meta['gs_t_client_company'][0];
					$output .=	'</div>';
				}

				if($meta['gs_t_client_design'][0]){
					$output .= '<div class="box-designation">';
						if(  $gs_t_comapny_lebel == 'on' ){
							$output .= '<span>Designation:</span> ';
						}
						$output .=$meta['gs_t_client_design'][0];
					$output .=	'</div>';
				}
				$output .= '</div></div>';
			}

			$output .= '</div>';
			$output .= '<div class="center cycle-nav"><a id="prev">Prev</a><a id="next">Next</a></div>';
			$output .= '<div class="cycle-pager" id="custom-pager"></div>';

		} else {
			$output .= "No Testimonial Added!";
		}
		wp_reset_postdata();
		wp_reset_query();

	$output .= '</div>';

	return $output;
}



// GS Testimonial getting value form setting
function gs_t_settings_style(){
	$gs_t_text_color = gs_t_get_option2( 'gs_t_text_color', 'gs_t_style', '#000' );

	$gs_t_name_color = gs_t_get_option2( 'gs_t_name_color', 'gs_t_style', '#8224e3' );



echo "<style type='text/css'>
		.cycle-slide .testimonial-box .box-content p{ 
			color : $gs_t_text_color; 	
		}
		.cycle-slide .testimonial-box .box-title {
			color: $gs_t_name_color !important;
		}

	</style>";
}
add_action('wp_head','gs_t_settings_style');