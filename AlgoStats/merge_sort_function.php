<?php

function mergeSortFunction($arrayToSplit, &$nbIteration) : array{ // Permet de séparer le tableau en plusieurs parties de façons récursive
  if(count($arrayToSplit) == 1 ) return $arrayToSplit;

      $mid = count($arrayToSplit) / 2;
      $left = array_slice($arrayToSplit, 0, $mid);
      $right = array_slice($arrayToSplit, $mid);

      $left = mergeSortFunction($left,$nbIteration);
      $right = mergeSortFunction($right,$nbIteration);

      return merge($left, $right,$nbIteration);
  }

  function merge($left, $right,&$nbIteration)
  {
      $result = array();
      $leftIndex = 0;
      $rightIndex = 0;

      while($leftIndex<count($left) && $rightIndex<count($right))
      {
          if($left[$leftIndex]>$right[$rightIndex])
          {
              $result[]=$right[$rightIndex];
              $rightIndex++;
              $nbIteration++;
          }
          else
          {
              $result[]=$left[$leftIndex];
              $leftIndex++;
              $nbIteration++;
          }
      }
      while($leftIndex<count($left))
      {
          $result[]=$left[$leftIndex];
          $leftIndex++;
          $nbIteration++;
      }
      while($rightIndex<count($right))
      {
          $result[]=$right[$rightIndex];
          $rightIndex++;
          $nbIteration++;
      }
      return $result;
  }
