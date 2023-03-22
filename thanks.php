<?php
  // var_dump($_POST);
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  // データベースへの接続　
  $dsn = 'mysql:dbname=contact2;host=localhost'; //dbname=データベース名、host=URLの頭
  $user = 'root'; //MAMPのユーザー名　デフォルト
  $password='root'; //MAMPのpassword
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');
  // SQL文の実行
  // $sql =''
  $sql = 'INSERT INTO `contact_db`(`name`, `email`, `content`) VALUES ("'.$name.'","'.$email.'","'.$message.'");'; //ここにSQL文を書く
  $stmt = $dbh->prepare($sql);
  $stmt->execute(); //ここで実行
  // データベースを切断する　nullは中身を空にする
  $dbh = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="thanks.css">
  <script src="https://kit.fontawesome.com/13867740db.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <img class="letter-img" src="img/letter.jpeg" alt="letter">
  <div class="text">
    <h1>お問い合わせいただきありがとうございます。</h1>
    <p>近日中にご連絡いたします。</p>
    <div class="goto-top">
    <i class="fa-solid fa-angles-right"></i>
    <a href="http://localhost/php_homework/">トップへ戻る</a>
    </div>
  </div>
  
  <!-- <p>Your name : <?php echo $name; ?></p>
  <p>Your email : <?php echo $email; ?></p>
  <p>Your message : <?php echo $message; ?></p> -->
</body>
</html>