<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
    <?php 
        function sum($num1, $num2) {
            return $num1 + $num2;
        }
        function subtrair($num1, $num2) {
            return $num1 - $num2;
        }
        function dividir($num1, $num2) {
            return $num1 / $num2;
        }

        $operador = "/";
        match(true) {
            $operador == "+" => var_dump(sum(20, 10)),
            $operador == "-" => var_dump(subtrair(20, 10)),
            $operador == "/" => var_dump(dividir(20, 10)),
        }
    ?>
</body>
</html>