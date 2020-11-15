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
        <h1>Выпуклая оболочка. Алгоритм Джарвиса (заворачивание подарка)</h1>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/eH9_QA_0wCY" frameborder="0" allowfullscreen>
                </iframe>
                <br />
                <br /><br /><hr /> <br /><br/>
                <h3>Оглавление: </h3>
                <ul>
                    <li><a href="#first">Введение и объяснение</a></li>
                    <li><a href="#second">Расположение точки C относительно вектора AB</a></li>
                    <li><a href="#third">Первый шаг - поиск стартовой точки</a></li>
                    <li><a href="#fourth">Второй шаг - построение выпуклой оболочки</a></li>
                    <li><a href="#fifth">Код алгоритма на Python 3.9</a></li>
                </ul>
                <br /><hr/><br/><br/>
                <h6>Перед тем, как говорить об Алгоритме Джарвиса, поговорим о выпуклых оболочках и о <a name="first">целях его использования</a></h6>
                <span>Что же такое - выпуклая оболочка?
Из рисунка (Рис. 1) более менее понятно, что это означает. (Красные гвоздики образуют минимальную выпуклую фигуру, в которую входят все серебряные гвоздики)Но вот более формальное определение:

Пусть на плоскости задано конечное множество точек A. Оболочкой этого множества называется любая

замкнутая линия H без самопересечений такая, что все точки из A лежат внутри этой
кривой. Если кривая H является выпуклой (например, любая касательная к этой кривой не пересекает ее больше ни в одной точке), то соответствующая оболочка также называется выпуклой. Наконец, минимальной выпуклой оболочкой (далее кратко МВО) называется выпуклая оболочка минимальной длины (минимального периметра. Выпуклая оболочка представляет из себя выпуклый многоугольник.
</span>
                <br /><br /><hr /><br/>
                <h6>Перед тем, как начинать обсуждать этот алгоритм, нам нужно научится узнавать <a name="second">расположение точки C относительно вектора AB</a></h6>
                <span>Пусть у нас есть вектор AB и точка C, нам нужно узнать справа или слева она находится.</span>
                <span>Для этого будем находить векторное произведение AB и BC. Точнее, будем пользоваться z координатой этого произведения. Где \(z = a.x*b.y - a.y*b.x\). Теперь смотрим: если z > 0, то поворот левый, < 0 --> правый.</span>
                <span>И теперь, функция rotate готова</span>
                <br /><br /><hr /><br/>
                <h6>Теперь можно поговорить и об Алгоритме Джарвиса.</h6>
                <h6><a name="third">Первый шаг - поиск стартовой точки</a></h6>
                <span>И действительно, первая проблема, с которой мы сталкиваемся - точка, с которой мы начнем строить оболочку.</span>
                <span>Здесь можно просто "договориться" брать самую левую точку фигуры. Которую мы найдем, пройдясь по массиву точек циклом. Да-да, по массиву, ведь мы будем хранить наш многоугольник как массив точек.</span>
                <br /><br /><hr /><br/>
                <h6><a name="fourth">Второй шаг - основной. Построение минимальной выпуклой оболочки</a></h6>
                <span>Основная идея - поиск самой правой точки A относительно стартовой вершины, и назначение ее текущей. После этого рекурсивно запускаем этот алгоритм от текущей, назначая ее стартовой.</span>
                <span>Можно завершить процесс, когда стартовая точка станет опять текущей</span>
                <br /><br /><hr /><br/>
                <h6>Собираем все вместе <a name="fifth">псевдокодом</a></h6>
                <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008800; font-weight: bold"></span> <span style="color: #0066BB; font-weight: bold">rotate</span>(A,B,C):
  <span style="color: #008800; font-weight: bold">return</span> (B<span style="color: #333333">.</span>x<span style="color: #333333">-</span>A<span style="color: #333333">.</span>x)<span style="color: #333333">*</span>(C<span style="color: #333333">.</span>y<span style="color: #333333">-</span>B<span style="color: #333333">.</span>y)<span style="color: #333333">-</span>(B<span style="color: #333333">.</span>y<span style="color: #333333">-</span>A<span style="color: #333333">.</span>y)<span style="color: #333333">*</span>(C<span style="color: #333333">.</span>x<span style="color: #333333">-</span>B<span style="color: #333333">.</span>x)
</pre></div>
                <br />
                <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">jarvismarch(A):
  n <span style="color: #333333">=</span> <span style="color: #007020">len</span>(A)
  P <span style="color: #333333">=</span> <span style="color: #007020">range</span>(n)
  <span style="color: #008800; font-weight: bold">for</span> i <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">range</span>(<span style="color: #0000DD; font-weight: bold">1</span>,n):
    <span style="color: #008800; font-weight: bold">if</span> A[P[i]][<span style="color: #0000DD; font-weight: bold">0</span>]<span style="color: #333333">&lt;</span>A[P[<span style="color: #0000DD; font-weight: bold">0</span>]][<span style="color: #0000DD; font-weight: bold">0</span>]:
      P[i], P[<span style="color: #0000DD; font-weight: bold">0</span>] <span style="color: #333333">=</span> P[<span style="color: #0000DD; font-weight: bold">0</span>], P[i]
  H <span style="color: #333333">=</span> [P[<span style="color: #0000DD; font-weight: bold">0</span>]]
  <span style="color: #008800; font-weight: bold">del</span> P[<span style="color: #0000DD; font-weight: bold">0</span>]
  P<span style="color: #333333">.</span>append(H[<span style="color: #0000DD; font-weight: bold">0</span>])
  <span style="color: #008800; font-weight: bold">while</span> <span style="color: #007020">True</span>:
    right <span style="color: #333333">=</span> <span style="color: #0000DD; font-weight: bold">0</span>
    <span style="color: #008800; font-weight: bold">for</span> i <span style="color: #000000; font-weight: bold">in</span> <span style="color: #007020">range</span>(<span style="color: #0000DD; font-weight: bold">1</span>,<span style="color: #007020">len</span>(P)):
      <span style="color: #008800; font-weight: bold">if</span> rotate(A[H[<span style="color: #333333">-</span><span style="color: #0000DD; font-weight: bold">1</span>]],A[P[right]],A[P[i]])<span style="color: #333333">&lt;</span><span style="color: #0000DD; font-weight: bold">0</span>:
        right <span style="color: #333333">=</span> i
    <span style="color: #008800; font-weight: bold">if</span> P[right]<span style="color: #333333">==</span>H[<span style="color: #0000DD; font-weight: bold">0</span>]:
      <span style="color: #008800; font-weight: bold">break</span>
    <span style="color: #008800; font-weight: bold">else</span>:
      H<span style="color: #333333">.</span>append(P[right])
      <span style="color: #008800; font-weight: bold">del</span> P[right]
  <span style="color: #008800; font-weight: bold">return</span> H
</pre></div>
                <br /><br/>
                <span>Если точка попадает в МВО, то ее можно больше не учитывать, значит возьмем и добавим ее в правильном порядке в массив H.
Этим кодом мы провели операции с стартовой вершиной:
Изначально положили ее в массив Н, затем
удалили ее,
а затем добавили ее в конец массива P. Таким образом, массив H будет изначально промежуточным. Также в конце функция вернет порядок точек, которые нужно будет соединить для построения МВО.
</span>
            </div>
            <div class="col-md-4">
                <img src="images/svg-editor-image(1).svg" alt="Ошибка загрузки рисунка 1" title="рисунок 1">
                <span class="underneath_addings">Рис. 1</span>
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