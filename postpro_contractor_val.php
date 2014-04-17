 //set as per professional contractor with margin applied
 
 
 
 <?php
 $get= sql_query("SELECT postpro_fee, logging_fee, footage, edit_com, edit_nar, edit_mus, color_com, color_nar, color_mus, trans, plate, sec FROM tws_contractor_skills WHERE first_name='Winston'")
 $postpro_fee=$get['postpro_fee'];
 $logging_fee=$get['logging_fee'];
 
 $man_hrs_per_footage = $get['footage'];
 $man_hrs_per_edit_com = $get['edit_com'];
 $man_hrs_per_edit_nar = $get['edit_nar'];
 $man_hrs_per_edit_mus = $get['edit_mus'];
 $man_hrs_per_color_com = $get['color_com'];
 $man_hrs_per_color_nar = $get['color_nar'];
 $man_hrs_per_color_mus = $get['color_mus'];
 $man_hrs_per_trans = $get['trans'];
 $man_hrs_per_plate = $get['plate'];
 $man_hrs_per_sec = $get['sec'];
 
 ?>