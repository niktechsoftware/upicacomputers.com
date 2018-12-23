<?php 
	include_once"db.php";
	$id = $_POST['id'];
	$enroll = $_POST['enroll'];
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$city = $_POST['city'];
	$cat = $_POST['cat'];
	$ccode = $_POST['ccode'];
	$scenter = $_POST['scenter'];
	$img = $_FILES['img'];
	$p = $img["name"];
	$course = $_POST['course'];
	$gender = $_POST['gender'];
	
	$check = "select * from c_varification where id = '$id'";
	$res = mysql_query($check);
	
	$len = mysql_num_rows($res);
	
	if($len <= 0)
	{
		$insert = "insert into c_varification (enrollment,name,fname,mname,city,cat,center_code,study_center,grade,image,course,gender) values('$enroll','$name','$fname','$mname','$city','$cat','$ccode','$scenter','$id','$p','$course','$gender')";
		
		if(!mysql_query($insert))
		{
			die ('Error: ' . mysql_error());
		}
		else
		{
		move_uploaded_file($_FILES["img"]["tmp_name"],"photo/".$_FILES["img"]["name"]);
		header("Location:c_varification.php?i=1");
		}
	}

?>