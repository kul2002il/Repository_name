<!DOCTYPE html>
<html>
<head>
    <title>Практическая работа №12</title>
    <meta charset="utf-8">
</head>
<body>
    <header>
        <h1>Практическая работа №12</h1>
        <p>Выполнил Кулманаков Илья.</p>
    </header>

    <main>
    <?php
        class Point{
            public $x;
            public $y;
            public $z;

            public function distance(Point $point)
            {
                $dx = $this->x - $point->x;
                $dy = $this->y - $point->y;
                $dz = $this->z - $point->z;
                return sqrt($dx * $dx + $dy * $dy + $dz * $dz);
            }
        }
        $p1 = new Point();
        $p1->x = 1;
        $p1->y = 1;
        $p1->z = 1;

        $p2 = new Point();
        $p2->x = 4;
        $p2->y = 5;
        $p2->z = 1;

        echo 'Дистанция равна ' . $p1->distance($p2);
    ?>
    </main>
</body>
</html>