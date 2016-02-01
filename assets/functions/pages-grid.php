<?php 
function pages_grid_classes( $id ) {
	echo 'columns ';
	switch ($id) {
		case 1:
			echo 'medium-12';
			break;
		default:
			echo 'medium-6 ';
	}
}

function pages_grid_panel_classes ($id ) {
	if ($id == 1) 
		echo 'callout ';
	/*switch ($id) {
		case 1:
		case 2:
		case 4:
			echo 'text-left ';
			break;
		case 3:
		case 5:
			echo 'text-right ';
			break;
	}*/
	echo 'panel transpanel';
}
function pages_grid_img_classes( $id ) {
	/*if ($id == 3 || $id == 4)
		echo 'small';*/
}
?>