<?php
if (isset($categories)) :
    foreach ($categories as $category) :
?>
        <a href="<?php echo get_category_link($category->term_id); ?>">
            <span class="term-item term-item--category categor-<?php echo $category->term_id; ?>">
                <?php echo $category->name; ?>
            </span>
        </a>
<?php
    endforeach;
endif;
