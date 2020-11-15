<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Geometry topics</title>
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
		<h1>Пересечение окружностей</h1>
		<hr>
		<p>Итак, изначально нам даны радиусы двух окружностей и их координаты, а нам необходиом найти координаты точек пересечения этих окружностей. Чтобы решить эту задачу, предлагаю разорать несколько случаев:</p>
		<h2>Оглавление</h2>
		<ul>
			<li><a href="#first">Обозначения</a></li>
			<li><a href="#second">Бесконенчое количество точек пересечения</a></li>
			<li><a href="#third">Ещё обозначения...</a></li>
			<li><a href="#forth">0 точек пересечения</a></li>
			<li><a href="#fifth">Координаты по теореме Фалеса</a></li>
			<li><a href="#sixth">1 точка пересечения (внешнее касание)</a></li>
			<li><a href="#seventh">1 точка пересечения (внутреннее касание)</a></li>
			<li><a href="#eighth">Две точки пересечения</a></li>
			<li id="first"><a href="#ninghth">Выведение формулы</a></li>
			<li><a href="#tenth">Для тех, кому лень читать</a></li>
		</ul>
		<div class="row">
			<div class="col-md-8">
				<h2>Обозначения</h2>
				<hr>
				<p>Перед тем, как начать, было бы неплохо определться с обозначениями. Итак...</p>
				<p>O1, O2 - центры окружностей</p>
				<p>R1, R2 - радиусы окружностей</p>
				<p>x1, y1, x2, y2 - координаты центров окружностей</p>
				<p id="second">Остальные обозначения добавятся по ходу событий)))</p>
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
				<h2>I случай - бесконечное количетсво точек пересечения</h2>
				<hr>
				<p>Если количество точек пересечения равно бексконечности, то окружности совпадают.</p>
				<p><i><u>Условия выполнения:</u></i></p>
				<div class="col-md-2">
					<p>\( x1 = x2 \)</p>
					<p>\( y1 = y2 \)</p>
					<p id="third">\( R1 = R2 \)</p>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/1.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<h2>Ещё обозначения...</h2>
			<hr>
				<p>Далее я буду часто использовать для решения нашей задачи расстояние между центрами окружностей, пусть это будет с. Найти его можно по теореме Пифагора:</p>
				<h5 id="forth">\( c= \sqrt{(x1-x2)^2+(y1-y2)^2} \)</h5>
			</div>
			<div class="col-md-4">
				<img src="images/2.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<h2>II случай - количествотсво точек пересечения равно 0</h2>
			<hr>
				<p>Если окружности не пересекаются, то одно из чисел R1, R2, c будет больше, чем сумма двух других.</p>
				<p><i><u>Условия выполнения:</u></i></p>
				<div class="col-md-2">
					<p>\( R1 > R2 + c \)</p>
					<p style="text-align: center;">или</p>
					<p>\( R2 > R1 + c \)</p>
					<p style="text-align: center;">или</p>
					<p id="fifth">\( c > R1 + R2 \)</p>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/3.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<p ></p>
			<h2>Как найти координаты точки по теореме Фалеса?	</h2>
			<hr>
				<p>Итак, нам известно, что точка (x0, y0), которую нам нужно найти лежит 
				на отрезке О1О2. Мы знаем координаты точек О1 и О2, а также расстояние от них до нужной нам точки.
				Тогда мы можем воспользоваться теоремой Фалеса и вычислить координаты из следующей формуле:</p>
				<h3>\( {R1 \over R2} = {{x0-x1} \over {x2-x0}} \)</h3>
				<h3  id="sixth">\( {R1 \over R2} = {{y0-y1} \over {y2-y0}} \)</h3>
			</div>
			<div class="col-md-4">
				<img src="images/5.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<h2>III случай - 1 точка пересечения (внешнее касание)</h2>
			<hr>
				<p  id="seventh">Если же у нас окружности соприкасаются в одной точке (M), то есть два случая, сначала разберём внешнее касание.
				Нам известно, что точка М лежит на отрезке О1О2, а также расстояние от точки О1 до точки М, следовательно, мы можем воспользоваться 
				<a href="#fifth">формулами для вычисления координат.</a> </p>
			</div>
			<div class="col-md-4">
				<img src="images/6.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<h2>III случай - 1 точка пересечения (внутреннее касание)</h2>
			<hr>
				<p>Если уже у нас внутреннее касание, то мы можем найти координаты точки М практически по той же <a href="#fifth"> формуле,</a> но необходимо будет учесть, что
				расположение окружностей нам неизвестно, поэтому, что бы не разбирать два случая, мы воспользуемся функциями нахождения максимума и минимума:</p>
				<h3>\( {R1 \over R2} = {{max(x0-x1)} \over {min(x2-x0)}} \)</h3>
				<h3  id="eighth">\( {R1 \over R2} = {{max(y0-y1)} \over {min(y2-y0)}} \)</h3>
			</div>
			<div class="col-md-4">
				<img src="images/7.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<h2>IV случай - 2 точки пересечения</h2>
			<hr>
				<p>Теперь у нас точки М - это пересечение О1О2 и отрезка, соединяющего нужные нам точки (M1, M2).
				Заметим, что расстояние от О1 до М (а) изменилось, мы его можем найти по следующей формуле:</p>
				<h5>\( a = \frac {c^2 + R1^2+ R2^2}{2c} \)</h5>
				<p>Мы знаем расстояние, следовательно по <a href="#fifth">этой</a> формуле можем найти координаты точки М. Теперь нужно найти 
				расстояние от точки M до точки М1, а то есть и до М2, чтобы вычислить нужные нам координаты по следуещей формуле:</p>
				<h5>\( h= \sqrt{R1^2-a^2} \)</h5>
				<p>А как я вывела эти две формулы можно узнать <a href="#ninghth"> здесь. </a></p>
				<p>Остаётся только вычислить координаты точек М1 и М2 по <a href="#fifth"> самой первой формуле </a> и задача решена!!!</p>
			</div> 
			<div class="col-md-4">
				<img src="images/8.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<h2 id="ninghth">Как вывести формулу?</h2>
			<hr>
				<h5>\(  \begin{cases}
						a^2 + h^2 = R1^2 \\[0.3em]
						b^2 + h^2 = R2^2 \\[0.3em]
						a + b = c
					\end{cases} \)</h5>
				<h5>\( R1^2 + R2^2 = a^2 - b^2 = (a-b)(a+b) = c(a-b) \)</h5>
				<h5>\( \frac{R1^2+R2^2} {c} = a-b\)</h5>
				<h5>\( c +\frac{R1^2+R2^2} {c} = c+a-b = 2a\)</h5>
				<h5>\( a = \frac {c^2 + R1^2+ R2^2}{2c} \)</h5>
				<h5 id="tenth">\( h= \sqrt{R1^2-a^2} \)</h5>
			</div>
			<div class="col-md-4">
				<img src="images/9.svg" alt="your image">
			</div>
		</div>
		<p></p>
		<div class="row">
			<div class="col-md-8">
			<h2>Если лень читать...</h2>
			<hr>
				<p>В данном видео я рассказываю всё то же самое, что и написано выше, хорошего просмотра!!!</p>
			</div> 
		</div>
		<iframe width="917" height="428" src="https://www.youtube.com/embed/uAq52Z6YoP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

