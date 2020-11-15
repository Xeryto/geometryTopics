<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Geometry topics</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
	<link rel="stylesheet" href="./style.css">
	<script type="text/javascript" src="https://panzi.github.io/Browser-Ponies/basecfg.js" id="browser-ponies-config"></script><script type="text/javascript" src="https://panzi.github.io/Browser-Ponies/browserponies.js" id="browser-ponies-script"></script><script type="text/javascript">/* <![CDATA[ */ (function (cfg) {BrowserPonies.setBaseUrl(cfg.baseurl);BrowserPonies.loadConfig(BrowserPoniesBaseConfig);BrowserPonies.loadConfig(cfg);})({"baseurl":"https://panzi.github.io/Browser-Ponies/","fadeDuration":500,"volume":1,"fps":25,"speed":3,"audioEnabled":false,"showFps":false,"showLoadProgress":false,"speakProbability":0,"spawn":{"applejack":1,"fluttershy":1,"pinkie pie":1,"rainbow dash":1},"autostart":false}); /* ]]> */</script>
</head>

<body>
<?php
require_once 'navbar.html';
?>

<main class="content-wrapper">
	<div class="container-fluid">
		<h1>Вероятностный алгоритм проверки непустоты пересечения полуплоскостей</h1>
		<hr>
		<div class="row">
			<div class="col-md-9">
				<h3>Intoduction</h3>
				<p>Мы будем хранить полуплоскость ввиде прямой (которая делит плоскость на две полуплоскости) и вектора номали (который говорит нам, какая именно полуплоскость нам нужна)</p>

				<p>Основная коцепция алгоритма: </p>
				<ol>
					<li><p>Добавим к нашим полуплоскостям 4 дополнительные, которые будут образовывать так называемый bounding-box (это необходимо для избавления от бесконечных пересечений и т.п.)</p>
					<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="400" height="300" id="svg2" version="1.1" inkscape:version="0.48.2 r9819" sodipodi:docname="New document 1">
						<defs id="defs4"/>
						<sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="1.8183505" inkscape:cx="200.0295" inkscape:cy="159.21496" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="false" inkscape:window-width="1680" inkscape:window-height="989" inkscape:window-x="-9" inkscape:window-y="-9" inkscape:window-maximized="1"/>
						<metadata id="metadata7">
						  <rdf:RDF>
							<cc:Work rdf:about="">
							  <dc:format>image/svg+xml</dc:format>
							  <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
							  <dc:title/>
							</cc:Work>
						  </rdf:RDF>
						</metadata>
						<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-752.36218)">
						  <rect style="fill:none;stroke:#000000;stroke-width:3.63192105;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" id="rect3767" width="275.21725" height="202.87392" x="70.120163" y="800.50946"/>
						  <path style="fill:#d4ffff;fill-opacity:1;stroke:#003b40;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" d="m 131.69929,801.16136 -38.000004,55 47.000004,27 29,-51 z" id="path2987" inkscape:connector-curvature="0"/>
						  <path style="fill:#d4ffff;fill-opacity:1;stroke:#003b40;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" d="m 269.69929,935.16136 11,67.00004 43,-11.00004 -11,-60 z" id="path2989" inkscape:connector-curvature="0"/>
						  <path style="fill:#d4ffff;fill-opacity:1;stroke:#003b40;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" d="m 218.94906,826.18886 9.93528,54.465 37.76313,-14.31576 -9.27141,-43.78008 z" id="path2991" inkscape:connector-curvature="0"/>
						  <path sodipodi:type="arc" style="fill:#d4ffff;fill-opacity:1;stroke:#003b40;stroke-width:1.3545264;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" id="path2993" sodipodi:cx="119" sodipodi:cy="185.5" sodipodi:rx="26" sodipodi:ry="21.5" d="m 145,185.5 a 26,21.5 0 1 1 -52,0 26,21.5 0 1 1 52,0 z" transform="matrix(1.3112958,0,0,1.6625871,-51.438612,644.00583)"/>
						  <path sodipodi:type="arc" style="fill:#d4ffff;fill-opacity:1;stroke:#003b40;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" id="path2995" sodipodi:cx="308" sodipodi:cy="107.5" sodipodi:rx="29" sodipodi:ry="28.5" d="m 337,107.5 a 29,28.5 0 1 1 -58,0 29,28.5 0 1 1 58,0 z" transform="translate(7.6992856,747.16136)"/>
						  <path style="fill:#d4ffff;fill-opacity:1;stroke:#003b40;stroke-width:2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" d="m 181.45672,925.36464 -3.35657,42.24611 31.97092,-5.55525 -3.13084,-37.45928 z" id="path2997" inkscape:connector-curvature="0"/>
						</g>
					  </svg></li>
					  <br>
					<li><p>Затем отсортируем все полуплоскости по углу их вектора нормали (в случае равенства порядок не имеет значения)</p></li>
					<li><p>Теперь будем поддерживать стек полуплоскостей, задающий многоуольник пересечения первых i плоскостей на i-м шаге.</p>
					<ul>
						<li>Если мы хотим добавить новую полуплоскость в стек, то возможно нам понадобится удалить несколько последних полуплоскостей из стека, если они не принадлежат новой полуплоскости</li>
						<li>Затем просто добавляем полуплоскость в конец стека</li>
					</ul>
					<img src="https://3.bp.blogspot.com/-rOJUfVYN-10/UzbrNphWD6I/AAAAAAAACAE/PzV1vEJ4tww/s1600/%D0%BF%D0%B5%D1%80%D0%B5%D1%81%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%D0%9F%D0%BE%D0%BB%D0%BB%D0%BE%D0%B31.png">
				
				</li>
					<li>Теперь мы будем добавлять полуплоскости в этом порядке, при этом поддерживая стек полуплоскостей, образующих стороны многоугольника пересечения</li>
				</ol>

				<h3>Но как нам понять что пересечение пусто? </h3>
				<p>Предположим, что после добавления новой полуплоскости пересечение стало пусто. Тогда наш алгоритм, выкинет из стека все полуплоскости, кроме одной. <p></p>Также заметим, что т.к. у нас есть bounding-box из полуплоскостей, векторное произведение соседних полуплоскостей всегда имеет одинаковый знак, который соотносится с порядком сортировки полуплоскости (по часовой или против). <p></p>И если векторное произведение последней полуплоскости в деке с новой полуплоскостью (которую мы хотим добавить на некотором шаге) имеет "неправильный знак", то пересечение пусто.</p>
				<h3>Асимптотика</h3>

				<ul>
					<li>Сортировка по нормали: \( \mathcal{O}(n\log{}n) \)</li>
					<li>Пробег по отсторированному массиву: \( \mathcal{O}(n)\) — т.к.  каждая полуплоскость будет добавлена ровно один раз и извлечена не более 1-го раза</li>
				</ul>
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</main>

<footer class="footer">
	<div class="container">
		<div class="text-center">
			<span>Создано совместным трудом группы по информатике</span>
		</div>
	</div>
</footer>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script src="./script.js"></script>
</body></html>

