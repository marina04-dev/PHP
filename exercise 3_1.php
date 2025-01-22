<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise3.1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
    background-color: lightgrey;
}

#forma {
    text-align: center;
}

button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    border-radius: 10px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    margin-bottom: 20px;
    cursor: pointer;
}

input[type="number"] {
    width: 5%;
    height: 30px;
    /* margin-left: 26px; */
}

label {
    display: inline-block;
    /* margin-left: 30px; */
}

#total {
    text-align: center;
}

.noumera {
    border: 2px solid black;
    display: inline-table;
    padding: 8px;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 3px;
}

p {
    letter-spacing: 0;
    margin: auto;
    padding: 0.4em;
}

p#akereoi {
    border: 2px solid red !important;
}

p {
    letter-spacing: 0;
    margin: auto;
    border: 3px solid black;
}

a {
    text-decoration: none;
}
</style>

<body>
    <div id="forma">
        <form action="exercise3.1.php" method="post">
            <label for="start">Start<br> number</label><br>
            <input type="number" name="start" value=""><br><br>
            <label for="end">End<br> number</label><br>
            <input type="number" name="end"><br><br>
            <button>Run</button>
            <button type="reset" value="Reset">Reset</button>
    </div>



    </form>
    <div id="total">
        <?php
        $start = 0;
        $end = 0;
        // $c = 1;
        if (!empty($_POST["start"])) {
            $start = $_POST["start"];
        };
        if (!empty($_POST["end"])) {
            $end = $_POST["end"];
        };
        if ($start != 0 && $end != 0) {
            echo 'Integer numbers:' . '<br>' . 'From ' . $start . ' Until ' . $end . '<br>';
        }
        echo '<br>' . '<br>';
        echo '<div class="noumera" id="akereoi">';
        for ($i = $start; $i >= $end; $i--) {
            if ($start == 0 && $end == 0) {
                echo ' ';
            } else {
                echo $i . ', ';
            }
        }

        for ($i = $start; $i <= $end; $i++) {
            if ($start == 0 && $end == 0) {
                echo '<p>Fill the boxes above,' . '<br>' . 'with the numbers that you want to see the integers between them.</p>';
            } else {
                echo $i . ', ';
            }
        }
        echo '</div>';

        ?>
        <br><br>

        <?php
        $refrash = '<button style="font-size:18px"><a href="exercise3.1.php">Refresh..... &nbsp;&nbsp;<i class="fa fa-refresh fa-spin"
                    style="font-size:20px"></i></a></button>';
        if ($start != 0 && $end != 0) {
            echo $refrash;
        } else {
            echo ' ';
        }

        ?>
    </div>
</body>

</html>
