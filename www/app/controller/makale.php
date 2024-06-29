<?php


if($post_url = route(1)){

require controller('makale-detay');



}else {
    $meta = [
        'title' => setting('title'),
        'description' => setting('description'),
        'keywords' => setting('keywords')
    ];
    $totalRecord = $db->from('posts')
        ->select('count(post_id) as total')
        ->where('post_status', 1)
        ->total();

    $pageLimit = 3;
    $pageParam = 'page';
    $pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

    $query = $db->from('posts')
        ->where('post_status', 1)
        ->orderby('post_id', 'DESC')
        ->limit($pagination['start'], $pagination['limit'])
        ->all();

    require view('makale');
}