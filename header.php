<?php /*This Template is for displaying Header*/
  //set headers to NOT cache a page
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); //HTTP 1.0
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ;?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>" class="no-js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>
<body <?php body_class();?>>
<?php if(function_exists('wp_body_open')){wp_body_open();} ?>

<header id="header_area" class="<?php echo get_theme_mod('omni_menu_position');?>">
    <div class="container">
        <div class="row">
            <div class=" logo-col">
                <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('omni_logo') ;?>" alt=""></a>
            </div>

            <div class="col nav-col">
                    <?php echo wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') );?>
            </div>
        </div>
    </div>
</header>
