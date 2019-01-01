<?php
include_once "merge_sort_function.php";
include_once "quick_sort_function.php";

function shellSort($textArea) : array{
  $convertedArray = formatArray($textArea);
  $nbIteration = 0;
  $size = count($convertedArray[0]);
  $gap = floor($size/2);
  $start = microtime(true);

  while ($gap > 0) {
      for ($i = $gap; $i < count($convertedArray[0]); $i++) {
        $saveItem = $convertedArray[0][$i];
        $j= $i;

        while($j >= $gap && $convertedArray[0][$j-$gap] > $saveItem){
          $convertedArray[0][$j] = $convertedArray[0][$j - $gap];
          $j -= $gap;
          $nbIteration++;
        }
        $convertedArray[0][$j] = $saveItem;
      }
      $nbIteration++;
      $gap = floor($gap/2);
  }
    $time_elapsed_secs = microtime(true) - $start;

    return array($convertedArray, $time_elapsed_secs, $nbIteration);
}

function mergeSort($textArea) : array{
  $convertedArray = formatArray($textArea);
  $tabToSort = $convertedArray[0];
  $nbIteration = 0;
  $start = microtime(true);
  $result = mergeSortFunction($tabToSort, $nbIteration);
  $time_elapsed_secs = microtime(true) - $start;

  return  array($result,$time_elapsed_secs,$nbIteration);
}

function quickSort($textArea) : array{
  $convertedArray = formatArray($textArea);
  $tabToSort = $convertedArray[0]; // Afin de n'avoir qu'un tableau
  $nbIteration = 0;
  $start = microtime(true);
  $result = quickSortFunction($tabToSort,$nbIteration); //appel de la fonction de tri
  $time_elapsed_secs = microtime(true) - $start;

  return array($result,$time_elapsed_secs,$nbIteration); // retourne le temps et le tableau trié
}

function combSort($textArea) : array{
  $convertedArray = formatArray($textArea);
  $nbIteration = 0;
  $swap = TRUE;
  $gap = count($convertedArray[0]); //Taille tableau
  $start = microtime(true); // Chrono

  while ($gap > 1 || $swap != FALSE){
    $swap = FALSE;
    $i=0;
    $gap = floor($gap/1.3); //écart de comparaison

    while($i+$gap < count($convertedArray[0])){
      if ($convertedArray[0][$i] > $convertedArray[0][$i + $gap]){
        $temp = $convertedArray[0][$i];
        $convertedArray[0][$i] = $convertedArray[0][$i+$gap];
        $convertedArray[0][$i+$gap] = $temp;
        $swap = TRUE;
        $nbIteration++;
      }
      $i++;
    }
    $nbIteration++;
  }
  $time_elapsed_secs = microtime(true) - $start;

  return array($convertedArray, $time_elapsed_secs, $nbIteration);
}
