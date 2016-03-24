<?php
	$con = mysql_connect("localhost","root","Hustonline87542701");
	if(!$con){
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("qujing", $con);

	$sql = "INSERT INTO helper(name,title,skill_intro,person_intro,subject_intro,skill_price,skill_time,see_num,avatar)
		VALUES ('$_POST[name]','$_POST[title]','$_POST[skill_intro]','$_POST[person_intro]','$_POST[subject_intro]','$_POST[skill_price]','$_POST[skill_time]','$_POST[see_num]','$_POST[avatar]')";
	
	if((strlen($_POST['name'])==0)||(strlen($_POST['title'])==0)||(strlen($_POST['skill_intro'])==0)||(strlen($_POST['person_intro'])==0)||(strlen($_POST['subject_intro'])==0)||(strlen($_POST['skill_price'])==0)||(strlen($_POST['skill_time'])==0)||(strlen($_POST['avatar'])==0)){
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