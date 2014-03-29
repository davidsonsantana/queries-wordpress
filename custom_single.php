<?php
$post = $wp_query->post;
if ( in_category('6') || in_category('22') || in_category('23') || in_category('24') || in_category('25') || in_category('26') || in_category('27') || in_category('28') || in_category('29') || in_category('30')) {
 include(TEMPLATEPATH . '/single_moveis.php');
} else {
 include(TEMPLATEPATH . '/single_default.php');
}
?>