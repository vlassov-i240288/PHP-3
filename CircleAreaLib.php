
// в процессе разарботки, оставляю пока заглушку

<?php
class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal**2))/4;

       return $area;
   }
}

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal**2)/2;

        return $area;
    }
}

Имеющиеся интерфейсы:
<?php
interface ISquare
{
    function squareArea(int $sideSquare);
}

interface ICircle
{
    function circleArea(int $circumference);
}