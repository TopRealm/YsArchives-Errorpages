<?php
header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: s-maxage=600, max-age=600');

# getYear()
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'getYear.php';

# matomoJS()
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'matomoJS.php';
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="sourcecode" href="https://github.com/TopRealm/YsArchives-Errorpages" />
    <link rel="copyright" href="https://creativecommons.org/licenses/by-sa/4.0/" />
    <link rel="license" href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html" />
    <link rel="icon" href="/favicon.ico" />
    <title>HTTP 403 拒绝访问 - 有兽档案馆，开放的有兽焉wiki</title>
    <style>
*{margin:0;padding:0}
html{width:100%;background:#fff;color:#000;font-family:"Noto Serif","Source Serif","Noto Serif SC","Source Han Serif SC",Times New Roman,Times,STSong,SimSun,serif;line-height:1.75}
body,html{min-height:100vh}
body{display:flex;margin:0 auto;max-width:83vw;flex-wrap:wrap;flex-direction:column;justify-content:space-between}
header{margin:10vh 0 2.5vh;padding-bottom:1em;border-bottom:5px solid #36c}
header a{font-size:1.5em;font-weight:700;color:#000}
header a:hover{text-decoration:none}
a img{border:0;vertical-align:text-bottom;margin:0 5px}
main{display:flex;margin:1em auto;min-width:70vw;flex-wrap:wrap;flex-direction:column;padding:1em}
h1{line-height:1.5;font-size:1.625em;margin-top:1em;margin-bottom:.5em}
p{margin:.5em 0}
a{color:#36c;text-decoration:none}
a:hover{text-decoration:underline}
em,footer{color:#777;font-style:normal}
footer{margin:0 0 10vh;padding-top:1em;border-top:1px solid #eaecf0;font-size:.9em}
.footer-links a{margin-right:.5em;white-space:nowrap}
footer .footer-buttons{display:flex;margin-top:.5em;gap:.5em;flex-wrap:wrap;flex-direction:row;justify-content:flex-end}

@media (max-width: 768px) {
    main {
        padding: 1.5rem;
        margin-top: 1rem;
        margin-bottom: 1rem;
    }
    main h1 {
        font-size: 1.8rem;
    }
}
    </style>
</head>
<header>
    <a href="https://youshou.wiki" title="有兽档案馆">
        <img src="https://youshou.wiki/images/e/e1/%E6%9C%89%E5%85%BD%E6%A1%A3%E6%A1%88%E9%A6%86%E7%BB%BF%E8%89%B2%E5%9B%BE%E4%B9%A6Logo.svg"
            width="50" height="50" alt="有兽档案馆 - 开源的有兽焉wiki" />
        <img src="https://youshou.wiki/images/4/4f/%E6%9C%89%E5%85%BD%E6%A1%A3%E6%A1%88%E9%A6%86%E6%96%87%E5%AD%97%E6%A0%87%E5%BF%97.svg"
            width="150" height="50" alt="有兽档案馆 - 开源的有兽焉wiki" />
    </a>
</header>
<main>
    <h1>
        拒绝访问<em>（HTTP 403）</em><br>Forbidden
    </h1>
    <p>
        很抱歉，您不被允许访问此地址。<br>Sorry, you are not allowed to access this address.
    </p>
    <p>
        若您有任何疑问，请联系QQ群：<b>643632328</b>。<br>Any inquires should be sent to <b>643632328</b>.
    </p>
    <p>
        您可以返回<a href="/">首页</a>。<br>You may return to the <a href="/">home page</a>.
    </p>
</main>
<footer>
    <div class="footer-copyright">
        <p>© 2023 - <?php echo getYear(); ?> 有兽档案馆</p>
        <p>
            有兽档案馆原创文字、图形、图文组合，均是本网站运营者或其关联实体的标志或注册标志。<br>
            本站所有内容均以<a href="https://creativecommons.org/licenses/by-sa/4.0/" rel="noreferrer noopener" target="_blank">知识共享 署名-相同方式共享 4.0 国际许可协议</a>进行许可。
        </p>
    </div>
    <div class="footer-links">
        <a class="ysliblink ysliblink-about"
            href="https://youshou.wiki/wiki/LIB:ABOUT" target="_blank">关于有兽档案馆</a>
        <a class="ysliblink ysliblink-tos" href="https://youshou.wiki/wiki/LIB:TOS"
            rel="noreferrer noopener" target="_blank">用户协议</a>
        <a class="ysliblink ysliblink-pipp"
            href="https://youshou.wiki/wiki/LIB:PIPP"
            rel="noreferrer noopener" target="_blank">隐私保护</a>
        <a class="source source-code" href="https://github.com/TopRealm/YsArchives-Errorpages" rel="noreferrer noopener"
            target="_blank">错误页面源码地址（GNU ver.2）</a>
        <a class="govlink govlink-icp" href="https://beian.miit.gov.cn/" rel="noreferrer noopener"
            target="_blank">晋ICP备2023005192号</a>
    </div>
    <div class="footer-buttons">
        <a href="https://youshou.wiki/" title="有兽档案馆授权协议" target="_blank" rel="noopener noreferrer"><img
                alt="授权协议" width="88" height="31"
                src="https://youshou.wiki/resources/assets/cc-by-sa.svg" /></a>
    </div>
</footer>
<?php echo matomoJS(); ?>
</html>