<?php
/*
Template Name: Faq Page
Template Post Type: page
*/
?>

<?php get_header(); ?>
<div class="main-container">

    <?php
    if (have_rows('faq_page')):
        while (have_rows('faq_page')) : the_row();
            // get layout
            $layout = get_row_layout();
            // layout_1
            if ($layout === 'section1'): ?>
            	<div>
            		<h3><?php the_sub_field('title_page'); ?></h3>
            	</div>


            	<div>
            		<?php if( have_rows('content') ): ?>

                    <ul class="">

                    <?php while( have_rows('content') ): the_row(); 

                        // vars
                       
                        $text = get_sub_field('text');
                        $title = get_sub_field('title');

                        ?>

                        <li class="">

                            
                            <div class="question-wrapper">
                                <h4 class=""><?php echo $title; ?></h4>
                            </div>
                            <div class="answer-wrapper">
                                <?php echo $text; ?>
                            </div>


                         </li>

                    <?php endwhile; ?>

                    </ul>

                <?php endif; ?>
            	</div>

            <?php endif;
        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>