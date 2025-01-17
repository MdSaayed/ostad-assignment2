<?php

function mezban_header_logo() {
    $header_logo = get_theme_mod('header_logo', get_template_directory_uri() . '/assets/images/img/logo.png');
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('logo')); ?>"> </a>
    <?php
}


// mezban menu
function mezban_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'main-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'container'      => '',
            'fallback_cb'     => 'Mezban_Walker_Nav_Menu::fallback',
            'walker'     => new Mezban_Walker_Nav_Menu,
        ) 
    ); 
}
// mezban menu
function mezban_footer_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'footer-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'container'      => '',
            'fallback_cb'     => 'Mezban_Walker_Nav_Menu::fallback',
            'walker'     => new Mezban_Walker_Nav_Menu,
        ) 
    ); 
}



// mezban footer logo
function mezban_footer_logo() {
    $footer_logo = get_theme_mod('footer_logo', get_template_directory_uri() . "/assets/images/img/logo footer.png");
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($footer_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
    </a>	
    <?php
}



// mezban_footer_social
function mezban_footer_social(){ 
    $header_facebook_url = get_theme_mod('header_facebook_url','#');         
    $header_instagram_url = get_theme_mod('header_instagram_url','#');         
    $header_twitter_url = get_theme_mod('header_twitter_url','#');         
    $header_pinterest_url = get_theme_mod('header_pinterest_url','#');         
    ?>
        <?php if(!empty($header_facebook_url) && $header_facebook_url !== '#') : ?>
            <a href="<?php echo esc_url($header_facebook_url) ?>" class="facebook"><i class="icofont-facebook"></i></a>
        <?php endif; ?>
        <?php if(!empty($header_instagram_url) && $header_instagram_url !== '#') : ?>
            <a href="<?php echo esc_url($header_instagram_url) ?>" class="twitter"><i class="icofont-twitter"></i></a>
        <?php endif; ?>
        <?php if(!empty($header_twitter_url) && $header_twitter_url !== '#') : ?>
            <a href="<?php echo esc_url($header_twitter_url) ?>" class="linkedin"><i class="icofont-linkedin"></i></a>
        <?php endif; ?>
        <?php if(!empty($header_pinterest_url) && $header_pinterest_url !== '#') : ?>
            <a href="<?php echo esc_url($header_pinterest_url) ?>" class="vimeo"><i class="icofont-vimeo"></i></a>
        <?php endif; ?>
    <?php
}

// mezban copyright text
function mezban_copyright(){ 
    $copyright_text = get_theme_mod('copyright_text', esc_html__( '© 2021 Mezban Design by FoxCoders.', 'mezban' ));
    ?>
    <?php if(!empty($copyright_text)) : ?>
        <p><?php echo mezban_kses($copyright_text); ?></p>
    <?php endif; ?>
    <?php
}

 

/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function mezban_kses( $allow_tags = '' ) {
	$allowed_html = [
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $allow_tags, $allowed_html );
}






