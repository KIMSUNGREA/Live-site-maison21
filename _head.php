<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
	$redirect = 'https://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $redirect);
	exit();
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison 21G - 공간향 서비스</title>

    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/m_style.css">

	<meta name="description" content="Maison 21G의 공간향 구독 서비스는 브랜드의 공간 및 제품을 더 깊이 이해할 수 있는 완벽한 프리미엄 향기 컨설팅입니다.">
	<meta name="keyword" content="메종21G,Maison21G,공간향,향기컨설팅,향기구독">
	<meta name="robots" content="index">

	<!-- sns og tag-->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Maison 21G - 공간향 서비스">
	<meta property="og:description" content="Maison 21G의 공간향 구독 서비스는 브랜드의 공간 및 제품을 더 깊이 이해할 수 있는 완벽한 프리미엄 향기 컨설팅입니다.">
	<meta property="og:image" content="//maison21g-space.co.kr/og.png">
	<meta property="og:url" content="//maison21g-space.co.kr/">

	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">

    <script src="/assets/js/jquery-3.6.4.min.js"></script>
    <script src="/assets/js/common.js"></script>
</head>
<body>
<div class="popup">
    <div class="popup_top">
        <h1>개인정보처리방침</h1>
        <button class="cl"><img src="/assets/images/cl.png" alt=""></button>
    </div>
        <div class="pop_text_box">
            <p>메종 21G는 정보주체의 자유와 권리 보호를 위해 「개인정보 보호법」 및 관계 법령이 정한 바를 준수하여, 적법하게 개인정보를 처리하고 안전하게 관리하고 있습니다. 이에 「개인정보 보호법」 제30조에 따라 정보주체에게 개인정보 처리에 관한 절차 및 기준을 안내하고, 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보 처리방침을 수립·공개합니다. 센트온은 개인정보처리방침을 개정하는 경우 홈페이지를 통하여 고지할 것입니다.</p>

            <h2>수집하는 개인정보의 항목 및 수집방법</h2>
            <p>1&#41;수집항목<br>
            센트온은 서비스 운영에 필요한 최소한의 개인정보를 수집하고 있습니다. 수집한 개인정보는 목적 이외의 용도로는 처리하고 있지 않으며, 이용 목적 변경 시에는 사전 동의를 구할 예정입니다.
            컨설팅, 고객문의</p>

            <p>고객정보 : [필수항목] 이름, 전화번호, 이메일주소, 지역, 업체/단체명<br>
            문의내용 : [필수항목] 문의유형, 관심제품, 관심분야, 문의구분, 수량</p>

            <h2>개인정보의 처리목적</h2>
            <p>센트온은 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보 보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.</p>

            <p>1. 홈페이지 정보주체의 문의 또는 요청사항에 대한 처리</p>
            <p>2. 회사 서비스에 대한 고객의 제안 요청에 대한 처리</p>
            <p>3. 고객으로부터 위탁 받은 업무수행</p>

            <h2>개인정보의 제3자 제공에 관한 사항</h2>
            <p>센트온은 정보주체의 개인정보를 제2조(개인정보의 수집 및 이용 목적)에서 명시한 범위 내에서만 처리하고 있으며, 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우는 제3자에게 개인정보를 제공 할 수 있습니다.</p>

            <p>1. 정보주체의 사전동의를 받은 경우</p>
            <p>2. 법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 경우</p>

            <h2>개인정보의 보유 및 이용기간</h2>
            <p>센트온은 개인정보의 수집 및 이용 목적이 달성된 후에는 해당정보를 지체없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 관계법령에서 정한 일정한 기간 동안 별도 보관합니다.</p>

            <p>1. 관련 법령에 의한 개인정보 보유 기간은 다음과 같습니다.</p>
            <p>&#149;통신 비밀 보호법: 서비스 접속 및 이용 기록 3개월</p>
            <p>&#149;국세기본법: 세법이 규정하는 모든 거래에 관한 장부 및 증빙서류 5년</p>
            <p>&#149;관계 법령 위반에 따른 수사, 조사 등이 진행중인 경우에는 해당 수사 및 조사 종료시까지</p>
            <p>2. 컨설팅/고객문의 등 서비스 제공,고객관리 및 기타 정보 제공을 위하여 수집한 개인정보는 업무 목적 달성시 또는 고객의 동의 철회시까지 보관 할 수 있습니다.</p>
            
            <h2>개인정보의 파기 절차 및 방법</h2>
            <p>1&#41; 파기절차</p>
            <p>정보주체가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져(종이의 경우 별도의 서류) 내부 방침 및 기타 관련 법령에 따라 일정기간 저장 혹은 즉시 파기됩니다. 이 때, DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.</p>
            
            <p>2&#41; 파기방법</p>
            <p>종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다. 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없도록 삭제합니다.</p>
            
            <h2>개인정보의 제3자 제공에 관한 사항</h2>
            <p>센트온은 정보주체의 개인정보를 제2조(개인정보의 수집 및 이용 목적)에서 명시한 범위 내에서만 처리하고 있으며, 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우는 제3자에게 개인정보를 제공 할 수 있습니다.</p>
            
            <p>1.정보주체의 사전동의를 받은 경우</p>
            <p>2.법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 경우</p>
            
            <h2>정보주체 및 법정대리인의 권리와 그 행사 방법</h2>
            <p>1.정보주체는 센트온에 대해 언제든지 개인정보 열람·정정·삭제·처리정지 요구 등의 권리를 행사할 수 있습니다.※ 만 14세 미만 아동에 관한 개인정보의 열람등 요구는 법정대리인이 직접 해야 하며, 만 14세 이상의 미성년자인 정보주체는 정보주체의 개인정보에 관하여 미성년자 본인이 권리를 행사하거나 법정대리인을 통하여 권리를 행사할 수도 있습니다.</p>
            <p>2.권리 행사는 센트온에 대해 「개인정보 보호법」 시행령 제41조 제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며, 센트온은 이에 대해 지체없이 조치하겠습니다.</p>
            <p>3.권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수도 있습니다. 이 경우 “개인정보 처리 방법에 관한 고시(제2020-7호)” 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.</p>
            <p>4.개인정보 열람 및 처리정지 요구는 「개인정보 보호법」 제35조 제4항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.</p>
            <p>5.개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.</p>
            <p>6.센트온은 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.</p>
            
            <h2>개인정보 자동 수집 장치의 설치·운영 및 거부에 관한 사항</h2>
            <p>1.센트온은 정보주체에게 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 '쿠키(cookie)'를 사용합니다.</p>
            <p>2.쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다.</p>
            <p>1.쿠키의 사용목적: 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해 사용됩니다.</p>
            <p>2.쿠키의 설치·운영 및 거부 : 웹브라우저 상단의 도구>인터넷 옵션>개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다.</p>
            <p>3.쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생 할 수 있습니다</p>
            
            <h2>개인정보보호책임자</h2>
            <p>1.센트온은 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보보호책임자를 지정하고 있습니다.‣ 개인정보보호책임자성명 : 송찬호연락처 : 02-2051-2501, chanho.song@scenton.com‣ 개인정보보호담당자부서명 : 경영지원팀담당자 : 송찬호연락처 : 02-2051-2501, chanho.song@scenton.com</p>
            <p>2.정보주체는 센트온의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의할 수 있습니다. 센트온은 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다.</p>
            
            <h2>개인정보 열람청구</h2>
            <p>정보주체는 「개인정보 보호법」 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 센트온은 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.</p>
            
            <p>‣ 개인정보 열람청구 접수·처리 부서</p>
            
            <p>부서명 : 경영지원팀</p>
            
            <p>담당자 : 송찬호</p>
            
            <p>연락처 : Tel.02-2051-2501, Email.chanho.song@scenton.com, FAX.070-7500-2508</p>
            
            <h2>권익침해 구제방법</h2>
            <p>1.정보주체는 개인정보침해로 인한 구제를 받기 위하여 개인정보분쟁조정위원회, 한국인터넷진흥원 개인정보침해신고센터 등에 분쟁해결이나 상담 등을 신청할 수 있습니다. 이 밖에 기타 개인정보침해의 신고, 상담에 대하여는 아래의 기관에 문의하시기 바랍니다.</p>
            <p>1.개인정보분쟁조정위원회 : (국번없이) 1833-6972 (www.kopico.go.kr)</p>
            <p>2.개인정보침해신고센터 : (국번없이) 118 (privacy.kisa.or.kr)</p>
            <p>3.대검찰청 : (국번없이) 1301 (www.spo.go.kr)</p>
            <p>4.경찰청 : (국번없이) 182 (ecrm.cyber.go.kr)</p>
            <p>2.센트온은 정보주체의 개인정보자기결정권을 보장하고, 개인정보침해로 인한 상담 및 피해 구제를 위해 노력하고 있으며, 신고나 상담이 필요한 경우 아래의 담당부서로 연락해 주시기 바랍니다.‣ 개인정보보호 관련 고객 상담 및 신고부서명 : 경영지원팀담당자 : 송찬호연락처 : Tel.02-2051-2501, Email.chanho.song@scenton.com, FAX.070-7500-2508</p>
            <p>3.「개인정보 보호법」 제35조(개인정보의 열람), 제36조(개인정보의 정정·삭제), 제37조(개인정보의 처리정지 등)의 규정에 의한 요구에 대 하여 공공기관의 장이 행한 처분 또는 부작위로 인하여 권리 또는 이익의 침해를 받은 자는 행정심판법이 정하는 바에 따라 행정심판을 청구할 수 있습니다.‣ 중앙행정심판위원회 : (국번없이) 110 (www.simpan.go.kr)</p>
        </div>
    </div>
    <div id="wrap">
<!-- haeder -->
      <?php include("layout/header.php");?>
<!-- //haeder -->