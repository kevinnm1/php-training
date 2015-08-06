<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body bgcolor="#E6E6FA">

        <?php

        function calculate($edad) {
            $result = "";
            if (empty($edad)) {
                echo"error, you must enter a value";
            } else {
                if (is_numeric($edad)) {
                    if ($edad >= 18 && $edad <= 65) {
                        $result = "la edad ingresada es: $edad, usted es adulto";
                    } elseif ($edad < 18) {
                        $result = "la edad ingresada es: $edad, usted es joven";
                    } elseif ($edad > 65 && $edad <= 100) {
                        $result = "la edad ingresada es: $edad, usted es jubilado";
                    } elseif ($edad > 100) {
                        $result = "la edad ingresada es: $edad, usted es mentiroso, por favor ponga su edad real";
                    }
                } else {
                    $result = 'escriba la edad con numeros';
                }
            }
            return $result;
        }

//usage
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $value = $_GET["edad"];
        } else {
            $value = $_POST["edad"];
        }
        $res = calculate($value);
        
        ?>
        <b><?php echo $res; ?></b>
    </body>
</html>