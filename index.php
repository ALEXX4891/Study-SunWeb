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
        <h1>Ряд чисел фибоначи (16 чисел):</h1>
        <ul>
            <?php
                function fibonacci($n,$first = 0,$second = 1) {
                    echo('<li class="red-text">' . 0 . '</li>');
                    $fib = [$first,$second];
                    for($i=1;$i<$n;$i++)
                        {
                            $fib[] = $fib[$i]+$fib[$i-1];
                            if ($i % 2 != 0) {
                                echo('<li class="blue-text">' . $fib[$i] . '</li>');
                            } else {
                    
                                echo('<li class="red-text">' . $fib[$i] . '</li>');    
                            }
                        }
                    return $fib;
                }
                fibonacci(16);
                //ff
            ?>
        </ul>
    </main>
</body>
</html>