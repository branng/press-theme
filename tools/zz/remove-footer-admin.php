<?php 
// Admin footer modification
// https://www.templatemonster.com/help/wordpress-edit-remove-thank-creating-wordpress-text-site-admin-panel.html
function remove_footer_admin () 
{
    echo '<!--span id="footer-thankyou">Desarrollado por <a href="http://www.designerswebsite.com" target="_blank">Your Name</a></span-->';
}

add_filter('admin_footer_text', 'remove_footer_admin');