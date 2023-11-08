<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
<h1>1. 짝수로 바꾸기</h1>
    <hr>
    <?php 
        function getEven($a){
            if ($a % 2 == 1) $a +=1;
            echo "함수 실행 후 : $a";
        }
        $a = 11;
        echo"변수 \$a의 값 : $a<br>";
        getEven($a);
    ?>
</body>
</html>