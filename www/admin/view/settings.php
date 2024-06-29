

<?php require  admin_view('static/header') ?>



<div class="box-">
    <h1>
        AYARLAR
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<script>
    $(function () {
        $('[tab]').each(function () {
            <!-- tablist ve contenti değişkene aktarıyorum   -->
            var tabList= $('[tab-list] li', this),
                tabContent= $('[tab-content]',this);
            <!-- tablistin ilkini filterla seçiyorum  -->
            tabList.filter(':first').addClass('active');
            tabContent.filter(':not(:first)').hide();
            tabList.on('click',function (e) {
                var index = $(this).index();
                <!-- tıkladığımız tablistin aktif olmasını sağlıyorum  -->
                tabList.removeClass('active').filter(this).addClass('active');
                <!-- önceki tabı gizleyip yeni tabı açıyoruz açılırken fadeın ile fade efektiyle göstertiyorum   -->
                tabContent.hide().filter(':eq(' + index +')').fadeIn(300);
                e.preventDefault();
            });
        });
    })

</script>


<div class="box- " tab>
    <div class="admin-tab">
        <ul tab-list>
            <li>
                <a href="">Genel Ayarlar</a>
            </li>
            <li>
                <a href="">Bakım Ayarları</a>
            </li>
            <li>
                <a href="">Tema İçi Ayarlar</a>
            </li>


        </ul>
    </div>
    <form action="" method="post" class="form label">

        <div class="tab-container">
            <div tab-content>
                <ul>
                    <li>
                        <label >Site Başlığı</label>
                        <div class="form-content">
                            <input type="text" name="settings[title]" value="<?=setting('title')?>">
                        </div>
                    </li>
                    <li>
                        <label >Site Açıklaması</label>
                        <div class="form-content">
                            <input type="text" name="settings[description]" value="<?=setting('description')?>">
                        </div>
                    </li>
                    <li>
                        <label >Site Anahtar Kelimeler</label>
                        <div class="form-content">
                            <input type="text" name="settings[keywords]" value="<?=setting('keywords')?>">
                        </div>
                    </li>
                    <li>
                        <label >Site Teması</label>
                        <div class="form-content">
                            <select name="settings[theme]">
                                <option>Temayı Seçiniz</option>
                                <?php foreach ($themes as $theme): ?>
                                    <option <?=setting('theme') == $theme ? 'selected':null?> value="<?=$theme?>"><?=$theme?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
            <div tab-content>
                <ul>
                    <li>
                        <label>Bakım Modu</label>
                        <div class="form-content">
                            <select name="settings[maintenance_mode]">
                                <option <?=setting('maintenance_mode')== 1 ? 'selected': null ?> value="1">Aç</option>
                                <option <?=setting('maintenance_mode')== 2 ? 'selected': null ?> value="2">Kapa</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <label >Bakım Modu Başlığı</label>
                        <div class="form-content">
                            <input type="text" name="settings[maintenance_mode_title]" value="<?=setting('maintenance_mode_title')?>">
                        </div>
                    </li>
                    <li>
                        <label >Bakım Modu Açıklama</label>
                        <div class="form-content">
                            <textarea name="settings[maintenance_mode_description]"  cols="30" rows="7"><?=setting('maintenance_mode_description')?></textarea>

                        </div>
                    </li>
                </ul>
            </div>

            <div tab-content>
                <ul>
                    <li>
                        <label >Menü Başlığı</label>
                        <div class="form-content">
                            <input type="text" name="settings[logo]" value="<?=setting('logo')?>">
                        </div>
                    </li>
                    <li>
                        <label >Ana Sayfa Büyük Yazı</label>
                        <div class="form-content">
                            <input type="text" name="settings[buyukyazı]" value="<?=setting('buyukyazı')?>">
                        </div>
                    </li>
                    <li>
                        <label >Ana Sayfa Küçük Yazı</label>
                        <div class="form-content">
                            <input type="text" name="settings[kucukyazı]" value="<?=setting('kucukyazı')?>">
                        </div>
                    </li>
                    <li>
                        <label >Ana Sayfa Beyaz Button</label>
                        <div class="form-content">
                            <input type="text" name="settings[beyazbutton]" value="<?=setting('beyazbutton')?>">
                        </div>
                    </li>
                    <li>
                        <label >Ana Sayfa Beyaz Button URL (/ dan sonraki kısmı girmeniz yeterli olucaktır)</label>
                        <div class="form-content">
                            <input type="text" name="settings[beyazbuttonurl]" value="<?=setting('beyazbuttonurl')?>">
                        </div>
                    </li>
                    <li>
                        <label >Ana Sayfa Mavi Button</label>
                        <div class="form-content">
                            <input type="text" name="settings[mavibutton]" value="<?=setting('mavibutton')?>">
                        </div>
                    </li>
                    <li>
                        <label >Ana Sayfa Mavi Button URL (/ dan sonraki kısmı girmeniz yeterli olucaktır)</label>
                        <div class="form-content">
                            <input type="text" name="settings[mavibuttonurl]" value="<?=setting('mavibuttonurl')?>">
                        </div>
                    </li>
                    <li>
                        <label >Hakkımızda Yazısı</label>
                        <div class="form-content">
                            <textarea name="settings[hakk]"  cols="30" rows="7"><?=setting('hakk')?></textarea>

                        </div>
                    </li>
                    <li>
                        <label >FOOTER FACEBOOK URL</label>
                        <div class="form-content">
                            <input type="text" name="settings[facebook]" value="<?=setting('facebook')?>">
                        </div>
                    </li>
                    <li>
                        <label >FOOTER TWİTTER URL</label>
                        <div class="form-content">
                            <input type="text" name="settings[twitter]" value="<?=setting('twitter')?>">
                        </div>
                    </li>
                    <li>
                        <label >FOOTER İNSTAGRAM URL</label>
                        <div class="form-content">
                            <input type="text" name="settings[instagram]" value="<?=setting('instagram')?>">
                        </div>
                    </li>

                </ul>
            </div>
            <ul>
                <li class="submit">
                    <input type="hidden" name="submit" value="1">

                    <button type="submit">Kaydet</button>
                </li>
            </ul>
        </div>

        </form>
    </div>



<?php require  admin_view('static/footer') ?>
