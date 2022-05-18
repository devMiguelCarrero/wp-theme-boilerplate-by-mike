<?php
if (isset($tags)) :
    foreach ($tags as $tag) :
?>
        <a href="<?php echo get_tag_link($tag->term_id); ?>">
            <span class="term-item term-item--tag categor-<?php echo $tag->term_id; ?>">
                <?php echo $tag->name; ?>
            </span>
        </a>
<?php
    endforeach;
endif;
