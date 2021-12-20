<?php
// プログラムを書くエリア
/**
 * var_dump(確認したい内容)
 * 
 * $変数 の中身が見られる
 */
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>

<!-- HTMLを書くエリア -->
    <form action="./3.php" method="post">
        <p>姓: <?php echo $_POST['sei'] ?></p>

        <!-- 名に入力された内容を表示してみて -->
        <p>名: </p>

        <!-- 性別を表示してみて -->
        <p>性別: </p>

        <!-- 生年月日から年齢を計算して表示してみて -->
        <p>年齢: </p>
    </form>
</body>
</html>