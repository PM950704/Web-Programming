<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <h1>2. 배열 뒤집기</h1>
    <hr>
    <?php
        function revsort($a){
            $tmp = array();
            sort($a);
            $tmp = array_reverse($a);
            return $tmp;
        }
        $arr = array("A", "B", "C", "D", "E");
        echo "revsort() 전 : ";
        foreach ($arr as $a) {
            echo $a." ";
        }
        echo "<br>";
        $arr = revsort($arr);
        echo "revsort() 후 : ";
        foreach ($arr as $a) {
            echo $a." ";
        }
    ?>
</body>
</html>