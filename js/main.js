//タイマー
$(function() {
	var timer = false;
	$(window).resize(function() {
		if(timer !== false){
			clearTimeout(timer);
		}
		timer = setTimeout(function() {
			// alert('0.5秒後'); // 500px以下の処理を記述します
		}, 500);
	});
});

// リサイズしたあと0.5s後に発火
// $(function(){
//   var timer = false;
//   $(window).resize(function() {
//     if (timer !== false) {
//       clearTimeout(timer);
//     }
//     timer = setTimeout(function() {
//       if(window.matchMedia("(max-width:500px)").matches){
//         alert('500px以下です。'); // 500px以下の処理を記述します
//       }else{
//         alert('500pxより大きいです。'); // 500pxより大きいときの処理を記述します
//       }
//     }, 500);
//   });
// });

// menu
$(window).on("load resize", function() {
	setTimeout(function(){

		var winW = window.innerWidth;
		var winBP = 768;	//ブレイクポイント

			//小さな端末用 768以下
			if(winW < winBP) {
				$('body').addClass('s').removeClass('p');
				$('#menubar').addClass('dn').removeClass('db');
				$('#menubar_hdr').addClass('db').removeClass('dn').removeClass('ham');
				
					// 同一ページへのリンクの場合に開閉メニューを閉じる処理
					$('#menubar a[href^="#"]').click(function() {
						$('#menubar').removeClass('db');
						$('#menubar_hdr').removeClass('ham');
					});
					
			//大きな端末用
			} else {
				$('body').addClass('p').removeClass('s');
				$('#menubar').addClass('db').removeClass('dn');
				$('#menubar_hdr').removeClass('db').addClass('dn');

			}

	}, 100);
});


//ハンバーガーメニューをクリックした際の処理
$(function() {
	$('#menubar_hdr').click(function() {
		$(this).toggleClass('ham');
			if($(this).hasClass('ham')) {
				$('#menubar').addClass('db').removeClass('dn');
			} else {
				$('#menubar').addClass('dn').removeClass('db');
			}

	});
});


//pagetop　表示
$(function() {
    var scroll = $('.pagetop');
    var scrollShow = $('.pagetop-show');
        $(scroll).hide();
        $(window).scroll(function() {
            if($(this).scrollTop() >= 300) {
                $(scroll).fadeIn().addClass(scrollShow);
            } else {
                $(scroll).fadeOut().removeClass(scrollShow);
            }
        });
});


//スムーススクロール
$(window).on('load', function() {
	var hash = location.hash;
	if(hash) {
		$('body,html').scrollTop(0);
		setTimeout(function() {
			var target = $(hash);
			var scroll = target.offset().top - 40;
			$('body,html').animate({scrollTop:scroll},500);
		}, 100);
	}
});

$(window).on('load', function() {
    $('a[href^="#"]').click(function() {
        var href = $(this).attr('href');
        var target = href == '#' ? 0 : $(href).offset().top - 40;
            $('body,html').animate({scrollTop:target},500);
            return false;
    });
});


// 汎用開閉処理
$(function() {
	$('.openclose').next().hide();
	$('.openclose').click(function() {
		$(this).next().slideToggle();
		$('.openclose').not(this).next().slideUp();
	});
});






