<?php
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$add = $_POST['add'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$col = $_POST['col'];
	$course = $_POST['course'];
	$email = $_POST['email'];
	$moblie = $_POST['mobile'];
	
    $from = "info@hwebs.in";
    $subject = "Registration Confermed";

    //begin of HTML message
    $message = <<<EOF
<html>
	<style type="text/css">
	table tr td{
	border:1px #000 solid;
	}
	</style>
  <body>
   <table width="800">
	<tr>
		<td colspan="2" align="center">Your Registration Compleated Successfully. We will touch with you soon.</td>
	</tr>
	<tr>
		<td width="30%">Name : </td> 
		<td>$name</td>
	</tr>
	<tr>
		<td width="30%">Father Name : </td> 
		<td>$fname</td>
	</tr><tr>
		<td width="30%">Address</td> 
		<td>$add</td>
	</tr><tr>
		<td width="30%">City</td> 
		<td>$city</td>
	</tr><tr>
		<td width="30%">State</td> 
		<td>$state</td>
	</tr><tr>
		<td width="30%">College</td> 
		<td>$col</td>
	</tr><tr>
		<td width="30%">Want to joine Course</td> 
		<td>$course</td>
	</tr><tr>
		<td width="30%">Email</td> 
		<td> $email </td>
	</tr>
	<tr>
		<td width="30%">Mobile No.</td> 
		<td> $moblie </td>
	</tr>
</table>

      <br><br>*** Thank You *** <br> Regards<br>Upica Institute
  </body>
</html>
EOF;
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    
    // now lets send the email.
    $to = "arvind.balwant@gmail.com";
    mail($to, $subject, $message, $headers);
		//---------------------------------------------------------mail code close ---------------------------------------------------------
		header("Location:apply.php?i=$course&j=1");
?>