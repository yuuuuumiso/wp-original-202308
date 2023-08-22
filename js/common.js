


// // // メニューバーの色を変化させる
// // function changeColor() {
// // if (document.getElementById("eyecatch") != null) {
// //   let scrollY = window.pageYOffset;
// //   let body = document.body;

// //   let eyecatch = document.getElementById('eyecatch');
// //   let nav = document.getElementById('globalnav');

// //   let top = eyecatch.getBoundingClientRect().top; // ウィンドウ上からの要素の位置
// //   let bottom = eyecatch.getBoundingClientRect().bottom; // ウィンドウ上からの要素の位置

// //   let area = bottom - top;

// //   if( scrollY < area ) {
// //     nav.classList.add('colorchange');
// //   } else {
// //     nav.classList.remove('colorchange');
// //   }
// //  }
// // }

// // window.addEventListener('scroll', changeColor);

// // // ハンバーガーメニュー実装
// // const checkbox = document.getElementById('menubtn');
// // const navmenu = document.getElementById('navmenu');

// // function openMenu() {
// //   if (navmenu.className == '') {
// //     navmenu.classList.add('checked');
// //     checkbox.style.color = 'black';
// //   } else {
// //     navmenu.classList.remove('checked');
// //     checkbox.style.color = '';
// //   }
// // }
// // checkbox.addEventListener('click', openMenu);

// // jQuery(function() {
// //   jQuery(document).on('click', function(e) {
// //       if(!jQuery(e.target).is('#navmenu, #menubtn') && $(window).width() < 750 && navmenu.className == 'checked') {
// //           navmenu.classList.remove('checked');
// //           checkbox.style.color = '';
// //       }
// //     });
// // });

// // // ぬるっと上までスクロール
// // jQuery(function() {

// //   var windowWidth = $(window).width();
// //   var windowSm = 768;
// //   var headerHeight;
// //   if (windowSm >= windowWidth) {
// //     var headerHeight = 50;
// //   } else {
// //     var headerHeight = 80;
// //   }
// //   var documentUrl = location.origin + location.pathname + location.search;
// //   jQuery(document).on('click', 'a[href*="#"]', function(event) {
// //     var anchor = event.currentTarget;
// //     var anchorUrl = anchor.protocol + '//' + anchor.host + anchor.pathname + anchor.search;
// //     if (documentUrl !== anchorUrl) {
// //       return true;
// //     }

// //     var checkbox = document.getElementById( "menubtn" );
// //     checkbox.checked = false;

// //     var speed = 500;
// //     var position = $(anchor.hash).offset().top - headerHeight;
// //     jQuery('body,html').animate({
// //       scrollTop: position
// //     }, speed, 'swing');
// //     event.preventDefault();
// //     return false;
// //   });
// // });



// //タイマー
// $(function() {
//   var timer = false;
//   $(window).resize(function() {
//     if(timer !== false){
//       clearTimeout(timer);
//     }
//     timer = setTimeout(function() {
//     }, 500);
//   });
// });


// // menu
// $(window).on("load resize", function() {
//   setTimeout(function(){

//     var winW = window.innerWidth;
//     var winBP = 900;  //ブレイクポイント

//       //小さな端末用
//       if(winW < winBP) {
//         $('body').addClass('s').removeClass('p');
//         $('#menubar').addClass('dn').removeClass('db');
//         $('#menubar_hdr').addClass('db').removeClass('dn').removeClass('ham');

//           // 同一ページへのリンクの場合に開閉メニューを閉じる処理
//           $('#menubar a[href^="#"]').click(function() {
//             $('#menubar').removeClass('db');
//             $('#menubar_hdr').removeClass('ham');
//           });

//       //大きな端末用
//       } else {
//         $('body').addClass('p').removeClass('s');
//         $('#menubar').addClass('db').removeClass('dn');
//         $('#menubar_hdr').removeClass('db').addClass('dn');

//       }

//   }, 100);
// });


// //ハンバーガーメニューをクリックした際の処理
// $(function() {
//   $('#menubar_hdr').click(function() {
//     $(this).toggleClass('ham');

//       if($(this).hasClass('ham')) {
//         $('#menubar').addClass('db').removeClass('dn');
//       } else {
//         $('#menubar').addClass('dn').removeClass('db');
//       }

//   });
// });


// //pagetop
// $(function() {
//     var scroll = $('.pagetop');
//     var scrollShow = $('.pagetop-show');
//         $(scroll).hide();
//         $(window).scroll(function() {
//             if($(this).scrollTop() >= 300) {
//                 $(scroll).fadeIn().addClass(scrollShow);
//             } else {
//                 $(scroll).fadeOut().removeClass(scrollShow);
//             }
//         });
// });


// //スムーススクロール
// $(window).on('load', function() {
//   var hash = location.hash;
//   if(hash) {
//     $('body,html').scrollTop(0);
//     setTimeout(function() {
//       var target = $(hash);
//       var scroll = target.offset().top - 40;
//       $('body,html').animate({scrollTop:scroll},500);
//     }, 100);
//   }
// });
// $(window).on('load', function() {
//     $('a[href^="#"]').click(function() {
//         var href = $(this).attr('href');
//         var target = href == '#' ? 0 : $(href).offset().top - 40;
//             $('body,html').animate({scrollTop:target},500);
//             return false;
//     });
// });


// // 汎用開閉処理
// $(function() {
//   $('.openclose').next().hide();
//   $('.openclose').click(function() {
//     $(this).next().slideToggle();
//     $('.openclose').not(this).next().slideUp();
//   });
// });








// //main h2が画面内にきたら、スタイルlinestyleを適用する
// $('main h2').on('inview', function() {
//   $(this).addClass('linestyle');
// });

// //upスタイルが画面内にきたら、スタイルupstyleを適用する
// $('.up').on('inview', function() {
//   $(this).addClass('upstyle');
// });

// //downスタイルが画面内にきたら、スタイルdownstyleを適用する
// $('.down').on('inview', function() {
//   $(this).addClass('downstyle');
// });

// //leftスタイルが画面内にきたら、スタイルleftstyleを適用する
// $('.left').on('inview', function() {
//   $(this).addClass('leftstyle');
// });

// //rightスタイルが画面内にきたら、スタイルrightstyleを適用する
// $('.right').on('inview', function() {
//   $(this).addClass('rightstyle');
// });

// //transform1スタイルが画面内にきたら、スタイルtransform1styleを適用する
// $('.transform1').on('inview', function() {
//   $(this).addClass('transform1style');
// });

// //transform2スタイルが画面内にきたら、スタイルtransform2styleを適用する
// $('.transform2').on('inview', function() {
//   $(this).addClass('transform2style');
// });

// //transform3スタイルが画面内にきたら、スタイルtransform3styleを適用する
// $('.transform3').on('inview', function() {
//   $(this).addClass('transform3style');
// });

// //blurスタイルが画面内にきたら、スタイルblurstyleを適用する
// $('.blur').on('inview', function() {
//   $(this).addClass('blurstyle');
// });

// //crackerスタイルが画面内にきたら、クラッカーアニメーションを実行する
// $('.cracker').on('inview', function() {
//   $('.cracker').append('<span class="crackerstyle"><img src="images/cracker.gif" alt=""><img src="images/cracker.gif" alt=""></span>');
// });


//   // 横スライドタイプのサムネイルスライドショー
//   $('.list-slide').slick({
//     autoplay: true,
//     arrows: false,      //左右の矢印
//     autoplaySpeed: 0,   //切り替えのスピード。今回は平均してなめらかに移動させるので0にする。
//     speed: 7000,      //スライドのスピード
//     cssEase: 'linear',    //アニメーションのパターン。通常はこのままでOK。
//     slidesToShow: 4,    //画面内に表示させる枚数。
//     slidesToScroll: 1,    //１回でスライド移動する枚数。

//     //画面幅899px以下の設定
//     responsive: [
//     {
//     breakpoint: 899,  //ブレークポイント
//     settings: {
//     slidesToShow: 2,  //画面内に表示させる数。2枚。
//     }
//     }
//     ]
// });
