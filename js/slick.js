// 横スライドタイプのサムネイルスライドショー
	$('.list-slide').slick({
		autoplay: false,
		arrows: true,			//左右の矢印
		autoplaySpeed: 0,		//切り替えのスピード。今回は平均してなめらかに移動させるので0にする。
		speed: 500,			//スライドのスピード
		cssEase: 'ease',		//アニメーションのパターン。通常はこのままでOK。
		slidesToShow: 4,		//画面内に表示させる枚数。
		slidesToScroll: 1,		//１回でスライド移動する枚数。
 　　prevArrow:'<div class="prev">PREV</div>',
 　　nextArrow:'<div class="next">NEXT</div>',
		 dots: true, // インジケーター
		//画面幅768px以下の設定
		responsive: [
		{
		breakpoint: 768,	//ブレークポイント
		settings: {
		slidesToShow: 2,	//画面内に表示させる数。2枚。
		}
		}
		]
});
