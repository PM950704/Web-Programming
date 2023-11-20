<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>로그인 성공</h1>
    <hr>
    <?php
        $id = $_POST["id"];
        $pw = $_POST["pw"];
        echo "<strong>".$id."</strong>님의 비밀번호는 <strong>".$pw."</strong>입니다.";
?>
</body>
</html>