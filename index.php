<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ряд чисел фибоначи</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main">
        <h1>Ряд чисел фибоначи:</h1>
        <ul>
            <?php
                function fibonacci($n=50,$first = 0,$second = 1) {
                    print_r('<li>' . 0 . '</li>');
                    $fib = [$first,$second];
                    for($i=1;$i<$n;$i++)
                        {
                            $fib[] = $fib[$i]+$fib[$i-1];
                            if ($fib[$i] % 2 == 0) {
                                print_r('<li class="blue-text">' . $fib[$i] . '</li>');
                            } else {
                    
                                print_r('<li class="black-text">' . $fib[$i] . '</li>');    
                            }
                        }
                    return $fib;
                }
                fibonacci(50);
            ?>
        </ul>
    </main>
</body>
</html>