<?php
// 메일발송
if ($_POST['mode'] == "inquiry") {

	$fromMail = "cs@maison21g.kr";
	$toMail = "cs@maison21g.kr";
	$subject = "[메종-향구독서비스] ".$_POST['name']."님 상담문의가 접수되었습니다.";

	$header = "Return-Path: <".$fromMail.">\r\n";
	$header .= "From: <".$fromMail.">\r\n";
	$header .= "X-Sender: <".$fromMail.">\r\n";
	$header .= "X-Mailer: PHP\r\n";
	$header .= "Reply-To:<".$fromMail.">\r\n";
	$header .= "MIME-Version: 1.0\r\n";                                  // MIME 버전 표시
	$header .= "Content-Type: text/html; charset=utf-8\r\n";
	$header .= "Content-Transfer-Encoding: base64 \r\n\r\n";

	// --- 이메일 본문 생성 --- //  
	$mail_content.= "<br>이름 / 사업자명 : ".$_POST['name']."\r\n";
	$mail_content.= "<br>이메일 : ".$_POST['email']."\r\n";
	$mail_content.= "<br>공간 선택 : ".$_POST['q1']."\r\n";
	$mail_content.= "<br>비스포크 향 컨설팅 희망 : ".$_POST['q2']."\r\n";
	$mail_content.= "<br><br>[문의내용]<br>".$_POST['contents']."\r\n";

	$mail_content = chunk_split(base64_encode($mail_content));
	$mailbody = stripslashes($mail_content)."\r\n";

	$rs = mail($toMail,$subject,$mailbody,$header);

	?><script>
	alert("문의내용이 접수되었습니다. 감사합니다.");
	parent.location.reload();
	</script><?php
}
?>