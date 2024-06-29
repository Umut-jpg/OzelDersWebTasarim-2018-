
<?php require admin_view('static/header') ?>

<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta charset="UTF-8">
    <title>Document</title>

    <!--styles-->
    <link rel="stylesheet" href="assets/styles/main.css">

    <!--scripts-->
    <script src="assets/scripts/jquery-1.12.2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>
    <script src="assets/scripts/admin.js"></script>

</head>
<body>


<div class="login-screen">


    <div class="login-logo">
        <a href="#">
            <img src="<?=public_url('/OzeldersTema/img/adminlogin.png')?>" alt="">
        </a>
    </div>


    <?php if (isset($error)): ?>
        <div class="message error box-">
            <?=$error?>
        </div>
    <?php endif; ?>


    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Kullanıcı Adı</label>
                <input type="text" name="user_name">
            </li>
            <li>
                <label for="password">Şifre</label>
                <input type="password" name="user_pass">
            </li>
            <li>
                <button type="submit" name="submit" value="1">Giriş Yap</button>

            </li>
        </ul>
    </form>



</div>

</body>
</html>


<?php require admin_view('static/footer') ?>

