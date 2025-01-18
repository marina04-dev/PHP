<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favourite Singers</title>
</head>
<style>
h4,
h1 {
    text-align: left;
}

h4 {
    color: red;
}
</style>

<body>
    <div>

        <h1 align="left">Favourite Singers</h1>
        <h4 align="left" style=color:red>(Reversed)</h4><br>
        <?php
      
        function utf8_strrev($str)
        {
            preg_match_all('/./us', $str, $ar);
            return join('', array_reverse($ar[0]));
        }
        $myArray = ["Ariana Grande", "Sakira", "BTS","George Michael"];
        for ($i = 0; $i < count($myArray); $i++) {
            echo "<ul><li>";
            $Reversed = utf8_strrev($myArray[$i]);
            echo $Reversed;
            echo "</li></ul>";
        }
        echo "<br><br>";
        echo "<h1>Favourite Singers</h1>";
        echo "<h4>(Normal)</h4>";
        $myArray = ["Ariana Grande", "Sakira", "BTS","George Michael"];
        for ($i = 0; $i < count($myArray); $i++) {
            echo "<ul><li>";
            $Reversed = ($myArray[$i]);
            echo $Reversed;
            echo "</li></ul>";
        }
        ?>
    </div>
</body>

</html>
