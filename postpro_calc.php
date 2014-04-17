//model
<?php
 //set calculation variables
 include 'postpro_contractor_val.php';

//cost breakdown using switch statement
//logging
$logging_calc(){
$footage = (float)$_POST['footage'];
$logging_total=$footage*$logging_fee*$man_hrs_per_footage;
$footage = 0;
return $logging_total;
}
//edit
$edit_calc(){
$vidtype = $_POST['vidtype'];
$duration = (float)$_POST['duration'];
switch ($vidtype) {
	case 'commercial':
		$edit_total = $duration*$postpro_fee*$man_hrs_per_edit_com;
	break;
	
	case 'narrative':
		$edit_total= $duration*$postpro_fee*$man_hrs_per_edit_nar;
	break;
    
    case 'music_video':
		$edit_total= $duration*$postpro_fee*$man_hrs_per_edit_mus;
	break;
	default:
		echo "<div id='form-error'>Please select a video type!</div>"; /* create an id for this in CSS*/
		$edit_total=0;
	break; 
	}
$vidtype = 0;
$duration = 0;
return $edit_total;
}
//color 
$colors_calc(){
$vidtype = $_POST['vidtype'];
$colors = (int)$_POST['colors'];
switch ($vidtype) {
	case 'commercial':
		$colors_total = $colors*$postpro_fee*$man_hrs_per_color_com;
	break;
	
	case 'narrative':
		$colors_total= $colors*$postpro_fee*$man_hrs_per_color_nar;
	break;
    
    case 'music_video':
		$colors_total= $colors*$postpro_fee*$man_hrs_per_color_mus;
	break;
	default:
		echo "<div id='form-error'>Please select a video type!</div>"; /* create an id for this in CSS*/
		$colors_total=0;
	break; 
	}  
$vidtype = 0;
$colors = 0;	
 return $colors_total;
}
 
 
//graphics
$graphics_calc() {
$motion_graphics = (int)$_POST['motion_graphics'];
$graphics_plates = (int)$_POST['graphics_plates'];
$graphics_length = (float)$_POST['graphics_length'];
$graphics_total= ($motion_graphics*$postpro_fee*$man_hrs_per_trans) + ($graphics_plates*$postpro_fee*$man_hrs_per_plate) + ($graphics_length*$postpro_fee*$man_hrs_per_sec);
$motion_graphics = 0;
$graphics_plates = 0;
$graphics_length = 0;
return $graphics_total;
}
//send this to viewer
$postpro_pricing() {
return $logging_calc()+$edit_calc()+$colors_calc()+$graphics_calc();
}
//send this to viewer
$days_needed_calc(){
return ($logging_calc())/$logging_fee)+($edit_calc()+$colors_calc()+$graphics_calc())/(2*$postpro_fee);
}
?>


