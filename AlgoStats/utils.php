<?php

function stringToInt(array $array): array
{
    for ($i = 0; $i < count($array); $i++) {
      for ($j = 0; $j < count($array[$i]); $j++) {
        if (strpos($array[$i][$j], '.') !== FALSE) {
            $array[$i][$j] = floatval($array[$i][$j]);
        } else {
            $array[$i][$j] = intval($array[$i][$j]);
        }
    }
  }

    return $array;
}

function sequenceRegex()
{
    return "/^[+-]?([0-9]{1,5}([.][0-9]{1,3})?|[.][0-9]{1,3})$/m";
}

function cleanSequence(string $brutText)
{
    return str_replace(['/',',',';',' ',"\r"], "\n", $brutText);
}

function formatArray(string $brutText)
{
    $string = cleanSequence($brutText);

    preg_match_all(sequenceRegex(), $string, $sortTab);

    return stringToInt($sortTab);
}
