<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>
    <h1>연상(연관)배열 출력</h1>
    <hr>
    <?php 
        $array = array(
            "Kim" => array(
                "seoul"
            ),
            "Lee" => array(
                "Pusan", "Daegu"
            ),
            "Choi"=> array(
                "Incheon"
            ),
            "Park" => array(    
                "Suwon", "Daejon"
            ),
            "Jung"=> array(
                "Kwangju", "Chunchon", "Wonju"
            )
        );
        unset($array['Choi']);
        foreach ($array as $name => $cities) {
            echo $name . ": ";

            foreach ($cities as $city) {
                echo $city . " ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>