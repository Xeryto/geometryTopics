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
			<h1>Пересечение прямой и выпуклого многоугольника</h1>
			<hr>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <ul class="navbar-nav mr-auto" id="navAccordion1">
                    <li class="nav-item">
                        <a class="nav-link" href="intersecLine.php#fO" style="color: black;">Введение</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-collapse" href="#" id="hasSubItems6" data-toggle="collapse" data-target="#collapseSubItems6" aria-controls="collapseSubItems2" aria-expanded="false" style="color: black;">Развилка</a>
                        <ul class="nav-second-level collapse" id="collapseSubItems6" data-parent="#navAccordion">
                            <li class="nav-item">
                                <a class="nav-link" href="intersecLine.php#sO">
                                    <span class="nav-link-text" style="color: black;">Первый случай</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="intersecLine.php#tO">
                                    <span class="nav-link-text" style="color: black;">Второй случай</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
			<div class="row">
				<div class="col-md-8">
                    <h3 style="text-align: center;" id="fO">Введение</h3>
					<p>Допустим, у нас есть прямая, заданная какими-то координатами A,B и выпуклый многоугольник, заданный координатами n вершин по часовой стрелке (как на Рис. 1), и нам необходимо определить, пересекаются ли они, и если да, то определить количество точек пересечения и их координаты. Для решения этой задачи за log(n) воспользуемся бинпоиском по ответу. Для этого, в свою очередь, напишем функцию f1, которая на вход будет получать индексы точек многоугольника C,D из массива точек многоугольника и будет возвращать 2, если векторное произведение векторов AC и AD строго положительно, 1, если оно строго отрицательно и 0, если оно равно нулю. Далее создаем переменные </p>
					<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
						<pre style="margin: 0; line-height: 125%">l <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>, r <span style="color: #333333">=</span> n<span style="color: #333333">-</span><span style="color: #0000DD; font-weight: bold">1</span>, mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span></pre>
					</div>
                    <h3>Первое преобразование</h3>
					<p> Теперь нам нужно свести все "плохие" случаи (когда значения функции от \(r\),\(l\),\(mid\) равны) к "хорошему" (когда хотя бы одно значение функции отличается от остальных). Для этого напишем еще одну функцию f2, которая так же на вход будет принимать индекс точки многоугольника C в массиве точек многоугольника и будет возвращать cos, найденный по формуле \( cos = {AB*AC \over |AB|*|AC|} \). Теперь запустим бинпоиск с таким условием: </p>
					<!-- HTML generated using hilite.me -->
					<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;">
						<pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">while</span> f(l)<span style="color: #333333">==</span>f(r)<span style="color: #333333">==</span>f(mid) <span style="color: #000000; font-weight: bold">and</span> r<span style="color: #333333">-</span>l<span style="color: #333333">&gt;</span><span style="color: #0000DD; font-weight: bold">1</span>:
    <span style="color: #008800; font-weight: bold">if</span> f2(l) <span style="color: #333333">&gt;</span> f2(mid):
        r <span style="color: #333333">=</span> mid
        mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
    <span style="color: #008800; font-weight: bold">else</span>:
        l <span style="color: #333333">=</span> mid
        mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
</pre></div>
                    <h3 style="text-align: center;" id="sO">Развилка</h3>
                    <h4>Первый случай</h4>
					<p>Теперь важно проверить, появилось ли какое-то отличие между значениями функции, так как если нет - это означает, что пересечений у прямой и многоугольника нет и можно смело завершать программу, выводя 0. Если же отличие есть, то для дальнейшего решения нужно определить, что именно различается и запустить бинпоиск. Есть несколько вариантов, и вот первый:</p>
					<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">if</span> f(r) <span style="color: #333333">==</span> f(l):
    r1 <span style="color: #333333">=</span> r
    l1 <span style="color: #333333">=</span> mid
    mid1 <span style="color: #333333">=</span> (l1<span style="color: #333333">+</span>r1)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
    <span style="color: #008800; font-weight: bold">while</span> r1<span style="color: #333333">-</span>l1<span style="color: #333333">&gt;</span><span style="color: #0000DD; font-weight: bold">1</span>:
        <span style="color: #008800; font-weight: bold">if</span> f(l1) <span style="color: #333333">==</span> f(mid1):
            l1 <span style="color: #333333">=</span> mid1
            mid1 <span style="color: #333333">=</span> (l1<span style="color: #333333">+</span>r1)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
        <span style="color: #008800; font-weight: bold">else</span>:
            r1 <span style="color: #333333">=</span> mid1
            mid1 <span style="color: #333333">=</span> (l1<span style="color: #333333">+</span>r1)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
    r2 <span style="color: #333333">=</span> mid
    l2 <span style="color: #333333">=</span> l
    mid2 <span style="color: #333333">=</span> (l2<span style="color: #333333">+</span>r2)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
    <span style="color: #008800; font-weight: bold">while</span> r2<span style="color: #333333">-</span>l2<span style="color: #333333">&gt;</span><span style="color: #0000DD; font-weight: bold">1</span>:
        <span style="color: #008800; font-weight: bold">if</span> f(l2) <span style="color: #333333">==</span> f(mid2):
            l2 <span style="color: #333333">=</span> mid2
            mid2 <span style="color: #333333">=</span> (l2<span style="color: #333333">+</span>r2)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
        <span style="color: #008800; font-weight: bold">else</span>:
            r2 <span style="color: #333333">=</span> mid2
            mid2 <span style="color: #333333">=</span> (l2<span style="color: #333333">+</span>r2)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
</pre></div>
                    <h4 id="tO">Второй случай</h4>
					<p>В этом варианте мы запускаем два бинпоиска, потому что одна пара точек, образующих ребро, пересекаемое прямой, находится с одной стороны относительно \(mid\), а другая пара точек - с другой. Остался еще один случай:</p>
					<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold">else</span> <span style="color: #008800; font-weight: bold">if</span> f(r)<span style="color: #333333">==</span>f(mid):
    r <span style="color: #333333">=</span> mid
    <span style="color: #008800; font-weight: bold">while</span> r<span style="color: #333333">-</span>l<span style="color: #333333">&gt;</span><span style="color: #0000DD; font-weight: bold">1</span>:
        <span style="color: #008800; font-weight: bold">if</span> f(l) <span style="color: #333333">==</span> f(mid):
            l <span style="color: #333333">=</span> mid
            mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
        <span style="color: #008800; font-weight: bold">else</span>:
            r <span style="color: #333333">=</span> mid
            mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
<span style="color: #008800; font-weight: bold">else</span>:
    l <span style="color: #333333">=</span> mid
    mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
    <span style="color: #008800; font-weight: bold">while</span> r<span style="color: #333333">-</span>l<span style="color: #333333">&gt;</span><span style="color: #0000DD; font-weight: bold">1</span>:
        <span style="color: #008800; font-weight: bold">if</span> f(l) <span style="color: #333333">==</span> f(mid):
            l <span style="color: #333333">=</span> mid
            mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
        <span style="color: #008800; font-weight: bold">else</span>:
            r <span style="color: #333333">=</span> mid
            mid <span style="color: #333333">=</span> (l<span style="color: #333333">+</span>r)<span style="color: #333333">/</span><span style="color: #0000DD; font-weight: bold">2</span>
</pre></div>
					<p>В этом случае разные результаты функции f у границ - \(l\) и \(r\) - а значит одна пара точек уже найдена и перед запуском бинпоиска их необходимо куда-либо запомнить для поиска координаты точки пересечения позже. Итак, точки, определяющие грани, пересекаемые прямой найдены, осталась самая последняя проверка. Если функция f от одной из границ - \(r\) или \(l\) - выдает 0 - это значит, что прямая проходит через эту точку и, следовательно, точка пересечения только одна - и ее координаты это координаты этой границы. Если же функция f от обеих границ даёт ноль - это значит, что ребро, образованное этими определенными точками лежит на прямой и, следовательно, точек пересечения бесконечно много. Если же ни один из этих случаев не подходит - нужно найти точку пересечения. Допустим, пара точек, которые мы нашли - это D и E. Тогда, вычислим уравнения прямых: \[ a = A + ua*(B - A) \], \[ b = D + ub*(E - D) \]. Решение относительно точки a = b дает два уравнения на координаты (ua и ub): \[ x1 + ua*(x2 - x1) = x3 + ub*(x4 - x3) \], \[ y1 + ua*(y2 - y1) = y3 + ub*(y4 - y3) \]. Решая относительно ua и ub, имеем \[ ua = {(x4 - x3)*(y1-y3) - (x1 - x3)*(y4 - y3) \over (y4 - y3)*(x2-x1) - (y2 - y1)*(x4 - x3)} \], \[ ub = {(x2-x1)*(y1 - y3) - (x1 - x3)*(y2 - y1) \over (y4 - y3)*(x2-x1) - (y2 - y1)*(x4 - x3)} \]. Подстановка любого из этих значений в соответствующее уравнение прямой даст точку пересечения</p>
				</div>
				<div class="col-md-4" style="text-align: center;">
					<img src="images/method-draw-image.svg" alt="your image">
                    <p>Рис. 1</p>
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