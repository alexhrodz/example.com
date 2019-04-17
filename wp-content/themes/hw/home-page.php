<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>

<?php get_header(); ?>
<div class="main-container">

    <?php
    if (have_rows('home_page')):
        while (have_rows('home_page')) : the_row();
            // get layout
            $layout = get_row_layout();
            // layout_1
            if ($layout === 'section1'): ?>
                <div class="section1"
                     style="background: url(<?php the_sub_field('image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="page-container">
                        <h3 class=""><?php the_sub_field('title'); ?></h3>
                        <p class=""><?php the_sub_field('text'); ?></p>
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
                </div>
            <?php // layout_2
            elseif ($layout === 'section2'): ?>
                <div class="section2">
                    <div class="page-container">
                        <p class=""><?php the_sub_field('text_area'); ?></p>
                        
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
                </div>
            <?php // layout_3
            elseif ($layout === 'section3'): ?>
                <div class="section3">
                    <div class="page-container">
                        <div>
                            <h3 class=""><?php the_sub_field('title'); ?></h3>
                            <p class=""><?php the_sub_field('text_area'); ?></p>
                        </div>
                        <div>
                            <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ): ?>

                                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif;
        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>