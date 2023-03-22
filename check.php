<?php
  // var_dump($_POST);
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="check.css">
  <title>Document</title>
</head>
<body>
  <h1>下記の内容で送信してよろしいですか？</h1>
  <form action="thanks.php" method="POST">
    <div class="thanks-text">
      <div>
        <label for="">Your name*</label>
        <p><?php echo $name; ?></p>
      </div>
      <div>
        <label for="">Your email*</label>
        <p><?php echo $email; ?></p>
      </div>
      <div>
        <label for="">Your message*</label>
        <p class="message-text"><?php echo $message; ?></p>
      </div>
    </div>
    <div class="btn">
      <button type="button" onclick="history.back();">戻る</button>
      <input type="submit" value="送信">
    </div>
    <!-- <p><?php echo $name; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $message; ?></p> -->
    <!-- name属性追加 -->
    <!-- type="hidden"表示を隠す -->
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="message" value="<?php echo $message; ?>">
  </form>
</body>
</html>