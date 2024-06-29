

<?php require  admin_view('static/header') ?>



<div class="box-">
    <h1>
        KULLANICILAR


        <a href="<?= admin_url('users-add') ?>">Yeni Kullanıcı Ekle</a>

    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="table">
    <table>
        <thead>
        <tr>
            <th>Kullanıcı Adı</th>
            <th class="hide">Kullanıcı Kayıt Tarihi</th>
            <th>Kullanıcı  İşlem</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($query as $row): ?>
            <tr>


                <td>
                    <?= $row['user_name'] ?>
                </td>


                <td class="hide" title="<?=$row['user_date']?>">
                    <?= timeConvert($row['user_date']) ?>
                </td>
                <td>



                    <a onclick="return confirm('Silme işlemine devam ediyorsunuz?')"
                       href="<?= admin_url('delete?table=users&column=user_id&id=' . $row['user_id']) ?>"
                       class="btn">Kullanıcıyı Sil</a>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php if ($totalRecord > $pageLimit): ?>
    <div class="pagination">
        <ul>
            <?= $db->showPagination(admin_url(route(1) . '?' . $pageParam . '=[post]')) ?>
        </ul>
    </div>
<?php endif; ?>


<?php require  admin_view('static/footer') ?>
