<?php
/*
Template Name: Home Page
Template Post Type: page
*/
?>
<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel2/dist/owl.carousel.min.js"></script>
<?php get_header(); ?>
<div class="main-container">

    <?php
    if (have_rows('home_page')):
        while (have_rows('home_page')) : the_row();
            // get layout
            $layout = get_row_layout();
            // layout_1
            if ($layout === 'section1'): ?>
                <div class="hp-section1"
                     style="background: url(<?php the_sub_field('image'); ?>) no-repeat center;  background-size: cover;">
                    <div class="hp-section1__wrapper">
                        <h3 class="h3"><?php the_sub_field('title'); ?></h3>
                        <p class="p"><?php the_sub_field('text'); ?></p>
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
                <div class="hp-section2">
                    <div class="hp-section2__wrapper">
                        <p class="p"><?php the_sub_field('text_area'); ?></p>
                        
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
                <div class="hp-section3">
                    <div class="hp-section3__wrapper">
                        <div class="hp-section3__description">
                            <h3 class="h3"><?php the_sub_field('title'); ?></h3>
                            <p class="p"><?php the_sub_field('text_area'); ?></p>
                        </div>
                        <div  class="hp-section3__image">
                            <?php
                            $image = get_sub_field('image');
                            if( !empty($image) ): ?>

                                <img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php // layout_4
            elseif ($layout === 'repeater'): ?>
                <div class="hp-section4">
                <h3 class="h3"><?php the_sub_field('title_section'); ?></h3>
                <?php if( have_rows('gallery') ): ?>

                    <ul class="flex">

                    <?php while( have_rows('gallery') ): the_row(); 

                        // vars
                        $image = get_sub_field('image');
                        $content = get_sub_field('content');
                        $title = get_sub_field('title');

                        ?>
                        <li class="">
                            <div class="hp-section4__image">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                <div class="fon-blue">
                                    <h4 class=""><?php echo $title; ?></h4>
                                    <?php echo $content; ?>
                                </div>
                            </div>
                         </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                </div>
                <?php // layout_5
                elseif ($layout === 'carousel'): ?>
                    <div class="hp-section5">
                        <div class="hp-section5__wrapper">
                            <h3 class="h3"><?php the_sub_field('title_section'); ?></h3>
                           
                             
                              <div class="owl-carousel owl-theme">
                                 <?php if( have_rows('slider') ): ?>
                                    <?php while( have_rows('slider') ): the_row(); 
                                        // vars
                                        $image = get_sub_field('image');
                                        $text = get_sub_field('text');
                                        $title = get_sub_field('title');
                                    ?>
                                <div class="item">
                                    <div class="image">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                    </div>
                                    <div class="title">
                                        <h4 class=""><?php echo $title; ?></h4>
                                    </div>
                                    <div class="subtitle p"><?php echo $text; ?></div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            
                        </div>

                    </div>
                <?php // layout_6
                elseif ($layout === 'section6'): ?>
                    <div class="hp-section6">
                        <div class="hp-section6__description">
                            <h3 class="h3"><?php the_sub_field('title_section'); ?></h3>
                            <p class="p"><?php the_sub_field('text_section'); ?></p>
                        </div>
                        <div class="flex">
                            <div class="nav-left">
                                <ul>
                                    <li class="white-buton"><h4><?php the_sub_field('title_1'); ?></h4></li>
                                    <li class="white-buton"><h4><?php the_sub_field('title_2'); ?></h4></li>
                                </ul>
                            </div>
                            
                            <div class="tab">
                                <div class="tab-image-wrapp">
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
                                <div class="tab-descript-wrapp">
                                    <h4 class="active"><?php the_sub_field('title_1'); ?></h4>
                                    <h4><?php the_sub_field('title_2'); ?></h4>
                                    <h4><?php the_sub_field('title_3'); ?></h4>
                                    <h4><?php the_sub_field('title_4'); ?></h4>
                                    <p class="p active"><?php the_sub_field('text_1'); ?></p>
                                    <p class="p"><?php the_sub_field('text_2'); ?></p>
                                    <p class="p"><?php the_sub_field('text_3'); ?></p>
                                    <p class="p"><?php the_sub_field('text_4'); ?></p>
                                </div>
                            </div>

                            <div class="nav-rigth">
                                <ul>
                                    <li class="white-buton active-nav"><h4><?php the_sub_field('title_3'); ?></h4></li>
                                    <li class="white-buton"><h4><?php the_sub_field('title_4'); ?></h4></li>
                                </ul>
                            </div></div>
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
                    <div class="hp-section7">
                        <div class="hp-section7__wrapper">
                            <div class="hp-section7__image">
                                <?php
                                $image = get_sub_field('image');
                                if( !empty($image) ): ?>

                                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="hp-section7__description">
                                <h3 class="h3"><?php the_sub_field('title'); ?></h3>
                                <p class="p"><?php the_sub_field('text'); ?></p>                                  
                            </div>
                             <div class="hp-section7__url">
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
                    <div class="hp-section8">
                        <div class="hp-section8__wrapper">
                            <div class="hp-section8__description">
                                <h3 class="h3"><?php the_sub_field('title'); ?></h3>
                                <p class="p"><?php the_sub_field('text_area'); ?></p>
                            </div>
                            <div class="hp-section8__image">
                                <?php
                                $image = get_sub_field('image');
                                if( !empty($image) ): ?>

                                    <img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php // layout_9
                elseif ($layout === 'section9'): ?>
                    <div class="hp-section9">
                        <div class="hp-section9__wrapper">
                            <div class="hp-section9__image">
                                <?php
                                $image = get_sub_field('image');
                                if( !empty($image) ): ?>
                                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="hp-section9__description">
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