<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>GET</title>
    </head>
    <body>
        <h2>Введите число:</h2>
            <form action="">
                <label>Число:</label>
                <input type="number" id="number" name="number" required>
                <button type="submit">Отправить</button>
            </form>

            <?php
                if (isset($_GET['number'])) {
                $number = $_GET['number'];
                echo "<p>Число: " . htmlspecialchars($number) . "</p>";

                    if ($number == 1) {
                    echo "<p>Привет</p>";

                    } elseif ($number == 2) {
                    echo "<p>Пока</p>";

                    } else {
                    echo "<p>Вы ввели не 1 и не 2</p>";
                    }
                }
            ?>

        <h2>Введите число:</h2>
            <form action="">
                <label>Число 1:</label>
                <input type="number" id="number1" name="number1" required>
                <label>Число 2:</label>
                <input type="number" id="number2" name="number2" required>
                <button type="submit">Отправить</button>
            </form>

            <?php

            if (isset($_GET['number1']) && isset($_GET['number2'])) {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];

    
            $sum = $number1 + $number2;

    
            echo "Сумма чисел: " . htmlspecialchars($sum);
            } else {
            echo "Числа не были переданы.";
            }
        
            ?>
    </body>
</html>
