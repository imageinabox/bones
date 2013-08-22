<?php
function iiab_onehalf( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'sixcol',
		'first' => true,
		'last' => false,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'one-half' , 'iiab_onehalf' );

function iiab_onehalf_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'sixcol',
		'first' => false,
		'last' => true,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div><div class="clear"></div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'last-one-half' , 'iiab_onehalf_last' );

function iiab_onefourth( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'threecol',
		'first' => false,
		'last' => false,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'one-fourth' , 'iiab_onefourth' );

function iiab_onefourth_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'threecol',
		'first' => false,
		'last' => true,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div><div class="clear"></div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'last-one-fourth' , 'iiab_onefourth_last' );

function iiab_twothirds( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'eightcol',
		'first' => false,
		'last' => false,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'two-thirds' , 'iiab_twothirds' );

function iiab_twothirds_last( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'eightcol',
		'first' => false,
		'last' => true,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'last-two-thirds' , 'iiab_twothirds_last' );

function iiab_onethird( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'fourcol',
		'first' => false,
		'last' => false,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'one-third' , 'iiab_onethird' );

function iiab_lastonethird( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'col' => 'fourcol',
		'first' => false,
		'last' => true,
		'classes' => false
	), $atts ) );
	
	$class = '' . $col;
	if( $first ) {
		$class = $class . ' first';
	}
	if( $last ) {
		$class = $class . ' last';
	}
	if( $classes ) {
		$class = $class . ' ' . $classes;
	}
	$output = '<div class="' . $class . '">' . $content . '</div><div class="clear"></div>';
	$output = str_replace( "\r\n" , '' , $output );
	$output = wpautop( $output );
	return do_shortcode( $output );
}
add_shortcode( 'last-one-third' , 'iiab_lastonethird' );

function iiabButton( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'href' => '',
		'class' => '',
		'title' => '',
	), $atts ) );
	if( !empty( $class ) )
		$class = ' ' . $class;
	$output = '<a title="' . $title . '" class="button' . $class . '" href="' . $href . '">' . $content . '</a>';
	$output = str_replace( "\r\n" , '' , $output );
	return do_shortcode( $output );
}
add_shortcode( 'iiab-button' , 'iiabButton' );

function processRequestForm( $atts , $content = '' ) {
	if( $_POST ) {
		$_POST = array_map( 'stripslashes_deep', $_POST );
		if( $_POST['spam'] == 9 ) {
			//Spam passes
			$responseArray = array();
			foreach( $_POST as $key => $value ) {
				$responseArray[ ucfirst( $key ) ] = ( $value == '' ? 'Not provided' : $value );
			}
			unset( $responseArray['Spam'] );
			unset( $responseArray['Submit'] );
			unset( $responseArray['Contactus-form'] );
			$responseArray['Ip Address'] = ( $_SERVER['REMOTE_ADDR'] == $_SERVER['SERVER_ADDR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'] );
			$output = '';
			$output = displayTree( $responseArray );
			$output = '<html><body><h2>A new contact form has been submitted on the ' . html_entity_decode( get_bloginfo( 'name' ) ) . '.</h2><p>See the users details below</p>' . $output . '</body></html>'; //<p><small>See any issues with this email, just contact <a href="http://www.imageinabox.com/">Image In A Box</a> at 256-669-0626.</small></p>
			$headers = 'From: "' . html_entity_decode( get_bloginfo( 'name' ) ) . ' Web Form" <anonymous@imageinabox.com>' . "\n";
			$headers .= 'Reply-To: ' . ( !empty( $responseArray['EmailField'] ) ? trim( $responseArray['EmailField'] ) : '' ) . "\n";
			$headers .= 'BCC: jgivens@imageinabox.com' . "\n";
			$headers .= 'Date: ' . date( 'r' , $_SERVER['REQUEST_TIME'] ) . "\n";
			$headers .= 'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . "\n";
			$headers .= 'X-Mailer: PHP/' . phpversion() . "\n";
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-Type: text/html; charset=UTF-8' . "\n";
			$headers .= "Content-Transfer-Encoding: 7bit\n";
			
			$success = mail( get_bloginfo( 'admin_email' ) , html_entity_decode( get_bloginfo( 'name' ) ) . ' - Contact Request' , $output , $headers , '-fanonymous@imageinabox.com' );
			$content = '<h3>' . __( 'Thanks for contacting us. We will be in contact you soon.' , 'iiab' ) . '</h3>';
		} else {
			$content = '<h3>' . __( 'Ooops, looks like missed something. Maybe the spam question.' , 'iiab' ) . '</h3>'  . $content;
		}
	}
	wp_print_scripts( 'wp-ajax-response' );
	return $content;
}
add_shortcode( 'request-form-results' , 'processRequestForm' );

function iiab_lookForForm() {
	global $post;
	echo '<pre>' . print_r( $post , true ) . '<pre>';
	//wp_enqueue_script( 'wp-ajax-response' );
	
}
//add_action( 'wp_head' , 'iiab_lookForForm' );

function displayTree($array) {
     $tempOutput = '';
     $newline = "</li>";
     foreach($array as $key => $value) {    //cycle through each item in the array as key => value pairs
         if (is_array($value) || is_object($value)) {        //if the VALUE is an array, then
            //call it out as such, surround with brackets, and recursively call displayTree.
             $value = "Array()" . $newline . "(<ul>" . displayTree($value) . "</ul>)" . $newline;
         }
        //if value isn't an array, it must be a string. output its' key and value.
        $tempOutput .= "<li><strong>$key:</strong> " . $value . $newline;
     }
     return '<ul>' . $tempOutput . '</ul>';
}

function iiab_social_icons() {
	$twitter = get_option( 'imageinabox_twitter' );
	$facebook = get_option( 'imageinabox_facebook' );
	$youtube = get_option( 'imageinabox_youtube' );
	$linkedin = get_option( 'imageinabox_linkedin' );
	$email = get_option( 'imageinabox_email' );
	$socialOutput = "
			<ul class=\"iiabSocial\">
				";
	if( !empty( $linkedin ) )
		$socialOutput .= "<li><a title=\"Follow us on LinkedIn\" class=\"liIcon\" onclick=\" window.open(this.href); ga('send', 'event', 'Header Social', 'Clicked', 'LinkedIn'); return false;\" href=\"$linkedin\">LinkedIn</a></li>";
	if( !empty( $facebook ) )
		$socialOutput .= "<li><a title=\"Become our friend on Facebook\" class=\"fbIcon\" onclick=\" window.open(this.href); ga('send', 'event', 'Header Social', 'Clicked', 'Facebook'); return false;\" href=\"$facebook\">Facebook</a></li>";
	if( !empty( $youtube ) )
		$socialOutput .= "<li><a title=\"Subscribe to our YouTube Channel\" class=\"youIcon\" onclick=\" window.open(this.href); ga('send', 'event', 'Header Social', 'Clicked', 'YouTube'); return false;\" href=\"$youtube\">YouTube</a></li>";
	if( !empty( $twitter ) )
		$socialOutput .= "<li><a title=\"Follow " . get_bloginfo( 'name' ) . " Tweets, Tweets!\" class=\"twIcon\" onclick=\" window.open(this.href); ga('send', 'event', 'Header Social', 'Clicked', 'Twitter'); return false;\" href=\"$twitter\">Twitter</a></li>";
	if( !empty( $email ) )
		$socialOutput .= "<li><a title=\"Email us today\" class=\"emailIcon\" href=\"mailto:$email\">Email Us</a></li>";
	$socialOutput .= "	</ul>
	";
	return do_shortcode( $socialOutput );
}
add_shortcode( 'iiab-social-icons' , 'iiab_social_icons' );

function iiab_social_icons_widget( $text ) {
	return do_shortcode( $text );
}
add_filter( 'widget_text' , 'iiab_social_icons_widget' );