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
		<h1>Использование сканирующей прямой для поиска пары пересекающихся отрезков</h1>
		<hr>
		<div class="row">
			<div class="col-md-8">
				 
				<p>Нам необходимо найти среди данных отрезков пару пересекающихся. Назовем началом каждого отрезка ту точку, у которой значение координаты <i>x</i> меньше, если координаты <i>x</i> точек равны, то назовем началом ту точку, у которой значение координаты <i>y</i> меньше. Назовем концом вторую точку каждого отрезка. Теперь запустим сканирующую прямую вправо.</p>
				<p>Если сканирующая прямая пересекает начало отрезка (рис. 1), то добавим значение координаты <i>y</i> начала отрезка в заранее созданный массив m и отсортируем его по координате <i>y</i>, то есть таким образом, чтобы числа в нем шли от самого маленького к самому большому.</p>
				<p>Если сканирующая прямая пересекает конец отрезка (рис. 2), то посмотрим на соседние значения координат <i>y</i> в массиве m для координаты <i>y</i> начала отрезка, конец которого пересекает сканирующая прямая в данный момент, и посмотрим на отрезки с такими координатами <i>y</i> у начала отрезка. Если хотя бы один из них пересекает отрезок, конец которого пересекает сейчас сканирующая прямая, то мы нашли пару пересекающихся отрезков, но если нет, то ни отрезки, координаты начала y которых меньше, ни те, у которых <i>y</i> больше, не пересекают "закрывающийся" отрезок. В таком случае сканирующая прямая просто продолжит движение. Если она пройдет через концы всех отрезков, и не найдутся пересекающиеся отрезки, то таких отрезков нет.
				</p>
				<h4> Подробнее изучить информацию можно в видео: </h4>
				<p> <iframe width="560" height="315" src="https://www.youtube.com/embed/oDfpYchelaU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </p>
				
			</div>
			<div class="col-md-4">
				<p> <img src=images/скан2(2).svg> </p>
				<p> рис. 1 </p>
				<p> <img src=images/скан3(1).svg> </p>
				<p> рис. 2 </p>
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

