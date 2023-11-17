<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <h1>3. 파일처리</h1>
    <hr>
    <?php
        $text = fopen("./file/exam.txt", "r");
        $lcnt = 1;
        $ccnt = 1;
        $wcnt = 1;
        echo "파일 내용 : <br>";
        while(!feof($text)){
            $char = fgetc($text);
            $ccnt++;
            if($char == "\n"){
                $char = "<br>";
                $lcnt++;
            }
            if(!feof($text)){
                echo $char."";
            }
            if($char == " "){
                $wcnt++;
            }
                
        }
        echo"<br><br>줄 수 : ".$lcnt."줄<br>";
        echo"단어 수 : ".$wcnt."개<br>";
        echo"글자 수 : ".$ccnt."자<br>";
    ?>
</body>
</html>