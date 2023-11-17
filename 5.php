<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    <?php
        $filePath = './file/client.txt';
        $fileContent = file_get_contents($filePath);

        if ($fileContent === false) {
            die('파일을 읽을 수 없습니다.');
        }

        // 각 라인을 탭으로 분리하고 처리
        $lines = explode("\n", $fileContent);

        // 정규 표현식을 사용하여 나이가 30세 이상인 고객 찾기
        
        foreach ($lines as $line) {
            $asciiCodes = explode(" ", $line);
            $array = array();
            $i = 0;
            $flag = false;
            foreach ($asciiCodes as $ascii) {
                // ASCII 코드를 문자로 변환
                $character = chr((int)$ascii);
                
                $array[$i] = $character;
                $i++;
                // 출력
            }
            foreach($array as $arr) {
                echo $arr."";
            }
            echo "<br>";
        
    } 
        
        
    ?>
</body>
</html>