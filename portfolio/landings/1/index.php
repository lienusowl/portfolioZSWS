<? 
$referer = $_SERVER["HTTP_REFERER"];
if (stristr($referer, "yandex.ru")) { $search = "text="; $crawler = "Yandex"; }
if (stristr($referer, "rambler.ru")) { $search = "words="; $crawler = "Rambler"; }
if (stristr($referer, "google.ru")) { $search = "q="; $crawler = "Google"; }
if (stristr($referer, "google.com")) { $search = "q="; $crawler = "Google"; }
if (stristr($referer, "mail.ru")) { $search = "q="; $crawler = "Mail.Ru"; }
if (stristr($referer, "bing.com")) { $search = "q="; $crawler = "Bing"; }
if (stristr($referer, "qip.ru")) { $search = "query="; $crawler = "QIP"; }

if (isset($crawler)) 
{
$phrase = urldecode($referer);
eregi($search."([^&]*)", $phrase."&", $phrase2);
$phrase = $phrase2[1];
$referer = $crawler;
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>

<meta name='yandex-verification' content='45e33457abd1f9d0' />
<meta name="google-site-verification" content="LkjVvW9P-zimO0U-QdUd9Nq3FmEdqmV8YM_JpxvfFhE" />


<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<? include("blocks/head.php");?>
<title>Just Content - продвижение в социальных сетях</title>
<meta name="description" content="Just Content продвижение и реклама в социальных сетях. гарантия результата. Вконтакте, Одноклассники, Фейсбук, Инстаграм. Прокачай свой SMM!" /> 
<meta name="keywords" content="Smm продвижение и реклама в социальных сетях вконтакте одноклассники инстаграм фейсбук" /> 
</head>
<body>

<div id="main-wrapper">
<? include("blocks/header.php");?>
<? include("blocks/content.php");?>
<? include("blocks/footer.php");?>
<? include("blocks/popup.php");?>
</div>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '4uTVBQnCwa';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<!-- SaleTex-->
<div class="saletex_copyright" style="display: none;"><a href="http://www.saletex.ru" title="SALETEX">SALETEX консультант</a> — онлайн продажи</div>
<script type="text/javascript">
(function(){
var sd = 'js',
sw = 'saletex.ru/forms/50/21/5021/saletex.all.1111111111.js';
var sb = document.createElement('script'),
cs = document.getElementsByTagName('script')[0];
sb.type = 'text/javascript';
sb.async = true;
sb.src = 'http://'+sd+'.'+sw;
sb.charset='utf-8';
if ( cs ) {cs.parentNode.insertBefore(sb, cs);}
else {document.head.appendChild(sb);}
})();
</script>
<!-- /SaleTex-->
<script type="text/javascript" data-info="byProstor">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N7RVBM');
</script>
<? include("../../../nocopy.php");?>
</body>
</html>