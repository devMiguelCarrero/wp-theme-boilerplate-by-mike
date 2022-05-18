<div class="wtb-section">
    <div class="compressed-container">
        <?php

        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'wp-theme-boilerplate-by-mike') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'wp-theme-boilerplate-by-mike') . '</span> <span class="nav-title">%title</span>',
            )
        );

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    </div>
</div>