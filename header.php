<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package upwork500
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="header">
            <div class="container">
                  <nav class="nav">
                        <div class="navbar">
                            <a class="navbar_brand logo" href="<?php the_permalink(); ?>home.php">
                                <img src="<?php bloginfo('template_url');?>./assets/images/logo_img.png" alt="logo_img">
                            </a>
							<a class="logo_img" href="index.html">
                            <img class="logo_text" src="<?php bloginfo('template_url');?>./assets/images/m_logo.png" alt="logo_text">
                            <img class="logo_text" src="<?php bloginfo('template_url');?>./assets/images/o_logo.png" alt="logo_text">
                            <img class="logo_text" src="<?php bloginfo('template_url');?>./assets/images/z_logo.png" alt="logo_text">
                            <img class="logo_text" src="<?php bloginfo('template_url');?>./assets/images/i_logo.png" alt="logo_text">
                            <img class="logo_text" src="<?php bloginfo('template_url');?>./assets/images/l_logo.png" alt="logo_text">
                            <img class="logo_text" src="<?php bloginfo('template_url');?>./assets/images/o_logo.png" alt="logo_text">
                            <img class="logo_text" src="<?php bloginfo('template_url');?>./assets/images/r_logo.png" alt="logo_text">
                        
                        </a>
                        </div>
                        <ul class="navbar_nav">
                            <li class="nav_item">
                                <a class="nav_link"  href="<?php echo home_url('/products.php'); ?>">Products</a> 
                            </li>
                            <li class="nav_item">
                              <a class="nav_link" href="<?php echo home_url('about.php'); ?>">About us</a> 
                           </li>
                            <li class="nav_item">
                                <a class="nav_link"  href="<?php echo home_url(); ?>/contact.php">Contact</a> 
                            </li>
                            <li class="nav_item">
                                <a class="btn  btn_warning "  href="<?php echo home_url(); ?>/career.php">We are hiring</a> 
                            </li>
        
        
        
                        </ul>
                        
                        <div class="burger">
                            <span  class="bar"></span>
                            <span  class="bar"></span>
                            <span  class="bar"></span>
                        </div>
                    
                  </nav>
        
            </div>
             
    </header>
	<!-- #masthead -->
