<?php
                   
            $hostname = "contr9551.db.5869853.hostedresource.com";
            $username = "contr9551";
            $dbname = "contr9551";

            //These variable values need to be changed by you before deploying
            $password = "Contr@ctor321";
            $usertable = "contractor_rec";
            $yourfield = "c_username";
        
            //Connecting to your database
            $con=mysqli_connect($hostname,$username,$password,$dbname);

			// Check connection
			if (mysqli_connect_errno($con))
  			{
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
  			}
            
            //new record... complete field entries
            $dt1 = date("Y-m-d");
            $pd = true;
            $dt2 = (date('Y')+1).date('-m-d')
            $sql="INSERT INTO Persons (firstname, lastname, c_username, c_password, email, phone_num, street1, street2, city, province, zip, country, portfolio_site, postpro_fee, logging_fee, footage, edit_com, edit_nar, edit_mus, color_com, color_nar, color_mus, trans, plate, sec, member_since, paid, paid_until, newsletter)
			VALUES
			('$_POST[firstname]','$_POST[lastname]','$_POST[c_username]', '$_POST[c_password]', '$_POST[email]', '$_POST[phone_num]', '$_POST[street1]', '$_POST[street2]', '$_POST[city]', '$_POST[province]', '$_POST[zip]', '$_POST[country]', '$_POST[portfolio_site]', '$_POST[postpro_fee]', '$_POST[logging_fee]', '$_POST[footage]', '$_POST[edit_com]', '$_POST[edit_nar]', '$_POST[edit_mus]', '$_POST[color_com]', '$_POST[color_nar]', '$_POST[color_mus]', '$_POST[trans]', '$_POST[plate]', '$_POST[sec]', '$dt1', '$pd', '$dt2', '$_POST[newsletter]')";

			if (!mysqli_query($con,$sql))
  			{
  			die('Error: ' . mysqli_error($con));
  			}
			echo "1 record added";

			mysqli_close($con);

?>