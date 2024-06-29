<?php


if(post('submit')) {
    if ($data = form_control()) {

        $row = $db->from('users')
            ->where('user_url', permalink($data['user_name']))
            ->where('user_rank',0 ,'!=')
            ->first();


        if (!$row) {
            $error = 'Kullanıcı Bilgilerinizi Kontrol Ediniz';

        } else {
            $password_verify = password_verify($data['user_pass'], $row['user_pass']);

            if ($password_verify) {
                User::Login($row);
                header('Location:' . admin_url(''));


            } else {
                $error = 'Girdiğiniz Şifre Kullanıcı Adı İle Uyuşmuyor';
            }
        }
    } else {
        $error = 'Lütfen Bilgilerinizi Girin';

    }

}
require admin_view('login');