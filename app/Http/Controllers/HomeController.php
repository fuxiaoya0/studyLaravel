<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('home');
    }

    /**
     * 三角螺旋数组
     * */
    public function triangularHelixArray(Request $request, $loop_times = 1) {
        echo "<h1>triangularHelixArray</h1>";
        $x = $y = 0;
        $array = [];
        $number = 1;
        $array[$x][$y] = $number;
        $number++;
        $x++;
        $direction = "down";
        for ($i = 2; $i <= (int)$loop_times; $i++) {
            $start = $number;
            $middle = $number + $i - 1;
            $end = $middle + $i - 1;
            while ($number >= $start && $number <= $end) {
                $array[$y][$x] = $number;
                $this->nextXY($x, $y, $direction, $number == ($middle - 1));
                $number++;
            }
        }
        return view('triangularhelixarray', ['array' => $array]);
    }

    protected function nextXY(&$x, &$y, &$direction, $turn = false) {
        switch ($direction) {
            case 'up':
                if ($y == 0) {
                    $x++;
                    $direction = 'down';
                } else {
                    $y--;
                }
                break;
            case 'down':
                $y++;
                $turn && $direction = 'left';
                break;
            case 'left':
                if ($x == 0) {
                    $y++;
                    $direction = 'right';
                } else {
                    $x--;
                }
                break;
            case 'right':
                $x++;
                $turn && $direction = 'up';
                break;
            default:
                break;
        }
    }

    /**
     * 三角螺旋数组 1
     * */
    public function triangularHelixArray1(Request $request, $loop_times = 1) {
        echo "<h1>triangularHelixArray1</h1>";
        $array = [];
        $num = 1;
        for ($i = 1; $i <= $loop_times; $i++) {
            if ($i % 2 == 0) {
                for ($y = 0; $y < $i; $y++) {
                    $array[$y][$i - 1] = $num++;
                }
                for ($x = $i - 2; $x >= 0; $x--) {
                    $array[$i - 1][$x] = $num++;
                }
            } else {
                for ($x = 0; $x < $i; $x++) {
                    $array[$i - 1][$x] = $num++;
                }
                for ($y = $i - 2; $y >= 0; $y--) {
                    $array[$y][$i - 1] = $num++;
                }
            }
        }
        dump($array);
        return view('triangularhelixarray', ['array' => $array]);
    }

    /**
     * 三角螺旋数组 2
     * */
    public function triangularHelixArray2(Request $request, $loop_times = 1) {
        echo "<h1>triangularHelixArray2</h1>";
        $array = [];
        for ($num = 1; $num <= $loop_times * $loop_times; $num++) {
            $loop = ceil(sqrt($num));
            $start = pow($loop - 1, 2) + 1;
            $end = $loop * $loop;
            $middle = ($start + $end) / 2;
            if ($loop % 2 == 0) {
                if ($num >= $start && $num <= $middle) {
                    $x = $loop - 1;
                    $y = $num - $start;
                } else {
                    $x = $end - $num;
                    $y = $loop - 1;
                }
            } else {
                if ($num >= $start && $num <= $middle) {
                    $y = $loop - 1;
                    $x = $num - $start;
                } else {
                    $y = $end - $num;
                    $x = $loop - 1;
                }
            }
            $array[$y][$x] = $num;
        }
        return view('triangularhelixarray', ['array' => $array]);
    }

    /**
     * 三角螺旋数组 3
     */
    public function triangularHelixArray3(Request $request, $loop_times = 1) {
        echo "<h1>triangularHelixArray3</h1>";
        $array = [];
        for ($i = 1; $i <= $loop_times; $i++) {
            $start = ($i - 1) * ($i - 1) + 1;
            $end = $i * $i;
            $middle = ($start + $end) / 2;
            if ($i % 2 == 0) {
                for ($num = $start; $num <= $middle; $num++) {
                    $array[$num - $start][$i - 1] = $num;
                }
                for ($num = $end; $num > $middle; $num--) {
                    $array[$i - 1][$end - $num] = $num;
                }
            } else {
                for ($num = $start; $num <= $middle; $num++) {
                    $array[$i - 1][$num - $start] = $num;
                }
                for ($num = $end; $num > $middle; $num--) {
                    $array[$end - $num][$i - 1] = $num;
                }
            }
        }
        return view('triangularhelixarray', ['array' => $array]);
    }
}