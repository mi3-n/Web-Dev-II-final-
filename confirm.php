<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: index.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'jf115124@gmail.com';
    $from = $post['email'];
    $subject = 'book';
    $body = <<<EOT
name： {$post['name']}
e-mail： {$post['email']}
message：
{$post['contact']}
EOT;
    // var_dump($body);
    // exit();
    //mb_send_mail($to, $subject, $body, "From: {$from}");

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="/css/contact.css">
</head>
<body>
    <!-- お問合せフォーム画面 -->
    <div class="container">
        <form action="" method="POST">
            <p class="book">Book</p>
            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputName">name</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['name']); ?></p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputEmail">email adress</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['email']); ?></p>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputName">day</label>
                        <input name="date" type="date" />
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['day']); ?></p>
                    </div>
                </div>
            </div>




            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="inputContent">message</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo nl2br(htmlspecialchars($post['contact'])); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9 offset-3" >
                    <button id="fbtn" type="return" onclick="location.href='index.php'">return</button>
                    <button id="sbtn" type="submit">send</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>