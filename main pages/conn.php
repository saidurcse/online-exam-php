        <?php
		$con = mysql_connect("localhost","saidur_saidur2","yeamin99");
         if (!$con)
         {
            die('Could not connect: ' . mysql_error());
         }
         mysql_select_db("saidur_onlineexam", $con);
		?>