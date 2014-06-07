<?php 

/* Remove Unwanted Admin Menu Items */

function remove_admin_menu_items() {
	$remove_menu_items = array(__('Links'), __('Comments'), __('Media'), __('Tools'), __('Dashboard'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}

add_action('admin_menu', 'remove_admin_menu_items');

?>


<!-- http://camwebdesign.com/techniques/simplify-the-wordpress-admin-sidebar-navigation/ -->
<!-- https://managewp.com/wordpress-admin-sidebar-remove-unwanted-items -->