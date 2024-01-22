<?php include_once("../../_head.php");?>
<!-- 서브 컨텐츠 박스 STR -->

<!-- 서브3 타이틀 -->
        <section class="sub_tit sub3">
            <div class="main_wrap">
                <div class="sub_tit_box">
                    <h2>서비스 문의</h2>
                    <p>
                        Maison 21G는 조향사와 고객의 창의성이<br>
                        모두 살아 숨쉬는 프리미엄 향기의 공간입니다.
                    </p>
                </div>
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
                        IFF-LMR Naturals 향료를 바탕으로 세계적인 조향사가 직접 조향한 메종21G의 Scented Artwork를 만나보세요.<br>
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
<!-- 서브 컨텐츠 박스 END -->
<?php include_once("../../_tail.php");?>