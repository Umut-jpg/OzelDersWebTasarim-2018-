

<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta charset="UTF-8">
    <title>ADMİN PANELİ</title>


    <link rel="stylesheet" href="<?=admin_public_url('styles/main.css?v=' . time()) ?>">
    <link rel="stylesheet" href="<?=admin_public_url('styles/extra.css') ?>">



    <script src="<?=admin_public_url('scripts/jquery-1.12.2.min.js')?>"></script>
    <script src="https://cdn.tiny.cloud/1/0tcovy6lk9w742890856xhn5dwgmwc07bekmf7l9kdda1i9q/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- [2. TİNY URLSİ YEDEK = ]<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
    <script>tinymce.init({selector:'textarea'});</script>
    <script src="<?= admin_public_url('scripts/admin.js') ?>"></script>

</head>
<body>

<?php if ( session('user_rank') && session('user_rank') != 0 ): ?>


<div class="navbar ">
    <ul >
        <li>
            <a href="<?=admin_url()?>">
                <span class="fa fa-home"></span>
                <span class="title">
                    OZELDERS.COM
                </span>
            </a>
                </li>
            <li>
            <a href="../admin/add-post">
                <span class="fa fa-plus"></span>
                <span class="title">Yeni Makale Oluştur</span>
            </a>

           </li>
                <li >
            <a href="<?=admin_url('quit')?>">
                <span class="fa fa-sign-out"></span>
                <span class="title text-right ">
                    Admin Panelinden Çıkış Yap
                </span>
            </a>
        </li>
    </ul>
</div>

<!--sidebar ayarları-->

<div class="sidebar">

    <ul>
    <?php foreach ($menus as $mainUrl => $menu): ?>
        <li class="<?=(route(1) == $mainUrl) || isset($menu['submenu'][route(1)]) ?'active': null ?>">
            <a href="<?=admin_url($mainUrl)?>">
                <span class="fa fa-<?= $menu['icon']?>"></span>
                <span class="title">
                    <?= $menu['title']?>
                </span>
            </a>
            <?php if (isset($menu['submenu'])):?>
            <ul class="sub-menu">
                <?php foreach ($menu['submenu'] as $url => $title): ?>
                <li>
                    <a href="<?=admin_url($url)?>">
                        <?=$title?>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach;?>

        <li class="line">
            <span></span>
        </li>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Menüyü Gizle
        </span>
    </a>

</div>


<div class="content">

<?php if (isset($error)): ?>
        <div class="message error box-">
            <?=$error?>
        </div>
    <?php endif; ?>

<?php endif;?>




