<?php
/**
 * Footer Template
 *
 * This file is loaded by footer.php and used for content inside the #footer div
 *
 * @package K2
 * @subpackage Templates
 */
?>

<?php
    printf( _c('Powered by %1$s and %2$s|1:WordPress, 2:K2', 'k2_domain'),
        '<a href="http://wordpress.org/">' . __('WordPress', 'k2_domain') . '</a>',
        '<a href="http://getk2.com/" title="' . __('Loves you like a kitten.', 'k2_domain') . '">K2</a>'
    );
?>
 | 
<?php
    printf( _c('%1$s and %2$s|1:Entries Feed, 2:Comments Feed','k2_domain'),
        '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries Feed','k2_domain') . '</a>',
        '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments Feed','k2_domain') . '</a>'
    );
?>
