<?php
header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: s-maxage=600, max-age=600');

# getYear()
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'getYear.php';

# matomoJS()
require_once __DIR__ . \DIRECTORY_SEPARATOR . 'matomoJS.php';
?>
<!doctype html>
<html lang="zh-hans" xml:lang="zh-hans">
<!--
	/**
	 * SPDX-License-Identifier: LicenseRef-Qiuwen-PD
	 * 
	 * @license {@link https://www.qiuwenbaike.cn/wiki/QW:QWPD}
	 * @license LicenseRef-Qiuwen-PD {@link https://www.qiuwenbaike.cn/wiki/QW:QWPD}
	 */

	/**
	 * Copyright 2022-2025 Qiuwen Baike Contributors
	 * The Work is available under the
	 * "Qiuwen Public Domain Licence" (the "Licence");
	 * You may obtain a copy of the Licence at
	 * 
	 * https://www.qiuwenbaike.cn/wiki/QW:QWPD
	 * 
	 * Read the Licence for details.
	 */

	-->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<meta name="theme-color" content="#36c" />
	<link rel="sourcecode" href="https://git.qiuwen.net.cn/qiuwen/qiuwen-errorpages" />
	<link rel="license" href="https://www.qiuwenbaike.cn/wiki/QW:QWPD" />
	<title>服务不可用 HTTP 503 Service
		Unavailable – 求闻百科，共笔求闻</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		html {
			color-scheme: light dark;
			width: 100%;
			background: #fff;
			color: #000;
			font-family:
				'Source Serif 4', 'DejaVu Serif', 'Liberation Serif', 'Linux Libertine', 'Georgia', 'Calibri', 'Times New Roman', 'Source Han Serif SC', 'Noto Serif CJK SC', 'STSong', 'SimSun',
				serif;
			line-height: 1.75;
		}

		body,
		html {
			min-height: 100vh;
		}

		body {
			display: flex;
			margin: 0 auto;
			max-width: 83vw;
			flex-wrap: wrap;
			flex-direction: column;
			justify-content: space-between;
		}

		header {
			margin: 10vh 0 2.5vh;
			padding-bottom: 1em;
			border-bottom: 5px solid #36c;
		}

		header a {
			font-size: 1.5em;
			font-weight: bold;
			color: #000;
		}

		header a:hover {
			text-decoration: none;
		}

		a img {
			border: 0;
			vertical-align: text-bottom;
			margin: 0 5px;
		}

		main {
			display: flex;
			margin: 1em auto;
			min-width: 70vw;
			flex-wrap: wrap;
			flex-direction: column;
			padding: 1em;
		}

		h1 {
			line-height: 1.5;
			font-size: 1.625em;
			margin-top: 1em;
			margin-bottom: 0.5em;
		}

		p {
			margin: 0.5em 0;
		}

		a {
			color: #36c;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		em,
		footer {
			color: #777;
			font-style: normal;
		}

		footer {
			display: flex;
			align-items: center;
			place-content: center space-between;
			flex-wrap: wrap;
			margin: 2.5vh 0 10vh;
			padding-top: 1em;
			border-top: 1px solid #eaecf0;
			font-size: 0.875em;
			gap: 0.5em;
		}

		footer>div {
			flex: 1 1 100%;
		}

		footer .footer-links a {
			margin-right: 0.5em;
			white-space: nowrap;
		}

		footer .footer-buttons {
			display: flex;
			margin-top: 0.5em;
			gap: 0.5em;
			flex-wrap: wrap;
			flex-direction: row;
			justify-content: flex-end;
		}

		@media screen and (prefers-color-scheme: dark) {
			html {
				box-shadow: none;
				filter: invert(1) hue-rotate(180deg);
			}

			canvas,
			img,
			svg {
				filter: invert(0) hue-rotate(0deg);
			}
		}
	</style>
</head>

<body>
	<header>
		<a href="https://www.qiuwenbaike.cn" title="求闻百科">
			<img src="https://assets.zhongwen.wiki/commons/wordmark/qiuwenbaike-with-favicon-and-slogan.png" width="238" height="35" alt="求闻百科，共笔求闻" />
		</a>
	</header>
	<main>
		<h1 class="title" id="http_503">
			服务不可用 <em>HTTP 503 Service Unavailable</em>
		</h1>
		<p>很抱歉，我们的服务器无法处理您的请求。</p>
		<p>建议您放慢请求频率后重试。</p>
		<p>您可以尝试<a
				href="javascript:window.location.reload();">刷新本页</a>，也可以返回<a
				href="/">首页</a>。</p>
	</main>
	<footer>
		<div class="footer-copyright">
			<p>© 2021-<?php echo getYear(); ?> 求闻百科贡献者；© 2022-<?php echo getYear(); ?> 无锡共笔全书网络有限责任公司</p>
			<p>
				求闻®、求闻百科®、共笔全书®、“求”字商标、“绿竹”图标等文字、图形、图文组合，均是本网站运营者——<a
					href="https://www.gongbiquanshu.cn"
					title="无锡共笔全书网络有限责任公司"
					target="_blank"
					rel="noopener noreferrer">无锡共笔全书网络有限责任公司</a>或其关联实体的商标或注册商标。
			</p>
		</div>
		<div class="footer-links">
			<a
				class="qwlink qwlink-about"
				href="https://www.qiuwenbaike.cn/wiki/Qiuwen:%E5%85%B3%E4%BA%8E%E6%B1%82%E9%97%BB%E7%99%BE%E7%A7%91"
				title="关于“求闻”"
				rel="noreferrer noopener"
				target="_blank">关于“求闻”</a>
			<a class="qwlink qwlink-tos" href="https://www.qiuwenbaike.cn/wiki/Qiuwen:%E7%94%A8%E6%88%B7%E5%8D%8F%E8%AE%AE" title="用户协议" rel="noreferrer noopener" target="_blank">用户协议</a>
			<a
				class="qwlink qwlink-pipp"
				href="https://www.qiuwenbaike.cn/wiki/Qiuwen:%E4%B8%AA%E4%BA%BA%E4%BF%A1%E6%81%AF%E4%BF%9D%E6%8A%A4%E6%96%B9%E9%92%88"
				title="个人信息保护方针"
				rel="noreferrer noopener"
				target="_blank">个人信息保护方针</a>
			<a class="govlink govlink-icp" href="https://beian.miit.gov.cn/" title="中华人民共和国工业和信息化部ICP/IP地址/域名信息备案管理系统" rel="noreferrer noopener" target="_blank">苏ICP备2022013164号</a>
			<a class="govlink govlink-ga" href="http://beian.mps.gov.cn/" title="中华人民共和国公安部全国互联网安全管理平台" rel="noreferrer noopener" target="_blank">苏公网安备32021302000963号</a>
		</div>
		<div class="footer-buttons">
			<a href="https://www.qiuwenbaike.cn" title="“求闻”计划网站" target="_blank" rel="noopener noreferrer"><img alt="“求闻”计划网站" width="88" height="31" src="https://assets.zhongwen.wiki/commons/button/qiuwen.png" /></a>
			<a href="https://www.gongbiquanshu.cn" title="共笔全书旗下网站" target="_blank" rel="noopener noreferrer"><img alt="共笔全书旗下网站" class="img" width="88" height="31" src="https://assets.zhongwen.wiki/commons/button/gbqs.png" /></a>
		</div>
	</footer>
	<?php echo matomoJS(); ?>
</body>

</html>