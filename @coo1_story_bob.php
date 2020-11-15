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
		<h1>Сумма Минковского</h1>
		<hr>
		<div class="row">
			<div class="col-md-8">
				<p>Сумма Минковского это попытка определения оператора суммы для двух фигур на плоскости (в пространстве тоже это возможно делать). Эту операцию мы выполняем с помощью перебора всех сумм координат вершин фигур A и B, тем самым получаем множество точек на плоскости, которые у нас получились ранее.</p>
				<p>Т.е. как мы находим новые вершины для будущей Фигуры Суммы Минковского: \( Ci[x, y] : Ai[x, y] + Bi[x, y]\)</p>
				<p>Более формально, Сумма Минковского это: \( C = {a + b : a > A, b > B} \), где > - "принадлежит".</p>
				<p>Так же можно определить оператор вычитания для фигур на плоскости, но смысла в этом особого нет. Но я введу определение оператора суммы для двух фигур в пространстве.</p>
				<p>Т.е. теперь подсчёт будет выглядеть вот так: \( Ci[x, y, z] = Ai[x, y, z] + B[x, y, z]\) </p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/6v_1DgvLcLw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-md-4">
				<img src="images/plswork.jpg" alt="Как это работает">
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