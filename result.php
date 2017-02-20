<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Stars #Codevember_08</title>
  <link rel="stylesheet" href="css/styleresult.css">
  <!-- style ratio -->
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styleratio.css">
  
</head>

<body>
  <?php  
  $surname = $_POST['radios'];
  $money = $_POST['money'];
  
?>
<div class="container">
  <div class="sky">
    <div class="stars"></div>
    <div class="stars1"></div>
    <div class="stars2"></div>
    <div class="shooting-stars"></div>
  </div>
  <div class="data">
    <div class="card">
      <form action="calculateApi.php" method="POST">
      <div class="box">
        <div class="answer" style="font-family: 'montserratbold';
    font-size: 61px;
    color: #4d47e9;">
          <?php  
            if($surname == 1){
    $money = $money / 35.03;
    echo round($money, 2);
  }else if($surname == 2){
    $money = $money / 37.20;
    echo round($money, 2);
  }else if($surname == 3){
    $money = $money / 0.31;
    echo round($money, 2);
  }
          ?>

        </div><!-- answer -->

        <div class="answer-surname" style="font-family: 'montserratregular';
    font-size: 25px;
    color: #4d47e9;
    letter-spacing: 2px;">
          <?php  
            if($surname == 1){
    echo "Us Dollar";
  }else if($surname == 2){
    echo "Euro";
  }else if($surname == 3){
    echo "Yen";
  }
          ?>

        </div><!-- answer -->
        </div> <!-- box -->
      </form>
      <a href="index.php" style="text-decoration: none;"><button type="submit">BACK</button></a>
    </div><!-- card -->
    <script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>
      <div class="textleft">
        <img src="img/text.png">
      </div><!-- text -->
  </div><!-- data -->

  
</div>
  
  
</body>
</html>
