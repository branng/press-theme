<?php
/**
 * 
 * EXAMPLES
 * // Obtenemos los tags y las categorías del post actual
 * $tags = get_the_tags();
 * $categories = get_the_category();
 * 
 * // Mostramos los tags y las categorías
 * display_terms($tags, 'Tags');
 * display_terms($categories, 'Categorías');C
 */
function display_terms($terms, $label) {
    if ($terms) :
        ?>
        <div class="total">
            <p>
                <strong class="uppercase ht-body-s u-bold u-tracking-100-100"><?= esc_html($label); ?>: </strong>
                <?php
                $termList = [];
                foreach ($terms as $term) :
                    $termLink = esc_url(get_term_link($term->term_id));
                    $termName = esc_html($term->name);
                    $termList[] = "<a href='{$termLink}' title='{$termName}' class='uppercase ht-body-s u-bold u-tracking-100-100 u-color-one'>{$termName}</a>";
                endforeach;
                echo implode(', ', $termList);
                ?>
            </p>
        </div>
        <?php
    endif;
}
