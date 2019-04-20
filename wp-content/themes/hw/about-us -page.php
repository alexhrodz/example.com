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
            	<h3><?php the_sub_field('title_section'); ?></h3>
                <div>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('text_area'); ?></p>
                </div>
                <div>
                    <?php
                        $link = get_sub_field('link');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="blue-buton" href="<?php echo esc_url($link_url); ?>"
                               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; 
                    
                        $image = get_sub_field('image');
                        if( !empty($image) ): ?>

                            <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                    <h4><?php the_sub_field('title_image'); ?></h4>
                </div>
            <?php // layout_2
            elseif ($layout === 'section2'): ?>
                <h3><?php the_sub_field('title'); ?></h3>
                <p><?php the_sub_field('text'); ?></p>
                <?php
                    $image = get_sub_field('image');
                    if( !empty($image) ): ?>

                        <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>
            <?php // layout_3
                elseif ($layout === 'section3'): ?>
                    <h3><?php the_sub_field('title_section'); ?></h3>
                    <ul>
                        <li>
                            <h4>over</h4>
                            <span><?php the_sub_field('namber_1'); ?></span>
                            <h4><?php the_sub_field('title_1'); ?></h4>
                            <p><?php the_sub_field('text_1'); ?></p>
                        </li>
                        <li>
                            <h4>over</h4>
                            <span><?php the_sub_field('namber_2'); ?></span>
                            <h4><?php the_sub_field('title_2'); ?></h4>
                            <p><?php the_sub_field('text_2'); ?></p>
                        </li>
                        <li>
                            <h4>over</h4>
                            <span><?php the_sub_field('namber_3'); ?></span>
                            <h4><?php the_sub_field('title_3'); ?></h4>
                            <p><?php the_sub_field('text_3'); ?></p>
                        </li>
                    </ul>
            <?php // layout_4
                elseif ($layout === 'section4'): ?>
                
                <?php
                    $image = get_sub_field('image');
                    if( !empty($image) ): ?>

                        <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>
                    <h3><?php the_sub_field('title'); ?></h3>
                <p><?php the_sub_field('text'); ?></p>
            <?php endif;
        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>