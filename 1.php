<?php
// プログラムを書くエリア

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>

<!-- HTMLを書くエリア -->
    <form action="./2.php" method="post">
        
        <!-- 
            inputの属性
            type: 入力の種類
            name: データの名前
            value: 初期値（や、選択したときのデータ）
         -->

        <label>姓</label>
        <input type="text" name="sei" value="">
        <br>

        <label>名</label>
        <input type="text" name="mei" value="">
        <br>

        <label>性別</label>
        <input type="radio" name="gender" value="男">男
        <input type="radio" name="gender" value="女">女

        <!-- 生年月日入力欄 -->

        <!--  -->
        
        <!-- 年齢入力欄 -->
        
        <button type="submit">OK</button>
    </form>
</body>
</html>