<?php

$row = Makale::findPost($post_url);



if(!$row){
    header('Location' . site_url('404'));
    exit;
}


require view('makale-detay');