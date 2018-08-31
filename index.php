<?php
// /X-COder /
$trgt = $_POST['target'];
$sbjct = $_POST['subject'];
$msg = $_POST['body_msg'];
$frm = "From: ".$_POST['victim'];
$rply_2 = "Reply-To: ".$_POST['return_mail'];
$rtrn_pth = "Return-Path: ".$_POST['return_mail'];
if (isset($trgt) && isset($msg) && isset($frm)) {
		if ($trgt == null || $trgt=="" ||  $msg==null || $msg=="" && $frm==null || $frm=="" || $sbjct==null && $sbjct=="") {
		$page = <<< EOPAGE
<!DOCTYPE html>
<!--coded by X-C0der -->
<html>
<head>
	<title>X-C0der</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="head"><span>:<strong>Welcome To X-C0der's Spoof Mailing Server</strong>:</span></div>
	<div id="contents">
		<span id="failed">Your Email Has Not been Sent :( <br/>Error Encountered!</span>
	</div>
	<div id="unicode_text">
		<span>&lt;I Love&gt;<br/>&lt;Social&gt;<br/>&lt;Engineering&gt;</span>
	</div>
</body>
</html>
EOPAGE;
		echo "$page";
		die();
	}

	
	if (isset($trgt) && isset($msg) && isset($frm)) {
		$headers = $frm."\r\n".$rply_2."\r\n".$rtrn_pth."\r\n";
		$send_mail = mail($trgt, $sbjct, $msg, $headers);
		$page_success = <<< EOPAGE
<!DOCTYPE html>
<!--coded by X-C0der -->
<html>
<head>
	<title>X-C0der</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="head"><span>:<strong>Welcome To X-C0der's Spoof Mailing Server</strong>:</span></div>
	<div id="contents">
		<span id="sent_mail">Your Email Has been Sent :)!</span>
	</div>
	<div id="unicode_text">
		<span>&lt;I Love&gt;<br/>&lt;Social&gt;<br/>&lt;Engineering&gt;</span>
	</div>
</body>
</html>
EOPAGE;
		echo "$page_success";
	}
}
else{
	$start_page = <<< EOPAGE
<!DOCTYPE html>
<!--coded by X-C0der-->
<html>
<head>
	<title>X-C0der</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="head"><span>:<strong>Welcome To X-C0der's Spoof Mailing Server</strong>:</span></div>
	<div id="contents" style="">
		<form action="index.php" method="post">
			<input type="email" name="victim" placeholder="From" /><br />
			<input type="email" name="target" placeholder="To" /><br />
			<input type="email" name="return_mail" placeholder="Reply To Optional:Better dont mention if sending Anonymously" /><br />
			<input type="text" name="subject" placeholder="Subject" /><br />
			<textarea name="body_msg" placeholder="Message" ></textarea><br />
			<button type="submit" >Send Mail</button>
		</form>
	</div>
	<div id="unicode_text">
		<span>&lt;I Love&gt;<br/>&lt;Social&gt;<br/>&lt;Engineering&gt;</span>
	</div>
</body>
</html>
EOPAGE;
	echo "$start_page";
}
?>
