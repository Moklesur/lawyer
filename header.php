<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeTim_WordPress_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader animsition">
    <header class="header">
        <!--------------- Header Bottom ---------------->
        <section class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: #00aaaa">
                        <!--------------- Primary Menu ---------------->
                        <nav class="navbar navbar-default text-uppercase primary-menu">
                            <div class="logo pull-left">
                                <?php
                                if (get_theme_mod('site_logo') != '') : ?>
                                    <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" class="img-responsive" alt="" /></a>
                                <?php else : ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
                                <?php endif ?>
                            </div>
                            <div class="navbar-header pull-right">
                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="pull-right">
                                <?php do_action('themetim_header_social'); ?>
                            </div>
                            <div id="navbar-collapse" class="navbar-collapse collapse pull-right">
                                <?php
                                if ( has_nav_menu( 'primary' ) ) :
                                    wp_nav_menu( array('menu'              => 'primary', 'theme_location'    => 'primary', 'depth'             => 5, 'container'         => '', 'menu_id' 			=> 'primary-menu', 'container_class'   => 'collapse navbar-collapse', 'container_id'      => 'bs-example-navbar-collapse-1', 'menu_class'        => 'nav navbar-nav', 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback', 'walker'            => new wp_bootstrap_navwalker()));
                                else: echo '<p class="margin-top-10 pull-left text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Primary Menu</a> </p>';
                                endif; ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <?php if ( !is_front_page() ) { ?>
        <!--------------- Breadcrumb ---------------->
        <section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php themetim_breadcrumbs(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- Search Modal -->
    <div class="modal fade search-pop" id="search-pop" tabindex="-1" role="dialog" aria-labelledby="request-a-quote">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form role="search" method="get" class="search-fix position-relative" action="<?php echo home_url( '/' ); ?>">
                        <input type="search" class="search-field form-control"
                               placeholder="<?php echo esc_attr_x( 'Search', 'themetim' ) ?>"
                               value="<?php echo get_search_query() ?>" name="s" />
                        <button type="submit" class="btn"><i class="fa fa-long-arrow-right fa-2x"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-12" style="background-color: #00a000">
        <?php do_action('themetim_header_social'); ?>
    </div>