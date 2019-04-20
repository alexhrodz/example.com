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
                    <div class="page-container zzz">
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
                    <div class="page-container iii">
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
                    <div class="page-container jjj">
                        <div class="section3__wrapp">
                            <h3 class=""><?php the_sub_field('title'); ?></h3>
                            <p class=""><?php the_sub_field('text_area'); ?></p>
                        </div>
                  
                            <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ): ?>

                                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                      
                    </div>
                </div>
            <?php // layout_4
            elseif ($layout === 'repeater'): ?>
                <div class="section4">
                <h3><?php the_sub_field('title_section'); ?></h3>
                <?php if( have_rows('gallery') ): ?>

                    <ul class="">

                    <?php while( have_rows('gallery') ): the_row(); 

                        // vars
                        $image = get_sub_field('image');
                        $content = get_sub_field('content');
                        $title = get_sub_field('title');

                        ?>

                        <li class="">

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <div class="fon-blue">
                                <h4 class=""><?php echo $title; ?></h4>
                                <p class=""><?php echo $content; ?></p>
                            </div>


                         </li>

                    <?php endwhile; ?>

                    </ul>

                <?php endif; ?>
                </div>
                <?php // layout_5
                elseif ($layout === 'carousel'): ?>
                    <div class="section5">
                    <h3><?php the_sub_field('title_section'); ?></h3>
                    <?php if( have_rows('slider') ): ?>

                    <ul class="">

                    <?php while( have_rows('slider') ): the_row(); 

                        // vars
                        $image = get_sub_field('image');
                        $text = get_sub_field('text');
                        $title = get_sub_field('title');

                    ?>

                        <li class="">

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <div class="">
                                <h4 class=""><?php echo $title; ?></h4>
                                <p class=""><?php echo $text; ?></p>
                            </div>


                         </li>

                    <?php endwhile; ?>

                    </ul>
                    <?php endif; ?>
                    </div>
                <?php // layout_6
                elseif ($layout === 'section6'): ?>
                    <div class="section6">
                        <div class="section6__description">
                            <h3><?php the_sub_field('title_section'); ?></h3>
                            <p class=""><?php the_sub_field('text_section'); ?></p>
                        </div>

                        <div class="nav-left">
                            <ul>
                                <li class="blue-buton"><h4><?php the_sub_field('title_1'); ?></h4></li>
                                <li class="blue-buton"><h4><?php the_sub_field('title_2'); ?></h4></li>
                            </ul>
                        </div>
                        
                        <div class="tab">
                            <div class="tab-image-wrapp">wrapp
                                <div class="tab-images">
                                    <?php
                                    $image_1 = get_sub_field('image_1');
                                    $image_2 = get_sub_field('image_2');
                                    $image_3 = get_sub_field('image_3');
                                    $image_4 = get_sub_field('image_4');
                                    if( !empty($image_1) ): ?>
                                        <img class="tab-image" src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                                    <?php endif; 
                                    if( !empty($image_2) ): ?>
                                        <img class="tab-image"" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" />
                                    <?php endif; 
                                    if( !empty($image_3) ): ?>
                                        <img class="tab-image"" src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" />
                                    <?php endif; 
                                    if( !empty($image_4) ): ?>
                                        <img class="tab-image"" src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div>
                                <h4><?php the_sub_field('title_1'); ?></h4>
                                <h4><?php the_sub_field('title_2'); ?></h4>
                                <h4><?php the_sub_field('title_3'); ?></h4>
                                <h4><?php the_sub_field('title_4'); ?></h4>
                                <p class=""><?php the_sub_field('text_1'); ?></p>
                                <p class=""><?php the_sub_field('text_2'); ?></p>
                                <p class=""><?php the_sub_field('text_3'); ?></p>
                                <p class=""><?php the_sub_field('text_4'); ?></p>
                            </div>
                        </div>

                        <div class="nav-rigth">
                            <ul>
                                <li class="blue-buton"><h4><?php the_sub_field('title_3'); ?></h4></li>
                                <li class="blue-buton"><h4><?php the_sub_field('title_4'); ?></h4></li>
                            </ul>
                        </div>
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
                <?php // layout_7
                elseif ($layout === 'section7'): ?>
                    <div class="section7">
                        <div class="section7__wrapper">
                            <div class="section7__image">
                                <?php
                                $image = get_sub_field('image');
                                if( !empty($image) ): ?>

                                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="section7__description">
                                <h3 class=""><?php the_sub_field('title'); ?></h3>
                                <p class=""><?php the_sub_field('text'); ?></p>                                  
                            </div>
                             <div class="section7__url">
                                <?php
                                $link_1 = get_sub_field('link_1');
                                if ($link_1):
                                    $link_url = $link_1['url'];
                                    $link_title = $link_1['title'];
                                    $link_target = $link_1['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="blue-buton" href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                                <?php
                                $link_2 = get_sub_field('link_2');
                                if ($link_2):
                                    $link_url = $link_2['url'];
                                    $link_title = $link_2['title'];
                                    $link_target = $link_2['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="blue-buton" href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php // layout_8
                elseif ($layout === 'section8'): ?>
                    <div class="section8">
                        <div class="section8__wrapper">
                            <div class="section8__description">
                                <h3 class=""><?php the_sub_field('title'); ?></h3>
                                <p class=""><?php the_sub_field('text_area'); ?></p>
                            </div>
                            <div class="section8__image">
                                <?php
                                $image = get_sub_field('image');
                                if( !empty($image) ): ?>

                                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php // layout_9
                elseif ($layout === 'section9'): ?>
                    <div class="section9">
                        <div class="section9__wrapper">
                            <div class="section9__image">
                                <?php
                                $image = get_sub_field('image');
                                if( !empty($image) ): ?>
                                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="section9__description">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    </div>


            <?php endif;
        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>