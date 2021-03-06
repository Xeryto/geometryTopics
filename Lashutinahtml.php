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
            <h1>Поиск двух наиболее удаленных точек</h1>
            <hr>
            <div class="row">
                <div class="col-md-7">
                    <p><b>Метод вращающихся калиперов</b></p>
                    <ul type="disc">
                        <li>
                            Найдём выпуклую оболочку исходного множества точек.
                            <br>Теперь нужно найти две удаленные точки в выпуклом многоугольнике. </li>
                        <li>Возьмём две противоположные вершины многоугольника P и проведем через эти точки опорные параллельные прямые.
                            <br> <i>Прямая называется опорной, если внутренность многоугольника лежит только по одну сторону от этой прямой, в то время как прямая проходит хотя бы через одну вершину многоугольника.</i> <br> Найдем расстояние между этими
                            прямыми и сохраним.</li>
                        <li>Теперь стоит найти следующие две точки, через которые мы будем проводить прямые. Найдем угол между одной из опорных прямых и стороной многоугольника, содержащей точку, через которую проведена прямая. У нас есть две стороны, содержащие
                            эту точку, чтобы понять какую выбрать, следует условиться, в каком направлении производится обход. Аналогично найдем угол между второй опорной прямой и соответствующей ей стороной многоугольника <i>(рисунок 1)</i>.
                        </li>
                        <li>
                            Если углы равны, то обе точки переходят в точки, следующие по направлению обхода. Если же нет, то точка, принадлежащая меньшему углу, переходит в следующую, а другая остается на месте.
                        </li>
                        <li>
                            Так мы действуем до тех пор, пока прямые не совершат полный круг. Потом выводим максимум расстояний. <br> Алгоритм работает за \(O(N)\), реализовать его можно, храня указатели на противолежащие вершины и на каждой итерации
                            увеличивая либо один из указателей, либо сразу два.
                        </li>
                    </ul>
                    <p>
                        <a href="https://neerc.ifmo.ru/wiki/index.php?title=%D0%94%D0%B8%D0%B0%D0%BC%D0%B5%D1%82%D1%80_%D0%BC%D0%BD%D0%BE%D0%B6%D0%B5%D1%81%D1%82%D0%B2%D0%B0_%D1%82%D0%BE%D1%87%D0%B5%D0%BA_(%D0%B2%D1%80%D0%B0%D1%89%D0%B0%D1%8E%D1%89%D0%B8%D0%B5%D1%81%D1%8F_%D0%BA%D0%B0%D0%BB%D0%B8%D0%BF%D0%B5%D1%80%D1%8B)
 " style="color:#343a40">Информация об алгоритме взята с этого сайта.</a>
                    </p>
                </div>
                <div class=" col-md-5 ">
                    <figure style="text-align: center;">
                        <p><img src="images/lines_image.svg" alt="your image"></p>
                        <figcaption>
                            <i>Рисунок 1</i></figcaption>
                    </figure>
                    <br>
                    <p><iframe width="382" height="300" src="https://www.youtube.com/embed/qXXoTnYAwNk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </p>
                    <figure><i>Видео с объяснением</i>
                    </figure>
                </div>

            </div>
        </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="text-center"><span>Создано совместным трудом группы по информатике</span></div>
        </div>
    </footer>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
</body>

</html>