<?php

/********************************************************
 * ThemeTim Social
 ********************************************************/

/********************************************************
 * Header
 ********************************************************/
/**
 *  Header Social
 */
function header_social() {

    if(get_theme_mod('social_header_enable','1')) :
        ?>
        <ul class="list-inline header-social">
            <?php
            if(get_theme_mod('header_fb', 'https://www.facebook.com/') ) {
                echo '<li><a href="'.get_theme_mod('header_fb').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('header_tw', '1')) {
                echo '<li><a href="'.get_theme_mod('header_tw', 'https://twitter.com ').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('header_li', '1')) {
                echo '<li><a href="'.get_theme_mod('header_li', 'https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_pint', '1')) {
                echo '<li><a href="'.get_theme_mod('header_pint', 'https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('header_ins', '1')) {
                echo '<li><a href="'.get_theme_mod('header_ins', 'https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_dri', '1')) {
                echo '<li><a href="'.get_theme_mod('header_dri', 'https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('header_plus', '1')) {
                echo '<li><a href="'.get_theme_mod('header_plus', 'https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('header_you', '1')) {
                echo '<li><a href="'.get_theme_mod('header_you', 'https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        <?php
    endif;
}
add_action( 'themetim_header_social', 'header_social' );
/**
 * Header My Account
 */
function header_account(){
    if(get_theme_mod('top_header_tel_enable', '1')):
        echo '<li><i class="fa fa-phone"></i> '.get_theme_mod('top_header_tel', '880 0000 000000').'</li>';
    endif;
    if(get_theme_mod('top_header_account_enable', '1')){
        $login_register =  get_permalink(get_theme_mod('header_login_register'));
        $header_myaccount =  get_permalink(get_theme_mod('header_myaccount'));
        if(is_user_logged_in()){
            echo '<li><a href="'.$header_myaccount.'">'.get_theme_mod('top_header_account','Account').'</a></li><li><a href="'.wp_logout_url().'">Logout</a></li>';
        }else{
            echo '<li><a href="'.$login_register.'">Login</a></li><li><a href="'.$login_register.'">Register</a></li>';
        }
    }
}
add_action( 'themetim_header_account', 'header_account' );
/********************************************************
 * Footer
 ********************************************************/
/**
 * Footer Newsletter
 */
function footer_newsletter(){
    if(get_theme_mod('newsletter_footer_enable','1')){
        ?>
        <form class="form-inline margin-top-xs-20" action="<?php echo get_theme_mod('top_footer_newsletter_url','https://www.yourmailchimpurl.com'); ?>" method="post" target="_blank">
            <div class="form-group">
                <h3 class="margin-clear padding-clear pull-left"><?php echo get_theme_mod('top_footer_newsletter_title','Newsletter'); ?></h3>
                <input type="email" class="form-control" name="newsletter-email" id="newsletter-email" placeholder="info@yoursite.com" required="">
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </div>
        </form>
    <?php }
}
add_action( 'themetim_footer_newsletter', 'footer_newsletter' );

/**
 * Middle Footer Description
 */
function middle_footer_description(){
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12 padding-bottom-10 margin-bottom-10">
        <h4><?php echo get_theme_mod('middle_footer_text_heading','Lawyer'); ?></h4>
        <p><?php echo get_theme_mod('middle_footer_text','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.'); ?></p>

    <?php
}
add_action( 'themetim_middle_footer_description', 'middle_footer_description' );

/**
 * Footer Social
 */
function footer_social() {
    if(get_theme_mod('social_footer_enable','1')) :
        ?>
        <ul class="list-inline footer-social">
            <?php
            if(get_theme_mod('footer_fb','1')) {
                echo '<li><a href="'.get_theme_mod('footer_fb','https://www.facebook.com/ ').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('footer_tw','1')) {
                echo '<li><a href="'.get_theme_mod('footer_tw','https://twitter.com').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('footer_li','1')) {
                echo '<li><a href="'.get_theme_mod('footer_li','https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('footer_pint','1')) {
                echo '<li><a href="'.get_theme_mod('footer_pint','https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('footer_ins','1')) {
                echo '<li><a href="'.get_theme_mod('footer_ins','https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('footer_dri','1')) {
                echo '<li><a href="'.get_theme_mod('footer_dri','https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('footer_plus','1')) {
                echo '<li><a href="'.get_theme_mod('footer_plus','https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('footer_you','1')) {
                echo '<li><a href="'.get_theme_mod('footer_you','https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        </div>
        <?php
    endif;
}
add_action( 'themetim_footer_social', 'footer_social' );

/**
 * Middle Footer Nav 1
 */
function middle_footer_nav_1(){
    ?>
    <div class="col-md-2 col-sm-6 col-xs-12 padding-bottom-10 margin-bottom-10">
        <h4><?php echo get_theme_mod('middle_footer_nav_heading_1','Pages'); ?></h4>
        <?php
        if ( has_nav_menu( 'footer-1' ) ) :
            wp_nav_menu( array( 'theme_location' => 'footer-1', 'menu_class' => 'list-unstyled text-capitalize', 'menu_id' => 'primary-menu','container' => '' ) );
        else: echo '<p class="text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Footer Nav 1</a> </p>';
        endif;
        ?>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_nav_1', 'middle_footer_nav_1' );

/**
 * Middle Footer Nav 2
 */
function middle_footer_nav_2(){
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12 padding-bottom-10 margin-bottom-10">
        <h4><?php echo get_theme_mod('middle_footer_nav_heading_2','Contact Information'); ?></h4>
        <?php
        echo get_theme_mod('middle_footer_contact_info','<p><i class="fa fa-map-marker"></i> West SM, Kam 7950 BD</p>
        <p><i class="fa fa-phone"></i> +880 158 0000</p>
        <p><i class="fa fa-envelope"></i> info@info.com</p>');
        ?>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_nav_2', 'middle_footer_nav_2' );


/**
 * Middle Footer Nav 3
 */

function middle_footer_nav_3(){
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12 padding-bottom-10 margin-bottom-10 ">
        <h4><?php echo get_theme_mod('middle_footer_nav_heading_3','Blog'); ?></h4>
        <?php
        $query_latest_blog = new WP_Query( array(
            'post_status'         => 'publish',
            'posts_per_page'	  => 2
        ) );
        ?>
        <div class="footer-blog-post row">
            <div class="footer-blog-post-widget">
                <?php
                if ($query_latest_blog->have_posts()) :
                    while ( $query_latest_blog->have_posts() ) : $query_latest_blog->the_post(); ?>
                        <div class="col-md-8 col-sm-8 col-xs-12 margin-bottom-10 blog_footer">
                            <?php the_title( sprintf( '<p class="entry-title text-capitalize margin-null"><a href="%s">', esc_url( get_permalink() ) ), '</a></p>' );
                             the_time('M j, Y');
                            ?>
                        </div>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-10 blog_thm">
                                <div class="entry-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="" />
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    <?php
}
add_action( 'themetim_middle_footer_nav_3', 'middle_footer_nav_3' );

/**
 * Bottom Footer Copyright
 */
function bottom_footer_copyright(){
    ?>
    <div class="col-md-6 col-sm-6 col-xs-12 site-info">
        <p><?php echo get_theme_mod('bottom_footer_copyright','© ThemeTim. All Rights Reserved.'); ?></p>
    </div>
    <?php
}
add_action( 'themetim_bottom_footer_copyright', 'bottom_footer_copyright' );

/**
 * Bottom Footer Nav
 */
function bottom_footer_nav(){
    ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <?php
        if ( has_nav_menu( 'footer-3' ) ) :
            wp_nav_menu( array( 'theme_location' => 'footer-3', 'menu_class' => 'list-inline text-right text-capitalize', 'menu_id' => 'primary-menu','container' => '' ) );
        else: echo '<p class="pull-right text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Footer Nav 3</a> </p>';
        endif;
        ?>
    </div>
    <?php
}
add_action( 'themetim_bottom_footer_nav', 'bottom_footer_nav' );


/**
 * Social Sharing
 */
function themetim_social_sharing(){
    ?>
    <ul class="list-inline">
        <li class="margin-top-10"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="margin-top-10"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="margin-top-10"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li class="margin-top-10"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="margin-top-10"><a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    <?php
}