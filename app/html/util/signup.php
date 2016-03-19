<?php
	$con = mysql_connect("localhost","root","Hustonline87542701");
	if(!$con){
	  die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("qujing", $con);

	$sql = "INSERT INTO baoming(name,sex,grade,phone,wechat,intro,help_id) 
		VALUES ('$_POST[name]','$_POST[gender]','$_POST[grade]','$_POST[phone]','$_POST[wechat]','$_POST[intro]','$_POST[help_id]')";
				
	if (!mysql_query($sql,$con))
	  {
	 	echo "0";
	  }else{
	  	echo "1";
	  }
	mysql_close($con)
?>