<?php
$TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);

/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Celestial
 * @since Celestial 1.0
 */
 ?> <!DOCTYPE html><html <?php language_attributes(); ?> class="no-js"><head><meta charset="<?php bloginfo( 'charset' ); ?>"><meta name="viewport" content="width=device-width"><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><title>Celestial</title> <?php wp_head(); ?> <link href="/wordpress/wp-content/themes/celestial/static/css/main.d6d1251c.css" rel="stylesheet"></head><body <?php body_class(); ?>><div id="page" class="hfeed site"><div id="content"><div class="loader-gif"><img src="<?php echo $TEMPLATE_PATH ?>/dist/images/loading-icon.gif" alt="Loader"></div></div> <?php wp_footer(); ?> </div><script type="text/javascript" src="/wordpress/wp-content/themes/celestial/static/js/main.a52a7e58.js"></script></body></html>