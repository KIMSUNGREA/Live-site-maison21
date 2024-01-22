$(document).ready(function () {
    $(".mob_menu label").click(function(){
        $(".mob_menu_list").toggleClass("on");
    })
    
    $('input:radio[name="q1"]').change(function () {
        // 선택된 라디오 버튼의 data-index 값을 가져옴
        var selectedIndex = $(this).data('index');
    
        // 모든 라디오 버튼에서 checked 속성을 제거
        $('input:radio[name="q1"]').prop('checked', false);
    
        // 선택된 라디오 버튼에 checked 속성 추가
        $(this).prop('checked', true);
    });

    $('input:radio[name="q2"]').change(function () {
        // 선택된 라디오 버튼의 data-index 값을 가져옴
        var selectedIndex = $(this).data('index');
    
        // 모든 라디오 버튼에서 checked 속성을 제거
        $('input:radio[name="q2"]').prop('checked', false);
    
        // 선택된 라디오 버튼에 checked 속성 추가
        $(this).prop('checked', true);
    });

    $(window).scroll(function() {
        var hTop = $(this).scrollTop();
        var header = $("header");

    
        if (hTop > 1) {
            header.addClass("on")
        } else {
            header.removeClass("on")
        }
    });

        // 화면 크기에 따라 클래스 토글
        function toggleClassBasedOnWidth() {
            var screenWidth = $(window).width();
            var header = $('header');  // 여기서 #yourElementID를 실제 사용하는 요소의 ID로 변경하세요

            if (screenWidth <= 1140) {
                header.addClass('fix_on');
                header.removeClass('on');
            } else {
                header.removeClass('fix_on');
            }
        }
        // 페이지 로드 시 초기 실행
        $(document).ready(function () {
            toggleClassBasedOnWidth();

            // 창 크기가 변경될 때마다 실행
            $(window).resize(function () {
                toggleClassBasedOnWidth();
            });
        });

        $(".ck span").click(function(){
            $(".popup").fadeIn();
        })
        $(".cl").click(function(){
            $(".popup").fadeOut();
        })

});
