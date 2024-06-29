<?php



if (post('submit')){


    $post_title = post('post_title');
    $post_url = permalink(post('post_url'));
     if (!post('post_url')) {
        $post_url = permalink($post_title);
    }
    $post_content = post('post_content');
    $post_short_content = post('post_short_content');
    $post_status = post('post_status');
    $post_seo = json_encode(post('post_seo'));

    

    if (!$post_url || !$post_content || !$post_status){
        $error = 'Boş Bırakılan Alanları Doldurunuz';
    } else {

    
        $query = $db->from('posts')
            ->where('post_url', $post_url)
            ->first();


        if ($query){
            $error = '<strong>' . $post_title . '</strong> adında bir makale bulunmaktadır.';
        } else {


            $query = $db->insert('posts')
                ->set([
                    'post_title' => $post_title,
                    'post_url' => $post_url,
                    'post_content' => $post_content,
                    'post_short_content' => $post_short_content,
                    'post_seo' => $post_seo,
                    'post_status' => $post_status
                ]);



            if ($query){
                header('Location:' . admin_url('posts'));
            } else {


                $error = 'Makale Yüklenirken Bir Sorun Oluştu';
            }

        }

    }

}


require admin_view('add-post');