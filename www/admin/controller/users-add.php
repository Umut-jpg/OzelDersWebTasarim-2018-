<?php


    if (post('submit')) {




    $user_name = post('user_name');
    $user_pass = post('user_pass');
    $user_url = post('user_url');

                $query = $db->insert('users')
                ->set([
                    'user_name' => $user_name,
                    'user_pass' => password_hash($user_pass,PASSWORD_DEFAULT),
                    'user_url' => permalink($user_name)
                ]);



            if ($query) {
                header('Location:' . admin_url('users'));



            } else {

                $error = 'Kullanıcı Yüklenirken Bir Sorun Oluştu';
            }





}
// admin view içindeki users-add require ediyorum

require admin_view('users-add');