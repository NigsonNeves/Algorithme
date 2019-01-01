<?php

include_once 'utils.php';
include_once 'sorts2.php';

function insertionSort(string $textArea): array
{
    $nbIteration = 0;
    $convertedArray = formatArray($textArea);
    $start = microtime(true);

    for ($i = 0; $i < count($convertedArray[0]); $i++) {
        $val = $convertedArray[0][$i];
        $j = $i - 1;

        while ($j >= 0 && $convertedArray[0][$j] > $val) {
            $convertedArray[0][$j + 1] = $convertedArray[0][$j];
            $j--;
            $nbIteration++;
        }
        $nbIteration++;
        $convertedArray[0][$j + 1] = $val;
    }
    $time_elapsed_secs = microtime(true) - $start;

    return array($convertedArray, $time_elapsed_secs, $nbIteration);
}

function selectionSort(string $textArea): array
{
    $nbIteration = 0;
    $convertedArray = formatArray($textArea);
    $start = microtime(true);

    for ($i = 0; $i < count($convertedArray[0]) -1; $i++) {
        $min = $i;

        for ($j = $i + 1; $j < count($convertedArray[0]); $j++) {
            if ($convertedArray[0][$j] < $convertedArray[0][$min]) {
                $min = $j;
                $nbIteration++;
            }
            $nbIteration++;
        }
        $tmp = $convertedArray[0][$min];
        $convertedArray[0][$min] = $convertedArray[0][$i];
        $convertedArray[0][$i] = $tmp;
    }
    $time_elapsed_secs = microtime(true) - $start;

    return array($convertedArray, $time_elapsed_secs, $nbIteration);
}

function bubbleSort(string $textArea): array
{
    $nbIteration = 0;
    $convertedArray = formatArray($textArea);
    $start = microtime(true);

    for ($i = 0; $i < count($convertedArray[0]) -1; $i++) {
        for ($j = 0; $j < count($convertedArray[0]) - 1 - $i; $j++) {
            if ($convertedArray[0][$j+1] < $convertedArray[0][$j]) {
                $tmp = $convertedArray[0][$j];
                $convertedArray[0][$j] = $convertedArray[0][$j+1];
                $convertedArray[0][$j+1] = $tmp;
                $nbIteration++;
            }
              $nbIteration++;
        }
    }
    $time_elapsed_secs = microtime(true) - $start;

    return array($convertedArray, $time_elapsed_secs, $nbIteration);
}

function sortValues(string $sortType, string $numbers): array
{
    if (!empty($numbers)) {
        switch ($sortType) {
            case "Insertion":
                return insertionSort($numbers);
                break;
            case "Selection":
                return selectionSort($numbers);
                break;
            case "Bubble":
                return bubbleSort($numbers);
                break;
            case "Shell":
                return shellSort($numbers);
                break;
            case "Merge":
                return mergeSort($numbers);
                break;
            case "Quick":
                return quickSort($numbers);
                break;
            case "Comb":
                return combSort($numbers);
                break;
        }
    }
}
