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
!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");

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
