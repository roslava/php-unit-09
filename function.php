<?php

function t1($num, $arr)
{
    if (in_array($num, $arr)) {
        return "yes";
    } else {
        return "no";
    }
}

function t2($num, $arr)
{
    if (in_array($num, $arr, true)) {
        $all_values = array_count_values($arr);
        return $all_values[$num];
    } else {
        return "Нет такого числа среди значений массива. Возможно число записано как строчный элемент.";
    }
}

function t3($num, $arr)
{
    for ($i = count($arr); $i >= $num; $i--) {
        array_pop($arr);
    }
    return $arr;
}

function t4($num, $arr)
{
    $newArr = [];
    for ($i = count($arr) - 1; $i > 0; $i--) {
        if ($arr[$i] <= $num) {
            array_pop($arr);
        } else {
            $newArr[$i] = array_pop($arr);
        }
    }
    return array_reverse($newArr);
}

function t5($num, $arr)
{
    $counter = 0;

    if ($num == "even") {
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            if (array_pop($arr) % 2 != 0) continue;
            $counter += 1;
        }

    } elseif ($num == "odd") {
        for ($i = count($arr) - 1; $i >= 0; $i--) {
            if (array_pop($arr) % 2 == 0) continue;
            $counter += 1;
        }
    }
    return $counter;
}

function t6($ar)
{
    $new_ar = array_reverse($ar);
    return $new_ar;
}

function t7($arr)
{
    sort($arr);
    return $arr;
}

function t8($arr)
{
    array_pop($arr);
    return $arr;
}

function t9($arr)
{
    array_shift($arr);
    return $arr;
}

function t10($num, $arr)
{
    if (in_array($num, $arr, true)) {
        return array_search($num, $arr);
    } else {
        return 0;
    }
}