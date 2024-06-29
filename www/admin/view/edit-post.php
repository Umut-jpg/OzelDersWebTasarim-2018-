

<?php require admin_view('static/header') ?>


<div class="box-">
    <h1>
        MAKALE DÜZENLEME PANELİ
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-" tab>

    <div class="admin-tab">
        <ul tab-list>
            <li>
                <a href="#">MAKALE DÜZENLE</a>
            </li>

        </ul>
    </div>

    <form action="" method="post" class="form label">
        <div class="tab-container">
            <div tab-content>
                <ul>
                    <li>
                        <label>Makale Başlığı</label>
                        <div class="form-content">


                            <input type="text" name="post_title" value="<?= post('post_title')  ? post('post_title') : $row['post_title']?>">
                        </div>
                    </li>
                    <li>
                        <label>Makaleye Ait Kısa İçerik</label>
                        <div class="form-content">


                            <textarea name="post_short_content"   cols="30" rows="10" ><?=post('post_short_content') ? post('post_short_content') : $row['post_short_content']?></textarea>
                        </div>
                    </li>
                    <li>
                        <label>Makale İçeriği</label>
                        <div class="form-content">


                            <textarea name="post_content"   cols="30" rows="10"><?=post('post_content') ? post('post_content'): $row['post_content']?></textarea>
                        </div>
                    </li>
                    <li>
                        <label>Makale Durumu</label>
                        <div class="form-content">
                            <select name="post_status">
                                <option value="1" <?=post('post_status') ? post('post_status') : $row['post_status']==  1 ? 'selected' : null?>>Makale Yayında</option>
                                <option value="2"<?=post('post_status') ? post('post_status') : $row['post_status']==  2 ? 'selected' : null?>>Makale Taslakta</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <div tab-content>
                <ul>
                    <li>
                        <label>Makale SEO Url</label>
                        <div class="form-content">


                            <input type="text" name="post_url" value="<?=post('post_url') ? post('post_url') : $row['post_url']?>">
                            <p>Boş bırakılırsa makalenin adını baz alır.</p>
                        </div>
                    </li>
                    <li>
                        <label>Makale SEO Başlık</label>
                        <div class="form-content">
                            <input type="text" name="post_seo[title]"   >
                        </div>
                    </li>
                    <li>
                        <label>Makale SEO Açıklama</label>
                        <div class="form-content">
                            <textarea name="post_seo[description]" cols="30" rows="5"></textarea>
                        </div>
                    </li>
                </ul>
            </div>
            <ul>
               <li class="submit">
                    <input type="hidden" name="submit" value="1">


                    <button type="submit">MAKALEYİ DÜZENLE</button>
                </li>
            </ul>
        </div>
    </form>
</div>


<?php require admin_view('static/footer') ?>
