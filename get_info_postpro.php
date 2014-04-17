<?php
//controller
//set up header and wrapper from outside on the wordpress page
function $postpro_questionaire() {


 echo           "<div id='form_inputs1'>";
 echo               "<form action='#' id='form_options' method='post'>";// use new page name and include 'postpro_calc.php'
 echo                   "<p>What kind of video do you need edited?</p>";
 echo                   "<input type='radio' name='vidtype' value='commercial'>Commercial";
 echo                   "<input type='radio' name='vidtype' value='narrative'>Documentary/Narrative";
 echo                   "<input type='radio' name='vidtype' value='music_video'>Music Video/Montage<br/><br/>";
                    
 echo                   "<p>What is the target duration of the edited video?</p>";
 echo                   "<input type='text' name='duration' value='No. of minutes (x.xx)'><br/>";
                    
 echo                   "<p>How many hours of footage do you have?</p>";
 echo                   "<input type='text' name='footage' value='No. of hours(x.xx)'><br/>";
                    
 echo                   "<p>What is the target duration of the edited video?</p>";
 echo                   "<input type='text' name='duration' value='No. of minutes (x.xx)'><br/>";
                    
 echo                   "<p>How many scene changes do you need colored?</p>";
 echo                   "<input type='text' name='colors' value='No. of number of scenes'><br/>";
                    
 echo                   "<p>How many transitions with motion graphics (because of change of time or idea)?</p>";
 echo                   "<input type='text' name='motion_graphics' value='No. of transitions'><br/>";
                    
 echo                   "<p>How many graphics plates (full screens or lower third)?</p>"
 echo                   "<input type='text' name='graphics_plates' value='No. of plates'><br/>";
                    
 echo                    "<p>How many seconds of animation do you need for each plate?</p>";
 echo                   "<input type='text' name='graphics_length' value='No. of seconds (x.xx)'><br/>";
                      
 echo                   "<input type='submit' value='submit'>";
 echo               "</form>";
 
 echo           "</div>";
 }

//save registration for future use
$email_quote_form(){
 echo           "<div id='form_inputs2'>";
 
 echo               "<form name='input' action='#' method='post'>";//use new page names and include 'accounts_dispatch.php'
 //collect user data
 echo           	    "First name: <input type='text' name='firstname' value='first name'><br/>";
 echo           	    "Last name: <input type='text' name='lastname' value='last name'><br/>";
 echo           	    "E-mail: <input type='email' name='email' value='e-mail address'><br/><br/>";
 echo               "</form>";
 echo           "</div>";
 //collect project data

 echo           "<div>";
 echo               "<form id='form_options' method='post'>";

 echo                   "<input type='checkbox' name='notify' value='updates' checked>I'd like to send this quote off as my purchase order.<br/>";
 echo                   "<input type='checkbox' name='notify' value='quote'>I'd like to receive a copy of of my quote via email.<br/><br/>";
 
 echo                   "<input type='submit' value='submit'>";
 echo				"</form>"
 echo			"</div>"
 }
?>


