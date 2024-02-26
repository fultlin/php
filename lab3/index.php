<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $equation = '22 * x = 220';

        for ($i = 0; $i < strlen($equation); $i++) {
            if ($equation[$i] == '=') {
                $equals = '=';
                $equals_i = $i;
                $value = intval(mb_substr($equation,$i+1));
            }
        }
 
        for ($i = 0; $i < $equals_i; $i++) {
            if ($equation[$i] == '+') {
                $operand = '+';
                $opernd_i = $i;
            }

            if ($equation[$i] == '-') {
                $operand = '-';
                $opernd_i = $i;
            }

            if ($equation[$i] == '*') {
                $operand = '*';
                $opernd_i = $i;
            }

            
            if ($equation[$i] == '/') {
                $operand = '/';
                $opernd_i = $i;
            }
        };

        $left = explode(' * ', substr($equation, 0, strpos($equation,$equals)));
        $leftItem = trim($left[0], ' ');
        $right_item = trim($left[1], ' ');

        if ($leftItem == 'x' && $operand=='+') {
            $x = 'Первое число';
            $answer = $value - int($right_item);
        }elseif ($right_item == 'x' && $operand=='+') {
            $x = 'Второе число';
            $answer = $value - intval($leftItem);
        }

        if ($leftItem == 'x' && $operand=='-') {
            $x = 'Первое число';
            $answer = $value + intval($right_item);
        }elseif ($right_item == 'x' && $operand=='-') {
            $x = 'Второе число';
            $answer = intval($leftItem) - $value;
        }

        if ($leftItem == 'x' && $operand=='*') {
            $x = 'Первое число';
            $answer = $value / intval($right_item);
        }elseif ($right_item == 'x' && $operand=='*') {
            $x = 'Второе число';
            $answer = $value / intval($leftItem);
        };

        if ($leftItem == 'x' && $operand=='/') {
            $x = 'Первое число';
            $answer = $value * intval($right_item);
        }elseif ($right_item == 'x' && $operand=='/') {
            $x = 'Второе число';
            $answer = intval($leftItem) / $value;
        };

        echo 'x - '.$x.'. Равно - '.$answer
    ?>
</body>
</html>