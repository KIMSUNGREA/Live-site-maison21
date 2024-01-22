<?php include "./_head.php"; ?>
        <!-- 메인 컨텐츠 1 -->
        <section class="sec1">
            <img src="/assets/images/sec1.png" alt="" class="sec1_bg sec1_pc">
            <img src="/assets/images/mob_sec1.png" alt="" class="sec1_bg sec1_mob">
            <div class="main_wrap">
                <div class="text_box">
                    <h2>We create <br class="mob">your scent</h2>
                    <p>
                    고객님 만의 살아 숨쉬는 향기로운 공간이자,<br>
                    향기의 집을 경험해보시길 바랍니다.
                    </p>
                    <a href="/page/inquiry/index.php" class="mob">문의하기</a>
                </div>
            </div>
        </section>
        <!-- 메인 컨텐츠2 -->
        <section class="sec2">
            <div class="main_wrap">
                <dl class="sec2_box">
                    <dt>
                        <h2>향 구독 서비스</h2>
                        <p>
                            메종 21G의 49가지 센트는 IFF-LMR Naturals 향료를 바탕으로<br class="pc">
                            세계적인 조향사들이 디자인하여 Top, Middle, Bottom Note로<br class="pc">
                            각각의 고유한 Note를 가지고 있는 오 드 퍼퓸입니다.
                        </p>
                        <p>
                            고객의 취향과 성격을 담아내는 메종 21G의 비스포크 오 드 퍼퓸은<br class="pc"> 
                            블렌딩 했을 때 완벽한 앙상블을 이루기 위해 향기의 밸런스가<br class="pc">
                            조화롭도록 섬세하게 디자인 되어 있습니다.<br class="pc"> 
                            Maison 21G의 전문성 있는 비스포크 퍼퓸 컨설팅을 통해<br class="pc"> 
                            고객님 만의 살아 숨쉬는 향기로운 공간이자, 향기의 집을<br class="pc">
                            경험해보시길 바랍니다.
                        </p>
                    </dt>
                    <dd>
                        <img src="/assets/images/sec2.png" alt="">
                    </dd>
                </dl>
                <h3><img src="/assets/images/sec2_text.png" alt=""></h3>
            </div>
        </section>
        <!-- 메인 컨텐츠3 -->
        <section class="sec3">
            <img src="/assets/images/sec3.png" alt="" class="sec3_bg">
            <div class="main_wrap">
                <div class="tit">
                    <h2>서비스 제품</h2>
                    <p>매종 21G 공간을 만나보세요</p>
                </div>
                <ul class="list">
                    <li>
                        <a href="/page/service/hotel.php">
                            <figure><img src="/assets/images/sec_list1.png" alt=""></figure>
                            <figcaption class="pd_y">호텔/리조트</figcaption>
                        </a>
                    </li>
                    <li>
                        <a href="/page/service/shopping.php">
                            <figure><img src="/assets/images/sec_list2.png" alt=""></figure>
                            <figcaption class="pd_y">쇼핑몰/백화점</figcaption>
                        </a>
                    </li>
                    <li>
                        <a href="/page/service/officetels.php">
                            <figure><img src="/assets/images/sec_list3.png" alt=""></figure>
                            <figcaption class="pd_y">오피스/빌딩/사무공간</figcaption>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- 메인 컨텐츠4 -->
        <section class="sec4">
            <div class="main_wrap">
<form name="dataform" action="/send_mail.php" method="post" target="rt_ifrm">
<input type="hidden" name="mode" value="inquiry">
                <div class="tit">
                    <h2 class="bk">향 구독서비스 문의</h2>
                    <p class="bk">
                        IFF-LMR Naturals 향료를 바탕으로 세계적인 조향사가 직접 조향한 메종21G의 Scented Artwork를 만나보세요.<br class="pc">
                        고객님께서 작성해주신 문의 내용을 참고하여 취향과 성격을 담아내는 맞춤형 공간 향을 제안합니다. 
                    </p>
                </div>
                <div class="check_box">
                    <dl>
                        <dt>이름 / 사업자명</dt>
                        <dd>
                            <input type="text" name="name" placeholder="이름을 입력해주세요" class="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt>이메일</dt>
                        <dd>
                            <input type="text" name="email" placeholder="이메일을 입력해주세요" class="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt>공간 선택</dt>
                        <dd>
                            <div class="rd_box flex">
                                <dl>
                                    <dt>
                                        <input type="radio" name="q1" value="소형 공간(~20평 미만)" checked>
                                    </dt>
                                    <dd>
                                        <p>소형 공간(~20평 미만)</p>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        <input type="radio" name="q1" value="중형 공간(20평~100평 미만)">
                                    </dt>
                                    <dd>
                                        <p>중형 공간(20평~100평 미만)</p>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        <input type="radio" name="q1" value="대형 공간(100평 이상)">
                                    </dt>
                                    <dd>
                                        <p>대형 공간(100평 이상)</p>
                                    </dd>
                                </dl>
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>비스포크 향<br class="pc">컨설팅 희망 선택</dt>
                        <dd>
                            <div class="rd_box no_sb">
                                <dl>
                                    <dt>
                                        <input type="radio" name="q2" value="예" checked>
                                    </dt>
                                    <dd>
                                        <p>예</p>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        <input type="radio" name="q2" value="아니오">
                                    </dt>
                                    <dd>
                                        <p>아니오</p>
                                    </dd>
                                </dl>
                            </div>
                        </dd>
                    </dl>
                    <dl>                        
			<dt>문의사항</dt>
                        <dd>
                            <textarea name="contents"></textarea>
                        </dd>
                    </dl>
                    <dl>
                        <dt>이용동의</dt>
                        <dd class="ck">
                            <input type="checkbox" class="check" id="agree">
                            <p>개인정보처리방침<span>[내용보기]</span></p>
                        </dd>
                    </dl>
                </div>
</form>
                <button class="send" onclick="gomail()">문의하기</button>
            </div>
        </section>
    <script>
	function gomail() {
		var f = document.dataform;
		if (f.name.value == "") {
			alert("이름/사업자명을 입력해 주세요.");
			f.name.focus();
		} else if (f.email.value == "") {
			alert("이메일을 입력해 주세요.");
			f.email.focus();
		} else if (f.q1.value == "") {
			alert("공간을 선택해 주세요.");
			f.q1.focus();
		} else if (f.q2.value == "") {
			alert("비스포크향 컨설팅 여부를 선택해 주세요.");
			f.q2.focus();
		} else if (f.contents.value == "") {
			alert("문의내용을 작성해 주세요.");
			f.contents.focus();
		} else {
			if ($('#agree').is(':checked')) {
				f.submit();
			} else {
				alert("개인정보처리방침에 동의해 주세요.");
			}
		}
	}

        document.addEventListener('DOMContentLoaded', function () {
            // 모든 <p> 요소를 가져오기
            var paragraphs = document.querySelectorAll('.rd_box dd p');

            // 각 <p> 요소에 onclick 이벤트 추가
            paragraphs.forEach(function (paragraph, index) {
                paragraph.onclick = function () {
                    // 현재 클릭한 <p> 요소의 인덱스를 찾기
                    // 해당 인덱스의 라디오 버튼을 선택
                    var radioBtn = document.querySelectorAll('.rd_box dl input[type="radio"]')[index];
                    radioBtn.checked = true;
                };
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            // <p> 요소를 가져오기
            var paragraph = document.querySelector('.ck p');

            // <p> 요소에 onclick 이벤트 추가
            paragraph.onclick = function () {
                // checkbox 요소 가져오기
                var checkbox = document.getElementById('agree');

                // checkbox의 선택 상태 변경
                checkbox.checked = !checkbox.checked;
            };
        });
        </script>
	<iframe name="rt_ifrm" id="rt_ifrm" style="width:100%;height:700px;display:none;"></iframe>
<?php include "./_tail.php"; ?>