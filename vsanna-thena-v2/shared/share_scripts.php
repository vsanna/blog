<!-- sns buttons -->
<div id="fb-root"></div>
<script>
// facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=1683677628541323";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// twitter
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

// pocket
// !function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");

// hatena
document.addEventListener('mdl-componentupgraded', function () {
    var element = document.createElement("script");
    element.type = "text/javascript";
    element.src="https://b.st-hatena.com/js/bookmark_button.js" ;
    element.charset="utf-8";
    element.async="async";

    var objBody = document.getElementsByTagName("body").item(0);
    objBody.appendChild(element);
});
</script>
<!-- sns buttons -->

<!-- SCRIPT : popular_entries_feed -->
<script src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("feeds", "1");
function initialize() {
 //RSSフィードの取得
 var blogURL = "http://vsanna.sakura.ne.jp/wp/";
 var blogTITLE = "Project name";
 var feed = new google.feeds.Feed("http://b.hatena.ne.jp/entrylist?mode=rss&sort=count&url=" +blogURL);
 //取得するフィード数
 feed.setNumEntries(5);
 //実際に読む込む
 feed.load(function(result) {
 //読み込めたか判別
  if (!result.error) {
   //表示部分を選択
   var container = document.getElementById("popular_entries_feed");
   //変数の初期化
   var useFeed = "";
   //Feedの処理
   for (var i = 0; i < result.feed.entries.length; i++) {
    //Feedを一つ抽出
    var entry = result.feed.entries[i];
    //titleを指定
    var titleBase = entry.title.replace(' | '+blogTITLE , '')
    if(titleBase.length >= 40){
      var title = titleBase.substring(0, 40) + "...";
    }else{
      var title = titleBase;
    };
    //リストに突っ込む
    useFeed += '<a class="hatena-link mdl-navigation__link" href="' + entry.link + '">' + title + '<img class="hatena-count" src="http://b.hatena.ne.jp/entry/image/' + entry.link + '"></a>';
    }
  //リストを表示させる
  container.innerHTML = '<div class="htbl_popular_entries">' + useFeed + '</div><a href="http://b.hatena.ne.jp/entrylist?sort=count&url=http://vsanna.sakura.ne.jp/wp/" class="toHatebu">人気の記事一覧</a>';
   }
 });
}
google.setOnLoadCallback(initialize);
</script>
