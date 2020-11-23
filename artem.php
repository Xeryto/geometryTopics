<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Geometry topics</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' rel='stylesheet'>
    <link href="./style.css" rel="stylesheet">

</head>

<body>
<?php
require_once 'navbar.html';
?>

<main class="content-wrapper">
    <div class="container-fluid">
        <h1>Поиск двух ближайших точек на плоскости</h1>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <p>Задача:</p>
                <p>Дано множество \(n\) точек на плоскости с координатами \( (x, y) \) каждая.
                    Найти пару точек, между которыми будет минимальное расстояние по сравнению с другими точками.</p>
                <p>Для решения этой задачи мы можем воспользоваться либо алгоритмом полного перебора всех пар точек,
                    либо алгоритмом "Разделяй и влавствуй".
                    Здесь мы разберем второй вариант, так как полный перебор работает медленнее при любом количестве
                    точек.</p>
                <ol>
                    <li>Для начала присвоим каждой точке ее порядковый номер (начиная с \(0\)). Это нужно, чтобы
                        проследить какие две точки в итоге будут самыми близкими и в конечном итоге вывести их номера.
                        Назовем массив точек \(P\). Отсортируем \(P\) по \(x\) координате каждой точки.
                    </li>
                    <br>
                    <li>Разделим \(P\) на две равные половины: \(P_l = \{P[0], ..., P[\cfrac{n}{2}]\}\), \(P_r =
                        \{P[\cfrac{n}{2}+1], ..., P[n-1]\}\).
                        Если \(n\) - нечетное, тогда пусть \(P[div(\cfrac{n}{2})]\) принадлежит \(P_l\).
                        По сути мы проводим вертикальную прямую через точку \(P[div(\cfrac{n}{2})]\) и делим точки на
                        те, которые слева, и которые справа.
                    </li>
                    <br>
                    <li>Рекурсивно найдем \(d_l\) и \(d_r\) - минимальные расстояния между точками из левого и правого
                        массива соответсвенно.
                        Каждый раз переходя на меньший уровень рекурсии мы выполняем этапы \(3\)-\(5\) заново.
                        Остановить рекурсию надо, когда в локальных \(P_r\) и \(P_l\) будет не больше \(2\)-х точек.
                        Если в каком-то массиве будет лишь \(1\) точка, то в этом массиве не будет \(d_{min}\)
                    </li>
                    <br>
                    <li>Пусть \(d = min(d_l, d_r)\) (Если \(d_l\) или \(d_r\) не существует, то за \(d\) берем
                        существующее значение).
                        Возможно это растояние и есть минимальное, но нужно проверить есть ли две точки с разных сторон
                        от прямой,
                        которые ближе друг к другу, чем \(d\). Если такие точки есть, то они точно находятся не дальше,
                        чем на \(d\) от разделяющей прямой.
                        Проведем две вертикальные прямые на расстоянии \(d\) от точки \(P[div(\cfrac{n}{2})]\) с разных
                        сторон.
                        Теперь все точки, которые находятся между левой и правой прямой занесем в массив \(S\).
                        Отсортируем массив по \(y\) координате.
                    </li>
                    <br>
                    <li>Пройдемся по всем точкам в массиве и применим функцию \(C(p_i) = \{p_j \mid p_j \in S, y_i-d \lt
                        y_j \leq y_i\} \).
                        Если говорить словами, то мы проверяем, чтобы точка была между левой и правой прямой; была
                        отдалена от данной точки меньше, чем на \(d\) единиц по \(y\) и была ниже расматриваемой точки.
                        Осталось лишь посмотреть расстояния между \(p_i\) и точек из полученного множества, и так для
                        каждой \(p_i \in S\).
                        Теперь осталось только сравнить все получившиеся расстояния с \(d\) и вернуть \(2\) точки, между
                        которыми это расстояние.
                    </li>
                </ol>
                <p>Также можете посмореть видео-объяснение этой задачи:</p>
                <iframe width="800" height="500" src="https://www.youtube.com/embed/OH_Tnl59JB4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>Источники (если все еще не понятно можете посмотреть их):</p>
                    <ol>
                    <li><a href="https://e-maxx.ru/algo/nearest_points">e-maxx.ru</a> (Здесь описано более
                        математическим языком)
                    </li>
                    <li>
                        <a href="https://www.geeksforgeeks.org/closest-pair-of-points-using-divide-and-conquer-algorithm/">geeksforgeeks.org</a>
                        (на английском, зато есть код и видео)
                    </li>
                    </ol>
            </div>
            <div class="col-md-4">
                <img alt="your image" src="./images/main_topic.svg"> <br><br><br><br><br><br>
                <img alt="your image" src="./images/step2-3.svg"> <br><br><br><br>
                <img alt="your image" src="./images/step4-5.svg">
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
<script async id="MathJax-script" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script src="./script.js"></script>
</body>
</html>

