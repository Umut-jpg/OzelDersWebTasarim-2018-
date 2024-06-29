<!---->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=setting('maintenance_mode_title')?> </title>
</head>
<body>

<div id="web-bg">
<img src="<?=public_url('/OzeldersTema/img/bakım.jpg')?>" alt=""/>
</div>


   <?=setting('maintenance_mode_description')?>

</body>
</html>

<style>
    #web-bg {
        position: fixed;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
    }
    #web-bg img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        min-width: 50%;
        min-height: 50%;
    }
</style>
