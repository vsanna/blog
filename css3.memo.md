# cssレイアウト入門

## #2 reset.css, normalize.css
- ブラウザに予め入っているスタイルがある
  - User Agent Stylesheet
- それを標準化する方法
  - reset.css
  - normalize.css
- reset.css
  - http://www.html5.jp/html5doctor/html-5-reset-stylesheet.html
  - ほとんどすべてのスタイルを消してしまう
- normalize.css
  - https://necolas.github.io/normalize.css/3.0.3/normalize.css
  - UserAgentStylesheetを一部残す。
- 最近ではnormalizeが主流

# css3入門
- linear-gradient()
  - 線形グラデーション
  - linear-gradient(startColor, endColoer)
  - linear-gradient(to [top, bottom, left, right], startColor, endColoer)
    - to top left だと左上に向かう
  - linear-gradient(Ndeg, startColor, endColoer)
  - linear-gradient(color1, color2, color3) ... 3色
  - linear-gradient(color1 10%, color2 70%, color3)  ... 偏り
  - repeating-linear-gradient(color1, color2, 20px) ... 20pxごとに繰り返す
- radial-gradient()
  - radial-gradient(startColor, endColoer)
  - radial-gradient(at x y, startColor, endColoer) ... 中心点の指定
  - radial-gradient(ellipse|circle x y at x y, startColor, endColoer) ... 円の計上指定
  - radial-gradient(farthest-side at 30px 40px, skyblue, blue)
    - 最も遠い辺にむかってグラデーションが大きくなる
  - repeating-radial-gradient(startColor,endColoer,20px) ... 繰り返し
- transform
  - translate, translateX
  - scale(x-direction, y-direction)
  - skew(x, y)
  - rotate, rotateX
- transform-origin
  - デフォルトでtransformの基準点は要素の中心(50% 50%)
  - それを左上に変更したい場合は top left もしくは 0 0 としてい
- animation
```css
div {
  -webkit-animation-name: slidein; // 自分で名前をつける
  -webkit-animation-duration: 1s;
  -webkit-animation-timing-function: ease;
  -webkit-animation-delay: 1s;
  -webkit-animation-iteration-count: infinit; // 繰り返し
  -webkit-animation-direction: alternate; /戻ってくるかどうか
}

@-webkit-keyframes slidein {
  0% {
    margin-left: 100%;
    background: white;
  }
  70% {
    margin-left: 500%;
    background: blue;
  }
  100% {
    margin-left: 0%;
  }
}
```
