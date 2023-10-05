<?php 
function my_wpcf7_form_elements($html) {
    $text = __('Choose one','branng');
    $html = str_replace('<option value="---">---</option>', '<option disabled selected value>' . $text . '</option>', $html);
    return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');



