<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

  body {
      background-image: url(https://static.aplada.gr/files/products/20284.jpg);
      background-repeat: repeat;
      /* background-size: cover; */
  }
  
  p.button {
      border: 6px outset #e03905;
      width: 9em;
      text-align: center;
      padding: 10px;
      border-radius: 3em;
      background-color: #fb8205;
      color: white;
      font-weight: 700;
      font-size: 14px;
      }
  
  p.button:hover {
      background-color: black;
      border-color: yellow;
      /* width: 11em; */
      /* padding:16px; */
  }
  
  a {
      text-decoration: none;
  }
  
  .die_2 {
      margin-left: 150px;
  }
  
  .die_1 {
      margin-right: 150px;
  }
  
  .die_1, .die_2 {
      width: fit-content;
      height: fit-content;
      border: 3px outset gray;
      padding: 4px 16px 4px 16px;
      text-align: center;
      font-size: 2em;
      background-color: #ffffff;
  }
  
  p {
      font-size: 21px;
      font-weight: 800;
  }
  
  .delay_score {
      font-size: 30px;
      font-weight: 800;
  }
  </style>

</head>
<body>
  <div align ="center">
      <h2> Game With Dies</h2>
      <h3>"Dies Game"<br>Instructions</h3>
      <p>--- You win if you bring 2 Equal Numbers or the Summary of the 2 dies is equal to 7 ---</p>
      </div>
  <hr>
  <div align ="center" id="all_game" class="zaria_game">
  
  <?php
    // echo("<br>");
    $die1 = (rand(1,6));
    // echo ("<br><br>");
    $die2 = (rand(1,6));
    // echo ("<br><br>");
    // echo ("<br><br>");
    ?>
    <p>You rolled
    <div class="die_1">
    <?php 
    echo $die1;
    ?>
    </div> 
    και 
    <div class="die_2">
    <?php
    echo $die2;
    ?>
    </div>
    </p>
    <br><br>
    <div class="delay_score">
        <?php
        if ($die1 == $die2) {
                echo "You rolled a $die1 and a $die2 - Two equal Numbers!!! &nbsp; You Win!!!";   
            } elseif ($die1+$die2==7) {
                echo "You rolled a $die1 and a $die2 - Τhe Summary is 7!!! &nbsp; You Win!!!";  
            } else {
                echo "You lose!";
        } ?>
    </div>
    <br><br><br>
    <?php
    echo '<a href="2.2.php">';
    echo '<p class="button">Take the dies again</p>';
    echo '</a>';
    ?>
</div>
  ?>
</body>
