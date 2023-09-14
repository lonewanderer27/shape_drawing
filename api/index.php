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
</head>
<body>
  <form method="get">
    <p>DrawLine: <input type="number" name="line" value='<?php echo $line?>' /> </p>
    <?php echo DrawLine($line); ?>

    <p>DrawStripedLine: <input type="number" name="stripedLine" value='<?php echo $stripedLine?>' /></p>
    <?php echo DrawStripedLine($stripedLine); ?>

    <p>DrawSquare: <input type="number" name="square" value='<?php echo $square?>' /></p>
    <?php echo DrawSquare($square); ?>

    <p>DrawParallelogram: <input type="number" name="parallelogram" value='<?php echo $parallelogram?>' /></p>
    <?php echo DrawParallelogram($parallelogram) ?>

    <p>DrawTriangle: <input type="number" name="triangle" value='<?php echo $triangle?>' /></p>
    <?php echo DrawTriangle($triangle) ?>

    <p>DrawReverseTriangle: <input type="number" name="reverseTriangle" value='<?php echo $reverseTriangle?>' /></p>
    <?php echo DrawReverseTriangle($reverseTriangle) ?>

    <button type="submit">Draw</button>
  </form>
</body>
</html>