<?php

function quickSortFunction(array $tab, &$nbIteration) : array{
$size = count($tab);

if($size <= 1){
  return $tab;
}
else{

  $pivot = $tab[0];

  $left = $right = array();

  for($i = 1; $i < count($tab); $i++)
  {
    if($tab[$i] < $pivot){ // Met l'élément dans le tableau de gauche
      $left[] = $tab[$i];
      $nbIteration++;
    }
    else{
      $right[] = $tab[$i]; // Met l'élément dans le tableau de droite
      $nbIteration++;
    }
    $nbIteration++;
  }

  return array_merge(quickSortFunction($left,$nbIteration), array($pivot),quickSortFunction($right,$nbIteration)); //Retourne un tableau trié
}
}
