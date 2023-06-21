<!DOCTYPE html>
<html>
<head>
  <title>データ表示</title>
</head>
<body>
  <h1>入力データ</h1>
  
  <?php
  // POSTリクエストからフォームデータを取得
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  // 取得したデータを表示
  echo "名前: " . $name . "<br>";
  echo "メールアドレス: " . $email . "<br>";
  ?>
</body>
</html>
