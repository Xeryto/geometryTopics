<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Пересечение прямой и произвольного многоугольника</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
		<link rel="stylesheet" href="./style.css">

	</head>

	<body>
    <?php
    require_once 'navbar.html';
    ?>

		<main class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<h1>Пересечение прямой и произвольного многоугольника</h1>
						<hr>
						<p>Сначала давайте введём функцию \(F_{ls}\) для прямой \(l\) и отрезка \(s\).</p>
						<h4>Функция \(F_{ls}\)</h4>
						<p>Пусть вершины отрезка \(s\) - это точки \(A\) и \(B\). Также возьмём две точки \(X\) и \(Y\) на прямой \(l\), причём \(X\) левее либо ниже точек \(A\), \(B\) и \(Y\).</p>
						<p>Также пусть вектор \(\vec{a}=\overrightarrow{XY}\), вектор \(\vec{b}=\overrightarrow{XA}\), вектор \(\vec{c}=\overrightarrow{XC}\).</p>
						<p>Найдем \(C_{1}=\mathrm{sign}(\vec{a}\land\vec{b}), C_{2}=\mathrm{sign}(\vec{a}\land\vec{c})\).</p>
						<ul>
							<li>Если \(C_{1}=C_{2}=0\), то функция \(F_{ls}\) возвращает точку \(A\) и точку \(B\), обе с числом 1.</li>
							<li>Если \(C_{1}=C_{2} \neq 0\), то функция \(F_{ls}\) возвращает пустое множество.</li>
							<li>Если \(C_{1}=0\), то функция \(F_{ls}\) возвращает точку \(A\) с числом, равным \((C_{2}+1)/2\).</li>
							<li>Если \(C_{2}=0\), то функция \(F_{ls}\) возвращает точку \(B\) с числом, равным \((C_{1}+1)/2\).</li>
							<li>Если \(C_{1} \neq C_{2}\), то функция \(F_{ls}\) возвращает точку пересечения \(l\) и \(s\) с числом 0.</li>
						</ul>
						<div>
							<svg style="width: 500; height: 290;" xmlns="http://www.w3.org/2000/svg">
								<g>
								<title>background</title>
								<rect fill="none" id="canvas_background" height="293" width="550" y="-1" x="-1"/>
								<g display="none" overflow="visible" y="0" x="0" height="100%" width="100%" id="canvasGrid">
								<rect fill="url(#gridpattern)" stroke-width="0" y="0" x="0" height="100%" width="100%"/>
								</g>
								</g>
								<g>
								<title>Layer 1</title>
								<line stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_1" y2="119.04981" x2="537.4999" y1="178.04981" x1="12.4999" stroke-width="3" stroke="#000" fill="none"/>
								<line stroke-linecap="undefined" stroke-linejoin="undefined" id="svg_3" y2="269.04981" x2="309.4999" y1="37.04981" x1="333.4999" stroke-width="3" stroke="#000" fill="none"/>
								<ellipse ry="3.14685" rx="3.14685" id="svg_5" cy="269.46821" cx="309.11866" stroke-width="3" stroke="#000" fill="#000"/>
								<ellipse ry="3.14685" rx="3.14685" id="svg_6" cy="38.69905" cx="333.59418" stroke-width="3" stroke="#000" fill="#000"/>
								<text font-style="italic" xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_10" y="158.57099" x="55.78587" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">l</text>
								<text font-style="italic" xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_11" y="103.57104" x="305.07135" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">s</text>
								<text xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_12" y="31.42825" x="345.07131" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">A</text>
								<text xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_13" y="277.85659" x="321.49991" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">B</text>
								<text xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_14" y="197.85666" x="120.78581" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">X</text>
								<text xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_15" y="180.71382" x="254.35711" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">Y</text>
								<ellipse ry="3.59844" rx="3.59844" id="svg_16" cy="165.68555" cx="126.44438" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="#000"/>
								<ellipse ry="3.59844" rx="3.59844" id="svg_17" cy="150.53423" cx="260.53352" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="#000"/>
								<line stroke="#000" stroke-linecap="null" stroke-linejoin="null" id="svg_18" y2="150.37744" x2="260.93696" y1="144.48428" x1="250.36557" fill-opacity="null" stroke-opacity="null" stroke-width="3" fill="none"/>
								<line stroke="#000" stroke-linecap="null" stroke-linejoin="null" id="svg_22" y2="150.37744" x2="260.93696" y1="157.91927" x1="251.31493" fill-opacity="null" stroke-opacity="null" stroke-width="3" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_25" y2="38.48932" x2="333.66423" y1="165.06275" x1="126.67123" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_26" y2="48.0631" x2="327.43028" y1="38.88589" x1="333.12648" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_27" y2="36.44668" x2="323.66747" y1="38.62652" x1="332.6593" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_28" y2="269.47708" x2="309.56948" y1="165.78467" x1="125.26161" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_29" y2="256.86168" x2="304.03101" y1="269.78477" x1="309.26178" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_30" y2="271.01554" x2="296.031" y1="269.78477" x1="308.95409" fill-opacity="null" stroke-opacity="null" stroke-width="3" stroke="#000" fill="none"/>
								<text xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_31" y="175.51155" x="207.01398" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">a</text>
								<text xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_32" y="103.21108" x="207.95295" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">b</text>
								<text xml:space="preserve" text-anchor="start" font-family="'Trebuchet MS', Gadget, sans-serif" font-size="24" id="svg_33" y="225.74629" x="188.23464" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">c</text>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_34" y2="159.95317" x2="219.57424" y1="160.24471" x1="208.20398" fill-opacity="null" stroke-opacity="null" stroke="#000" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_35" y2="83.15511" x2="220.2703" y1="83.44665" x1="208.90003" fill-opacity="null" stroke-opacity="null" stroke="#000" fill="none"/>
								<line stroke-linecap="null" stroke-linejoin="null" id="svg_36" y2="210.53315" x2="200.54874" y1="210.8247" x1="189.17848" fill-opacity="null" stroke-opacity="null" stroke="#000" fill="none"/>
								</g>
							</svg>
							<div style="width: 500px; text-align: center;"><i>Рисунок 1. Функция \(F_{ls}\)</i></div>
						</div>
						<h4>Алгоритм:</h4>
						<ol>
							<li>Пусть у точки есть координаты <code>x</code> и <code>y</code>, а также её число <code>n</code>.</li>
							<li>Найти \(F_{ls}\) для данной прямой и каждой из сторон данного многоугольника, сохранить все точки в массиве \(M\) вместе с их числами.</li>
							<li>Отсортировать массив \(M\) по координатам и по числу <code>n</code> по неубыванию.</li>
							<li>Создать счётчик <code>cnt</code>, присвоить ему начальное значение 0.</li>
							<li>Для каждой точки в \(M\): если число <code>n</code> текущей точки равно 0, то увеличить <code>cnt</code> на 1.</li>
							<li>Создать пустой массив отрезков \(R\).</li>
							<li>Для \(c \in [0;\mathrm{len}(M)-1)\):
								<ul>
									<li>Если число <code>n</code> точки \(M_{c}\) равно 0, то уменьшить значение <code>cnt</code> на 1.</li>
									<li>Если координаты точки \(M_{c}\) равны координатам точки \(M_{c+1}\), то добавить в \(R\) отрезок \([M_{c}; M_{c}]\).</li>
									<li>Иначе если <code>cnt</code> нечётно, то добавить в \(R\) отрезок \([M_{c}; M_{c+1}]\).</li>
								</ul>
							</li>
						</ol>
						<p>Результатом будет объединение отрезков в массиве \(R\).</p>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/pvkpuhtU8n4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
	</body>
</html>