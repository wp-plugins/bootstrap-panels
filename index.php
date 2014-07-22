<?php
/**
 * Plugin Name: Bootstrap Panels
 * Plugin URI: http://webcodingplace.com/bootstrap-panels/
 * Description: A simple way to create bootstrap panels in non-bootstrap sites .
 * Version: 1.6
 * Author: Rameez
 * Author URI: http://webcodingplace.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

class nm_bspanels extends WP_Widget {

	function __construct() {
		$param = array(
			'description' 	=> 	'Creates bootstrap panels',
			'name'			=>	'Bootstrap Panels'
		);

		parent::__construct('nm_panels','',$param);
	}

	public function form($instance) {
		extract($instance);
	
	include_once('panel-widgets.php');

	}

	public function widget($args, $instance) {
	
		extract($args);
		extract($instance);
	?>
	<style>
	<?php 
		include_once('panels-style.php');
	?>
	</style>
		<div class="panel panel-<?php echo $color; ?>">
		  <div class="panel-heading">
		    <h3 class="panel-title"><?php echo $title; ?></h3>
		  </div>
		  <div class="panel-body">
		    <?php echo $content; ?>
		  </div>
		</div>

	<?php
	}
	
}

add_action ('widgets_init','nm_register_bspanels');

function nm_register_bspanels(){
	register_widget('nm_bspanels');
}
 ?>