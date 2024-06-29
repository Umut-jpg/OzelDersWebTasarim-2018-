<?php



$totalRecord = $db->from('posts')
    ->select('count(post_id) as total')
    ->total();


$pageLimit = 10;
$pageParam = 'post';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);


$query = $db->from('posts')
    ->orderby('post_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();


require admin_view('posts');