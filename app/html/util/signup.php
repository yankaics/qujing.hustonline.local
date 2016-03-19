<?php
	$con = mysql_connect("127.0.0.1","root","Hustonline87542701");
	if(!$con){
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("qujing", $con);

	$sql = "INSERT INTO baoming(name,sex,grade,phone,wechat,intro,help_id) 
		VALUES ('$_POST[name]','$_POST[gender]','$_POST[grade]','$_POST[phone]','$_POST[wechat]','$_POST[intro]','$_POST[help_id]')";
	
	if((strlen($_POST['name'])==0)||(strlen($_POST['gender'])==0)||(strlen($_POST['grade'])==0)||(strlen($_POST['phone'])==0)||(strlen($_POST['wechat'])==0)||(strlen($_POST['intro'])==0)){
		echo "EMPTY";	
	}else{
		if (!mysql_query($sql,$con)){
		 	echo "0";
		  }else{
		  	echo "1";
		  }
	}
	mysql_close($con)
?>