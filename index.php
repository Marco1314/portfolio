<?php get_header(); ?>
<body>
        <div class="page">
                <?php get_template_part("content/standards/navigation/navigation"); ?>
                <?php get_template_part("content/elements/hero/hero"); ?>

                <!-- Content -->

                <?php
                        // Check value exists.
                        if( have_rows('content') ):

                        // Loop through rows.
                        while ( have_rows('content') ) : the_row();

                                // Case: Paragraph layout.
                                if( get_row_layout() == 'textimage' ):
                                $image = get_sub_field('image');
                                $text = get_sub_field('text');
                                $headline_type = get_sub_field('headline_type'); 
                                $headline_top = get_sub_field('headline_top');      
                                $headline = get_sub_field("headline");

                                        get_template_part("content/elements/textimage/textimage");
                                        textimage($text, $image, $headline_type, $headline_top, $headline);

                                // Case: Download layout.
                                elseif( get_row_layout() == 'download' ): 
                                $file = get_sub_field('file');
                                // Do something...
                                endif;

                        // End loop.
                        endwhile;

                        // No value.
                        else :
                        // Do something...
                        endif;
                ?>
        </div>
<?php get_footer(); ?>
</body>
</html>