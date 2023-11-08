<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <h1>2. while문을 이용한 factorial</h1>
    <hr>
    <?php   
        //while문을 이용하여 factorial 값을 구하는 함수를 작성하고 테스트하시오.
        function factorial($b){
            $result = 1;
            while($b >= 1){
                $result *= $b;
                $b--;
            }
            return $result;
        }
        $var = 6;
        echo "변수 \$var의 값 : $var<br>";
        echo "함수 실행 후 : ".factorial($var);
    ?>
</body>
</html>