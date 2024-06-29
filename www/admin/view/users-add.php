

<?php require admin_view('static/header') ?>



<div class="box-">
    <h1>
        KULLANICI EKLE
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-" tab>

    <div class="admin-tab">
        <ul tab-list>
            <li>
                <a href="#">KULLANICI EKLE</a>
            </li>

        </ul>
    </div>
    <form action="" method="post" class="form label">
        <div class="tab-container">
            <div tab-content>
                <ul>
                    <li>
                        <label>Kullanıcı Adı</label>
                        <div class="form-content">
                            <input type="text" name="user_name" value="<?= post('user_name') ?>">
                        </div>
                    </li>
                    <li>
                        <label>Kullanıcı Şifre</label>
                        <div class="form-content">
                            <input type="text" name="user_pass" value="<?= post('user_pass') ?>">
                        </div>
                    </li>
                    </ul>
            </div>

            <ul>
                <li class="submit">


                    <input type="hidden" name="submit" value="1">
                    <button type="submit">KULLANICIYI EKLE</button>
                </li>
            </ul>
        </div>
    </form>
</div>


<?php require admin_view('static/footer') ?>

