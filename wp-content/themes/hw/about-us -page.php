<?php
/*
Template Name: About Us Page
Template Post Type: page
*/
?>

<?php get_header(); ?>
<div class="main-container">

    <?php
    if (have_rows('about_us_page')):
        while (have_rows('about_us_page')) : the_row();
            // get layout
            $layout = get_row_layout();
            // layout_1
            if ($layout === 'section1'): ?>
                <div class="aup-section1">
                    <div class="aup-section1__wrapper">
                        <h3 class="h3"><?php the_sub_field('title_section'); ?></h3>
                        <div class="flex">
                            <div class="left-part">
                                <h3 class=""><?php the_sub_field('title'); ?></h3>
                                <p class="p"><?php the_sub_field('text_area'); ?></p>
                            </div>
                            <div class="right-part">
                                <div class="btn-wrapper">
                                    
                                    <?php
                                        $link = get_sub_field('link');
                                        if ($link):
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a class="blue-buton" href="<?php echo esc_url($link_url); ?>"
                                               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                        <?php endif; ?>
                                </div>
                                
                                
                                    <?php $image = get_sub_field('image');
                                    if( !empty($image) ): ?>

                                        <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                    <?php endif; ?>
                                <h4 class=""><?php the_sub_field('title_image'); ?></h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            <?php // layout_2
            elseif ($layout === 'section2'): ?>
                <div class="aup-section2">
                    <div class="aup-section2__wrapper">
                        <div class="aup-section2__image">
                            <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ): ?>

                                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="aup-section2__description">
                            <h3 class="h3"><?php the_sub_field('title'); ?></h3>
                            <p class="p"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>
            <?php // layout_3
                elseif ($layout === 'section3'): ?>
                    <div class="aup-section3">
                        <div class="aup-section3__wrapper">
                            <h3 class="h3"><?php the_sub_field('title_section'); ?></h3>
                            <ul>
                                <li>
                                    <h4 class="h4">over</h4>
                                    <span class="namber"><?php the_sub_field('namber_1'); ?></span>
                                    <h4 class="h4"><?php the_sub_field('title_1'); ?></h4>
                                    <p class="p"><?php the_sub_field('text_1'); ?></p>
                                </li>
                                <li>
                                    <h4 class="h4">over</h4>
                                    <span class="namber"><?php the_sub_field('namber_2'); ?></span>
                                    <h4 class="h4"><?php the_sub_field('title_2'); ?></h4>
                                    <p class="p"><?php the_sub_field('text_2'); ?></p>
                                </li>
                                <li>
                                    <h4 class="h4">over</h4>
                                    <span class="namber"><?php the_sub_field('namber_3'); ?></span>
                                    <h4 class="h4"><?php the_sub_field('title_3'); ?></h4>
                                    <p class="p"><?php the_sub_field('text_3'); ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
            <?php // layout_4
                elseif ($layout === 'section4'): ?>
                <div class="aup-section4">
                    <div class="aup-section4__wrapper">
                        <div class="aup-section4__image">
                            <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ): ?>

                                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="aup-section4__description">
                            <h3 class="h3"><?php the_sub_field('title'); ?></h3>
                            <p class="p"><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif;
        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>