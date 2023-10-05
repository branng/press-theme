<?php 
/*
* Delete autop contact form
* referencia: https://pineco.de/snippets/remove-p-tag-from-contact-form-7/
*/
add_filter('wpcf7_autop_or_not', '__return_false');