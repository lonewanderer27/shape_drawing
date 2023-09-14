<?php
  $user_input = isset($_GET["user_input"]) ? $_GET["user_input"] : 7;
  $user_input_correct = false;
  $type_correct = false;

  if ($user_input >= 3 && $user_input % 2 != 0 ) {
    $user_input_correct = true;
  } 

  if (is_numeric($user_input) == true) {
    $type_correct = true;
  }

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
  <title>Shapes</title>
</head>
<body>
  <form method="GET" style="margin: 10px 0px; text-align: center;">
    <div style="display: flex; justify-content: center; margin: 30px 0;">
      <div class="type_correct" style="padding: 0px 10px; width: 200px;">
        <label>Num Input:</label>
        <input type="number" name="user_input" value='<?php echo $user_input?>' min="3" required />
        <button type="submit" style="margin-top: 5px">Draw</button>
        <?php if($user_input_correct == false): ?>
          <p style="margin-top: 10px">
            Number must be greater than 3 and has to be odd!
          </p>
        <br/>
        <?php endif;  ?>
        <?php if($type_correct == false): ?>
          <p style="margin-top: 10px">
            User input is empty!
          </p>
        <?php endif; ?>
        
      </div>
    </div>
    <?php if($user_input_correct == true && $type_correct == true): ?>
      <div>
        <div style="margin: 0px 10px">
          <p style="font-weight: bold">Line:</p>
          <div style="padding: 20px 10px">
            <?php echo DrawLine($user_input); ?>
          </div>
        </div>

        <div style="margin: 0 10px">
          <p style="font-weight: bold">StripedLine:</p>
          <div style="padding: 20px 10px">
            <?php echo DrawStripedLine($user_input); ?>
          </div>
        </div>

        <div style="margin: 0 10px">
          <p style="font-weight: bold">Square:</p>
          <div style="margin: 20px 10px">
            <?php echo DrawSquare($user_input); ?>
          </div>
        </div>

        <div style="margin: 0 10px">
          <p style="font-weight: bold">Parallelogram:</p>
          <div style="margin: 20px 10px">
            <?php echo DrawParallelogram($user_input) ?>
          </div>
        </div>

        <div style="margin: 0 10px">
          <p style="font-weight: bold">Triangle:</p>
          <div style="margin: 20px 10px">
            <?php echo DrawTriangle($user_input) ?>
          </div>
        </div>

        <div style="margin: 0 10px">
          <p style="font-weight: bold">Reverse Triangle</p>
          <div style="margin: 20px 10px">
            <?php echo DrawReverseTriangle($user_input) ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </form>
</body>
</html>