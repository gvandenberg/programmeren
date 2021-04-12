<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priemgetallen</title>
</head>
<body>

<form action="" method="post">
<input type="number" name="max">
<input type="submit" value="bereken">
<br><br>
</form>
    
</body>
</html>


<?php
if (isset($_POST)){

    class Priemgetal {
        public $value;

        function set_value($value) {
            $this->value = $value;
        }

        function get_value() {
            return $this->value;
        }

        function get_prime_numbers() {
            $max = $_POST['max'];
            $num = array();

            for ($a=0; $a<$max; $a++) {
                array_push($num, $a);
            }


            for ($i=2; $i<$max; $i++) {
                $count = 0;
                for ($n=2; $n<$num[$i]; $n++) {
                    if ($num[$i]%$n == 0)  {
                        $count++;
                    }
                }

                if ($count == 0) {
                    echo $num[$i]." ";
                }
            }
        }
    }

    $getal = new Priemgetal();
    $getal->set_value($_POST['max']);
    echo $getal->get_prime_numbers();
}

?>