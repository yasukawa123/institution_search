// 画像の変数（書き方もっといい方法ありそう
// ./images/xxx変数(ファイル名)
const images = ['get.png', 'number_one.png', 'samurai.png', 'set.png', 'walk.png'];
// 配列として変数が定義されている
const kakugen_items = [
    "１：人生の問題を解決するには、まず針箱を整頓せよ（カーライル）",
    "２：常識とは、18歳までに身に付けた偏見のコレクションである（アインシュタイン）",
    "３：人はその制服どおりの人間になる（ナポレオン）",
    "４：善にも強ければ、悪にも強いというのが、いちばん強力な性格である（ニーチェ）",
	"５：テストである（やすカワ）",
];

const imageArea = document.getElementById('imageArea');
const btn = document.getElementById("gacha-button");
const disp = document.getElementById("gacha-display");

btn.addEventListener("click", function() {
	// ランダムのインデックス番号生成
	const num = Math.floor(Math.random() * kakugen_items.length );
	// 画像の出力
	imageArea.src = "/images/legend/" + images[num];
	// 文字の出力
	disp.innerHTML = kakugen_items[num];
	
});

