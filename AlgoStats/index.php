<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>AlgoStat</title>
    </head>
    <body>
        <h1>AlgoStat</h1>

            <fieldset>
              <h2>Rules</h2>
                <p class="warning">Please note that only numbers will be allowed</p>
                <p class="advice">Separator :  (",") - (";") - ("/") - (" ")</p>
                <p class="advice">Float numbers : (Ex: 6.50 /12345./.123/Max: 12345.678)</p>
                <p class="advice">Max size number : 5 digits before the point / 3 digits after the point</p>
            </fieldset><br>

            <form method="post" action="result.php">
                <select name="sortType">
                    <option value="Insertion">Insertion</option>
                    <option value="Selection">Selection</option>
                    <option value="Bubble">Bubble</option>
                    <option value="Shell">Shell</option>
                    <option value="Merge">Merge</option>
                    <option value="Quick">Quick</option>
                    <option value="Comb">Comb</option>
                </select><br><br>

                Numbers: <input type="text" name="numbers" maxlength="50"><br><br>

                <button type="submit" >Sort Me!</button>
            </form>
    </body>
</html>
