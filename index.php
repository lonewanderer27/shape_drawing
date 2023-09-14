<?php
  function getValue($key){
    return isset($_GET[$key]) ? $_GET[$key] : 5;
  }

  $line = getValue("line");
  $stripedLine = getValue("stripedLine");
  $square = getValue("square");
  $parallelogram = getValue("parallelogram");
  $triangle = getValue("triangle");
  $reverseTriangle = getValue("reverseTriangle");

  function DrawLine($number)
  {
    $pattern = "";

    for ($i = 0; $i < $number; $i++) {
      $pattern .= "*"; 
    }

    return $pattern;
  }

  function DrawStripedLine($number)
  {
    $pattern = "";

    for ($i = 0; $i < $number; $i++) {
      if ($i % 2 == 0) {
        $pattern .= "*";
      } else {
        $pattern .= "_";
      }
    }
    
    return $pattern;
  }

  function DrawSquare($number)
  {
    $pattern = "";

    for ($i = 0; $i < $number; $i++) {
      for ($j = 0; $j < $number; $j++) {
        $pattern .= "*";
      }
      $pattern .= "<br>";
    }

    return $pattern;
  }

  function DrawParallelogram($number)
  {
    $pattern = "";

    for ($i = 0; $i < $number; $i++) {
      for ($j = $number; $j > $i + 1; $j--) {
        $pattern .= "_";
      }
      for ($j = $number; $j > 0; $j--) {
        $pattern .= "*";
      }
      for ($j = 0; $j <= $i - 1; $j++) {
        $pattern .= "_";
      }
      $pattern .= "<br>";
    }

    return $pattern;
  }

  function DrawTriangle($number)
  {
    $pattern = "";

    for ($i = 0; $i < $number; $i++) {
      for ($j = $number; $j > $i; $j--) {
        $pattern .= "*";
      }
      for ($j = 0; $j <= $i - 1; $j++) {
        $pattern .= "_";
      }
      $pattern .= "<br>";
    }

    return $pattern;
  }

  function DrawReverseTriangle($number)
  {
    $pattern = "";

    for ($i = 0; $i < $number; $i++) {
      for ($j = 0; $j <= $i; $j++) {
        $pattern .= "*";
      }
      for ($j = $number; $j > $i; $j--) {
        $pattern .= "_";
      }
      $pattern .= "<br>";
    }
    
    return $pattern;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shape Drawing</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@materializecss/materialize@2.0.2-alpha/dist/css/materialize.min.css">
</head>
<body>
  <form method="get" style="padding: 10px 0px;" class="col s12">
    <div class="row">
      <div class="input-field col s12 m6" style="padding: 0px 10px">
        <input type="number" name="line" value='<?php echo $line?>' />
        <label>DrawLine:</label>
        <div style="padding: 20px 10px">
          <?php echo DrawLine($line); ?>
        </div>
      </div>

      <div class="input-field col s12 m6" style="padding: 0px 10px">
        <input type="number" name="stripedLine" value='<?php echo $stripedLine?>' />
        <label>DrawStripedLine:</label>
        <div style="padding: 20px 10px">
          <?php echo DrawStripedLine($stripedLine); ?>
        </div>
      </div>

      <div class="input-field col s12 m6" style="padding: 0px 10px">
        <input type="number" name="square" value='<?php echo $square?>' />
        <label>DrawSquare:</label>
        <div style="padding: 20px 10px">
          <?php echo DrawSquare($square); ?>
        </div>
      </div>

      <div class="input-field col s12 m6" style="padding: 0px 10px">
        <input type="number" name="parallelogram" value='<?php echo $parallelogram?>' />
        <label>DrawParallelogram:</label>
        <div style="padding: 20px 10px">
          <?php echo DrawParallelogram($parallelogram) ?>
        </div>
      </div>

      <div class="input-field col s12 m6" style="padding: 0px 10px">
        <input type="number" name="triangle" value='<?php echo $triangle?>' />
        <label>DrawTriangle:</label>
        <div style="padding: 20px 10px">
          <?php echo DrawTriangle($triangle) ?>
        </div>
      </div>

      <div class="input-field col s12 m6" style="padding: 0 10px">
        <input type="number" name="reverseTriangle" value='<?php echo $reverseTriangle?>' />
        <label>DrawReverse Triangle</label>
        <div style="padding: 20px 10px">
          <?php echo DrawReverseTriangle($reverseTriangle) ?>
        </div>
      </div>

      <div class="col s12 m6" style="padding: 0 10px">
        <button type="submit" class="btn">Draw</button>
      </div>
    </div>
  </form>
</body>
</html>