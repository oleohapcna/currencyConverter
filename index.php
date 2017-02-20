<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Stars #Codevember_08</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- style ratio -->
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styleratio.css">
  
</head>

<body>
  
<div class="container">
  <div class="sky">
    <div class="stars"></div>
    <div class="stars1"></div>
    <div class="stars2"></div>
    <div class="shooting-stars"></div>
  </div>
  <div class="data">
    <div class="card">
      <form action="result.php" method="POST">
      <input type="number" name="money" class="money" placeholder="input your money (Bath)">
      <img src="img/convert.png">
        <label class="radio"><input id="radio1" type="radio" name="radios" value="1" checked><span class="outer"><span class="inner"></span></span>Us Dollar</label>
        <label class="radio"><input id="radio2" type="radio" name="radios" value="2"><span class="outer"><span class="inner"></span></span>Euro</label>
        <label class="radio"><input id="radio3" type="radio" name="radios" value="3"><span class="outer"><span class="inner"></span></span>Yen</label>
        <button type="submit">CALCULATE</button>
      </form>
    </div><!-- card -->
    <script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script>
      <div class="textleft">
        <img src="img/text.png">
      </div><!-- text -->
  </div><!-- data -->

  
</div>
  
  
</body>
</html>
