<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <h1>1. for문을 활용한 문제</h1>
    <hr>
    <?php
        function printArray($arr){
            for($i = 0; $i < count($arr); $i++ ){
                for($j = 0; $j <= $i; $j++){
                    echo $arr[$j]." ";
                };
                echo "<br>";
            }
            for($i = count($arr)-1; $i > 0; $i--){
                for($j = 0; $j < $i; $j++){
                    echo $arr[$j]." ";
                };
                echo "<br>";
            }
        }
        $arr = array("A", "B", "C", "D", "E");
        printArray($arr);
    ?>
</body>
</html>