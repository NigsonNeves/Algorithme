<?php
include_once "sorts.php";

function checkView(string $type, array $tab){
  if ($_POST["sortType"] == "Quick" || $_POST["sortType"] == "Merge"){
    echo "<p>Sorted values :  ";

    for ($i = 0; $i < count($tab[0]); $i++)
    {
        echo "  " . $tab[0][$i] . " / ";
    }

    echo "</p>

    <p>Time:  ".number_format($tab[1],10). " Seconds</p>
    <p>Iteration number:  ".$tab[2]."</p>";
  }

  else {

  echo "<p>Sorted values :  ";

  for ($i = 0; $i < count($tab[0][0]); $i++)
  {
      echo "  " . $tab[0][0][$i] . " / ";
  }

  echo "</p>

  <p>Time:  ".number_format($tab[1],10). " Seconds</p>
  <p>Iteration number:  ".$tab[2]." </p>";
}

}

function checkError(string $type, string $numbers){
  if (isset($type) && !empty($numbers)) {
    $orderedNumbers = sortValues($type, $numbers);
      if (empty($orderedNumbers[0][0])){
          header("Refresh:1; url=index.php");
          echo '<script type="text/javascript">alert("Cannot sort this number/string !!!");</script>';
          exit();
      }
      return $orderedNumbers;
  } else {
      header("Refresh:1; url=index.php");
      echo '<script type="text/javascript">alert("Text field cannot be empty !!!");</script>';
      exit();
  }
}
